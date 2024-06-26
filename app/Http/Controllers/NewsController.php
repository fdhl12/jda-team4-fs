<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(Request $request)
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

        return view('admin.berita.index', compact('newss', 'query'));
    }

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

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $newss = News::all();
        return view('show.berita', compact('news', 'newss'));
    }


    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/berita', 'public');
        }

        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->input('title') . Str::random(20), '-'),
            'image' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.berita')->with('store', "Berita {$request->title} berhasil dibuat");
    }

    public function edit(News $news, $id)
    {
        $news = $news->find($id);

        return view('admin.berita.edit', compact('news'));
    }

    public function update(Request $request, News $news, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $news = $news->find($id);

        $update = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        // Simpan gambar jika ada
        if ($request->hasFile('image')) {

            /* delete image*/
            $storage = Storage::disk('public');
            if ($news->getRawOriginal('image') and $storage->exists($news->getRawOriginal('image'))) {
                $storage->delete($news->getRawOriginal('image'));
            }

            $imagePath = $request->file('image')->store('images/berita', 'public');

            $update = array_merge($update, [
                'image' => $imagePath
            ]);
        }

        $news->update($update);

        return redirect()->route('admin.berita')->with('update', "Berita {$request->title} berhasil diubah");
    }

    public function destroy(Request $request, News $news)
    {

        $news = $news->find($request->post('id'));

        /* delete image*/
        $storage = Storage::disk('public');
        if ($news->getRawOriginal('image') and $storage->exists($news->getRawOriginal('image'))) {
            $storage->delete($news->getRawOriginal('image'));
        }

        $news->delete();

        return redirect()->back()->with('destroy', "Berita {$news['title']} berhasil dihapus...");
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
