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

    public function store(Request $request, User $user)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:4',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '2',
        ]);

        return redirect()->back()->with('store', "Pengguna {$user['name']} Berhasil dibuat");
    }

    public function update(Request $request, User $user)
    {

        // Gunakan policy untuk otorisasi
        $this->authorize('verif', $user);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:50|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:4',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->back()->with('update', 'Pengguna berhasil disimpan');
    }

    public function destroy(User $user)
    {
        // Gunakan policy untuk otorisasi
        $this->authorize('verif', $user);

        $user->delete();

        return redirect()->back()->with('destroy', 'Pengguna Berhasil dihapus');
    }

    public function settings()
    {
        return view('admin.pengaturan.user');
    }

    public function updateUser(Request $request, $id)
    {

        $user = User::where('id', $id)->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'current_password' => 'nullable|string|min:8',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if ($request->filled('current_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Password Lama Anda Salah']);
            }
        }
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->update();
        $user->save();

        return redirect()->back()->with('success', 'User Berhasil Diperbarui');
    }
}
