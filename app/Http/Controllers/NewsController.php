<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    // Method to display news articles with search functionality for users
    public function indexUser(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $newss = News::where('title', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->orWhereHas('user', function ($q) use ($query) {
                    $q->Where('name', 'LIKE', "%{$query}%");
                })
                ->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $newss = News::with('user')->orderBy('created_at', 'desc')->paginate(6);
        }

        return view('berita', compact('newss', 'query'));
    }

    // Method to display all news articles with search functionality for admin
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $newss = News::with('user')->where('title', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->orWhereHas('user', function ($q) use ($query) {
                    $q->Where('name', 'LIKE', "%{$query}%");
                })
                ->orderBy('created_at', 'desc')->paginate(10);
        } elseif ($request->get('show') == 'all'){
            $newss = News::with('user')->latest()->get();
        } else {
            $newss = News::with('user')->orderBy('created_at', 'desc')->paginate(10);
        }

        return view('admin.berita.index', compact('newss', 'query'));
    }

    // Method to display a specific news article
    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $newss = News::take(5)->get();
        return view('show.berita', compact('news', 'newss'));
    }

    // Method to show the create news form
    public function create()
    {
        return view('admin.berita.create');
    }

    // Method to store a new news article
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save image if provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/berita', 'public');
        }

        // Create a new news article
        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->input('title') . Str::random(20), '-'),
            'image' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.berita')->with('store', "Berita {$request->title} berhasil dibuat");
    }

    public function edit(News $news)
    {
        return view('admin.berita.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $update = [
            'description' => $request->description,
        ];

        /* when title is changed */
        if ($request->title != $news->title)
        {
            $update = array_merge($update, [
                'title' => $request->title,
                'slug' => Str::slug($request->input('title')  .'-'. Str::random(5), '-'),
            ]);
        }

        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            // Delete existing image
            $storage = Storage::disk('public');
            if ($news->getRawOriginal('image') && $storage->exists($news->getRawOriginal('image'))) {
                $storage->delete($news->getRawOriginal('image'));
            }

            $imagePath = $request->file('image')->store('images/berita', 'public');

            $update = array_merge($update, ['image' => $imagePath]);
        }

        $news->update($update);

        return redirect()->route('admin.berita')->with('update', "Berita {$request->title} berhasil diubah");
    }

    public function destroy(News $news)
    {

        /* delete image*/
        $storage = Storage::disk('public');
        if ($news->getRawOriginal('image') && $storage->exists($news->getRawOriginal('image'))) {
            $storage->delete($news->getRawOriginal('image'));
        }

        $news->delete();

        return redirect()->back()->with('destroy', "Berita {$news['title']} berhasil dihapus...");
    }

    // Method for CKEditor image upload
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
