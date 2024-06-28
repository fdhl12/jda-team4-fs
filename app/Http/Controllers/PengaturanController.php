<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaturanController extends Controller
{
    public function index(Pengaturan $pengaturan)
    {

        $nama = $pengaturan->where('type', 'name')->value('data');
        $deskripsi = $pengaturan->where('type', 'description')->value('data');
        $logo = $pengaturan->where('type', 'logo')->value('data');
        $logo_text = $pengaturan->where('type', 'logo_text')->value('data');
        $keywords = $pengaturan->where('type', 'keywords')->value('data');
        $tags = $pengaturan->where('type', 'tags')->value('data');

        return view('admin.pengaturan.index', [
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'logo' => $logo,
            'logo_text' => $logo_text,
            'keywords' => $keywords,
            'tags' => $tags,
        ]);
    }

    public function update(Request $request, Pengaturan $pengaturan)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'logo_text' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'keywords' => 'required',
            'tags' => 'required',
        ]);

        $update = [
            ['type' => 'name', 'data' => $request->name],
            ['type' => 'description', 'data' => $request->description],
            ['type' => 'keywords', 'data' => $request->keywords],
            ['type' => 'tags', 'data' => $request->tags],
        ];

        /* check if logo has changed */
        if ($request->hasFile('logo'))
        {
            $logo = $request->file('logo');

            $logo_path = $logo->storePubliclyAs('/', 'logo.'. $logo->getClientOriginalExtension(), 'public');

            $update = array_merge($update, [
                ['type' => 'logo', 'data' => 'storage/'. $logo_path],
            ]);

            /* delete old file */
            $old_logo = $pengaturan->where('type', 'logo')->value('data');
            Storage::disk('public')->delete($old_logo);
        }

        /* check if logo_text has changed */
        if ($request->hasFile('logo_text'))
        {
            $logo_text = $request->file('logo_text');

            $logo_text_path = $logo_text->storePubliclyAs('/', 'logo-text.'. $logo_text->getClientOriginalExtension(), 'public');

            $update = array_merge($update, [
                ['type' => 'logo_text', 'data' => 'storage/'. $logo_text_path],
            ]);

            /* delete old file */
            $old_logo_text = $pengaturan->where('type', 'logo_text')->value('data');
            Storage::disk('public')->delete($old_logo_text);
        }

        $pengaturan->query()->upsert($update, 'type');

        return redirect()->back()->with('update', 'Pengaturan Berhasil Disimpan');
    }

    public function index_home(Pengaturan $pengaturan)
    {
        $cover = $pengaturan->where('type', 'cover')->value('data');
        $video = $pengaturan->where('type', 'video')->value('data');
        $judul = $pengaturan->where('type', 'judul')->value('data');
        $sub_judul = $pengaturan->where('type', 'sub_judul')->value('data');
        $tagar = $pengaturan->where('type', 'tagar')->value('data');

        return view('admin.pengaturan.home', [
            'cover' => $cover,
            'video' => $video,
            'judul' => $judul,
            'sub_judul' => $sub_judul,
            'tagar' => $tagar,
        ]);
    }

    public function update_home(Request $request, Pengaturan $pengaturan)
    {
        $request->validate([
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:10240',
            'judul' => 'required',
            'sub_judul' => 'required',
            'tagar' => 'required',
        ]);

        $update = [
            ['type' => 'judul', 'data' => $request->judul],
            ['type' => 'sub_judul', 'data' => $request->sub_judul],
            ['type' => 'tagar', 'data' => $request->tagar],
        ];

        /* check if cover has changed */
        if ($request->hasFile('cover'))
        {
            $cover = $request->file('cover');

            /* delete old file */
            $old_cover = $pengaturan->where('type', 'cover')->value('data');
            Storage::disk('public')->delete($old_cover);

            $cover_path = $cover->storePubliclyAs('/', 'cover.'. $cover->getClientOriginalExtension(), 'public');

            $update = array_merge($update, [
                ['type' => 'cover', 'data' => $cover_path . '?v='.time()],
            ]);

        }

        /* check if video has changed */
        if ($request->hasFile('video'))
        {
            $video = $request->file('video');

            /* delete old file */
            $old_video = $pengaturan->where('type', 'video')->value('data');
            Storage::disk('public')->delete($old_video);

            $video_path = $video->storePubliclyAs('/', 'video.'. $video->getClientOriginalExtension(), 'public');

            $update = array_merge($update, [
                ['type' => 'video', 'data' => $video_path . '?v='.time()],
            ]);
        }

        $pengaturan->query()->upsert($update, 'type');

        return redirect()->back()->with('update', 'Pengaturan Halaman Utama Berhasil Disimpan');
    }
}
