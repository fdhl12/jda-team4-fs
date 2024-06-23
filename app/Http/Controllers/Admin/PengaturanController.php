<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

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
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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
        }

        /* check if logo_text has changed */
        if ($request->hasFile('logo_text'))
        {
            $logo_text = $request->file('logo_text');

            $logo_text_path = $logo_text->storePubliclyAs('/', 'logo-text.'. $logo_text->getClientOriginalExtension(), 'public');

            $update = array_merge($update, [
                ['type' => 'logo_text', 'data' => 'storage/'. $logo_text_path],
            ]);
        }

        $pengaturan->query()->upsert($update, 'type');

        return redirect()->back()->with('update', 'Pengauran Berhasil Disimpan');
    }
}
