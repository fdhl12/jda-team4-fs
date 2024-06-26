<?php

namespace App\Http\Controllers;

use App\Models\Demografi;
use App\Models\DemografiCategories;
use App\Models\ProfileKelurahan;
use Illuminate\Http\Request;

class DemografiController extends Controller
{

    public function index(ProfileKelurahan $profileKelurahan)
    {
        $demografi = $profileKelurahan->where('type', 'demografi')->value('data');

        return view('demografi', compact('demografi'));
    }
    public function admin(ProfileKelurahan $profileKelurahan)
    {

        $demografi = $profileKelurahan->where('type', 'demografi')->value('data');

        return view('admin.demografi.index', [
            'demografi' => $demografi,
        ]);
    }

    public function update(Request $request, ProfileKelurahan $profileKelurahan)
    {
        $request->validate([
            'demografi' => 'required',
        ]);

        $profileKelurahan->where('type', 'demografi')->update([
            'data' => $request->demografi
        ]);

        return redirect()->back()->with('update', 'Demografi Berhasil Disimpan');
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
