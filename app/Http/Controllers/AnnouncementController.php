<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('query');

        $announcements = Announcement::with('user');

        if ($query) {
            $announcements = $announcements->where('title', 'LIKE', "%{$query}%")->get();
        } elseif (request()->get('show') == 'all') {
            $announcements = Announcement::with('user')->latest()->get();
        } else {
            $announcements = $announcements->latest()->paginate(10);
        }

        return view('admin.pengumuman.index', compact('announcements', 'query'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/pengumuman', 'public');
        }

        Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'image' => $imagePath,
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.pengumuman')->with('store', "Pengumuman {$request->title} berhasil dibuat");
    }

    public function edit(Announcement $announcement, $id)
    {
        $announcement = $announcement->find($id);

        return view('admin.pengumuman.edit', compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $announcement = $announcement->find($id);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/pengumuman', 'public');
        }

        $announcement->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.pengumuman')->with('update', "Pengumuman {$request->title} berhasil diubah");
    }

    public function destroy(Request $request, Announcement $announcement)
    {

        $announcement = $announcement->find($request->post('id'));

        /* delete image*/
        $storage = Storage::disk('public');
        if ($announcement->getRawOriginal('image') and $storage->exists($announcement->getRawOriginal('image'))) {
            $storage->delete($announcement->getRawOriginal('image'));
        }

        $announcement->delete();

        return redirect()->back()->with('destroy', "Pengumuman {$announcement['title']} berhasil dihapus...");
    }
    public function ckeditor()
    {
        if (request()->hasFile('upload')) {
            $file = request()->file('upload');
            $originName = $file->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $file->move(public_path('images'), $fileName);

            $CKEditorFuncNum = request()->input('CKEditorFuncNum');
            $url = asset("images/{$fileName}");
            $msg = 'Gambar berhasil diunggah';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
