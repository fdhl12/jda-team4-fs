<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Untuk pengguna umum
    public function index()
    {

        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::with(['article.user'])->findOrFail($id);
        $article = $category->article;

        return view('category', compact('category', 'article'));
    }

    public function indexAdmin(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $categories = Category::where('name', 'LIKE', "%{$query}%")->get();
        } else {
            $categories = Category::all();
        }
        return view('admin.categories', compact('categories', 'query'));
    }

    public function showAdmin($id)
    {

        $category = Category::with('article.user')->findOrFail($id); // Memuat kategori beserta konten dan pengguna
        $article = $category->article;

        return view('admin.show.category', compact('category', 'contents'));
    }
    // Method untuk menampilkan form pembuatan category baru
    public function create()
    {
        return view('admin.create.category');
    }
    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'name' => 'required|string|max:55',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Content created successfully.');
    }

    // Method untuk menampilkan form pengeditan category
    public function edit($id)
    {
        // Mengambil data category dari database
        $category = Category::findOrFail($id);

        // Mengirim data ke view untuk ditampilkan dalam form pengeditan
        return view('admin.edit.category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'name' => 'required|string|max:55',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Mengambil data category dari database
        $category = Category::findOrFail($id);

        // Mengupdate data category dengan data baru dari request
        $category->update($request->all());

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {

        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Content deleted successfully.');
    }
}
