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
            $announcements = $announcements->where('title', 'LIKE', "%{$query}%")->paginate(10);
        } elseif ($request->get('show') == 'all') {
            $announcements = $announcements->latest()->paginate(10);
        } else {
            $announcements = $announcements->latest()->paginate(10);
        }
    
        return view('admin.pengumuman.index', compact('announcements', 'query'));
    }
    
    public function indexUser(Request $request)
    {
        $query = $request->input('query');
        $announcements = Announcement::with('user');
    
        if ($query) {
            $announcements = $announcements->where('title', 'LIKE', "%{$query}%")->paginate(10);
        } elseif ($request->get('show') == 'all') {
            $announcements = $announcements->latest()->paginate(10);
        } else {
            $announcements = $announcements->latest()->paginate(10);
        }
    
        return view('pengumuman', compact('announcements', 'query'));
    }
    

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function show($slug)
    {
        $announcement = Announcement::where('slug', $slug)->firstOrFail();
        $announcements = Announcement::take(5)->get();
        return view('show.pengumuman', compact('announcement', 'announcements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/pengumuman', 'public');
        }

        Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->input('title') . '-' . Str::random(20), '-'),
            'image' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.pengumuman')->with('store', "Pengumuman {$request->title} berhasil dibuat");
    }

    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('admin.pengumuman.edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $announcement = Announcement::findOrFail($id);

        $update = [
            'title' => $request->title,
            'slug' => Str::slug($request->input('title') . '-' . Str::random(20), '-'),
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $storage = Storage::disk('public');
            if ($announcement->getRawOriginal('image') && $storage->exists($announcement->getRawOriginal('image'))) {
                $storage->delete($announcement->getRawOriginal('image'));
            }

            $imagePath = $request->file('image')->store('images/pengumuman', 'public');
            $update['image'] = $imagePath;
        }

        $announcement->update($update);

        return redirect()->route('admin.pengumuman')->with('update', "Pengumuman {$request->title} berhasil diubah");
    }

    public function destroy(Request $request, $id)
    {
        $announcement = Announcement::findOrFail($id);

        $storage = Storage::disk('public');
        if ($announcement->getRawOriginal('image') && $storage->exists($announcement->getRawOriginal('image'))) {
            $storage->delete($announcement->getRawOriginal('image'));
        }

        $announcement->delete();

        return redirect()->back()->with('destroy', "Pengumuman {$announcement->title} berhasil dihapus...");
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
