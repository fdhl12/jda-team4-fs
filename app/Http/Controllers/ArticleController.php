<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $articles = Article::where('title', 'LIKE', "%{$query}%")
                ->orWhere('description', 'LIKE', "%{$query}%")
                ->orWhereHas('user', function ($q) use ($query) {
                    $q->Where('name', 'LIKE', "%{$query}%");
                })
                ->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $articles = Article::with('user')->orderBy('created_at', 'desc')->paginate(6);
        }

        return view('admin.berita.index', compact('articles', 'query'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $article->increment('views');
        $category = $article->category;
        return view('articles.show', compact('article', 'category'));
    }


    /**
     * Proses Admin
     * ============
     */

    public function indexAdminBerita(Request $request)
    {
        $query = $request->input('query');

        $articles = Article::with('user')->where('category_id', 1);

        if ($query) {
            $articles = $articles->where('title', 'LIKE', "%{$query}%")->get();
        } elseif (request()->get('show') == 'all'){
            $articles = Article::with('user')->latest()->get();
        } else {
            $articles = $articles->latest()->paginate(10);
        }

        return view('admin.berita.index', compact('articles', 'query'));
    }

    public function createBerita()
    {
        return view('admin.berita.create');
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
            $imagePath = $request->file('image')->store('images/berita', 'public');
        }

        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'image' => $imagePath,
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.berita')->with('store', "Berita {$request->title} berhasil dibuat");
    }

    public function editBerita(Article $article, $id)
    {
        $article = $article->find($id);

        return view('admin.berita.edit', compact('article'));
    }

    public function update(Request $request, Article $article, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $article = $article->find($id);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/berita', 'public');
        }

        $article->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.berita')->with('update', "Berita {$request->title} berhasil diubah");
    }

    public function destroy(Request $request, Article $article)
    {

        $article = $article->find($request->post('id'));

        /* delete image*/
        $storage = Storage::disk('public');
        if ($article->getRawOriginal('image') AND $storage->exists($article->getRawOriginal('image'))){
            $storage->delete($article->getRawOriginal('image'));
        }

        $article->delete();

        return redirect()->back()->with('destroy', "Berita {$article['title']} berhasil dihapus...");
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

    /**
     * Proses Pengumuman
     * =================
     */

    public function indexAdminPengumuman(Request $request)
    {
        $query = $request->input('query');

        $articles = Article::with('user')->where('category_id', 2);

        if ($query) {
            $articles = $articles->where('title', 'LIKE', "%{$query}%")->get();
        } elseif (request()->get('show') == 'all'){
            $articles = Article::with('user')->latest()->get();
        } else {
            $articles = $articles->latest()->paginate(10);
        }

        return view('admin.pengumuman.index', compact('articles', 'query'));
    }

    public function createPengumuman()
    {
        return view('admin.pengumuman.create');
    }

    public function storePengumuman(Request $request)
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

        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'image' => $imagePath,
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.pengumuman')->with('store', "Pengumuman {$request->title} berhasil dibuat");
    }

    public function editPengumuman(Article $article, $id)
    {
        $article = $article->find($id);

        return view('admin.pengumuman.edit', compact('article'));
    }

    public function updatePengumuman(Request $request, Article $article, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $article = $article->find($id);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/pengumuman', 'public');
        }

        $article->update([
            'title' => $request->title,
            'description' => $request->description,
         ]);

        return redirect()->route('admin.pengumuman')->with('update', "Pengumuman {$request->title} berhasil diubah");
    }

    public function destroyPengumuman(Request $request, Article $article)
    {

        $article = $article->find($request->post('id'));

        /* delete image*/
        $storage = Storage::disk('public');
        if ($article->getRawOriginal('image') AND $storage->exists($article->getRawOriginal('image'))){
            $storage->delete($article->getRawOriginal('image'));
        }

        $article->delete();

        return redirect()->back()->with('destroy', "Pengumuman {$article['title']} berhasil dihapus...");
    }

}
