<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {

        $socials = Role::all();
        return view('admin.index.roles', compact('roles'));
    }
    // Method untuk menampilkan form pembuatan Role baru
    public function create()
    {
        return view('admin.create.role');
    }
    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'name' => 'required|string|max:55',
        ]);

        Role::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Content created successfully.');
    }

    // Method untuk menampilkan form pengeditan Role
    public function edit($id)
    {
        // Mengambil data Role dari database
        $role = Role::findOrFail($id);

        // Mengirim data ke view untuk ditampilkan dalam form pengeditan
        return view('admin.edit.role', compact('role'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'name' => 'required|string|max:55',
        ]);

        // Mengambil data Role dari database
        $role = Role::findOrFail($id);

        // Mengupdate data Role dengan data baru dari request
        $role->update($request->all());

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {

        $role->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Role deleted successfully.');
    }
}
