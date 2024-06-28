<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $users = User::where('name', 'LIKE', "%{$query}%")
                ->orWhere('email', 'LIKE', "%{$query}%")
                ->paginate(10);
        } elseif ($request->get('show') == 'all') {
            $users = User::latest()->get();
        } else {
            $users = User::orderBy('created_at', 'desc')->paginate(2);
        }

        return view('admin.user.index', compact('users', 'query'));
    }

    public function store(Request $request, User $pengguna)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:4',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengguna->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '2',
        ]);

        return redirect()->back()->with('store', "Pengguna {$pengguna['name']} Berhasil dibuat");
    }

    public function update(Request $request, User $pengguna)
    {

        // Gunakan policy untuk otorisasi
        $this->authorize('verif', $pengguna);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:50|unique:users,email,' . $pengguna->id,
            'password' => 'nullable|string|min:4',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pengguna->name = $request->name;
        $pengguna->email = $request->email;
        if ($request->filled('password')) {
            $pengguna->password = Hash::make($request->password);
        }
        $pengguna->save();

        return redirect()->back()->with('update', 'Pengguna berhasil disimpan');
    }

    public function destroy($id)
    {

        $user = User::where('id', $id)->firstOrFail();

        // Gunakan policy untuk otorisasi
        $this->authorize('verif', $user);

        $user->delete();

        return redirect()->back()->with('destroy', 'Pengguna Berhasil dihapus');
    }
}
