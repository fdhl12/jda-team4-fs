<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('articles.index', compact('articles', 'query'));
    }

    public function indexAdmin(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $articles = Article::where('title', 'LIKE', "%{$query}%")->get();
        } else {
            $articles = Article::with('user', 'category')->orderBy('created_at', 'desc')->paginate(10);
        }



        return view('admin.articles', compact('articles', 'query'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
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
            $imagePath = $request->file('image')->store('category_images', 'public');
        }

        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'image' => $imagePath,
        ]);

        return redirect()->route('articles.index')->with('success', 'article created successfully.');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $article->increment('views');
        $category = $article->category;
        return view('articles.show', compact('article', 'category'));
    }

    public function edit(article $article)
    {
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $article->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'article updated successfully.');
    }

    public function destroy(Article $article)
    {

        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'article deleted successfully.');
    }
}
