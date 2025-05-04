<?php

namespace App\Http\Controllers;
use App\Models\galery_testimonivideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class galerytestimonivideoController extends Controller
{
    public function index(){
        $testimoni = galery_testimonivideo::all();
        return view('testimoni.index', compact('testimoni'));
    }

    public function create(){
        $testimoni = galery_testimonivideo::all();
        return view('testimoni.create',compact('testimoni'));
    }

    public function store(Request $request){
        $request->validate([
            'judul'=>'required|min:5|string',
            'file_video' => 'required|file|mimetypes:video/mp4,video/avi,video/quicktime|max:51200',
            'deskripsi'=>'required|min:5|string',
        ]);

        $filePath = $request->file('file_video')->store('program_files','public');
        galery_testimonivideo::create([
            'judul'=>$request->judul,
            'file_video'=>$filePath,
            'deskripsi'=>$request->deskripsi,
        ]);
        return redirect()->route('galerytestimonivideo.index')->with('success', 'Video berhasil Ditambah');
    }

    public function edit($id){
        $testimoni = galery_testimonivideo::findOrFail($id);
        return view('testimoni.edit', compact('testimoni'));

    }

    public function update(Request $request, $id){
        $testimoni = galery_testimonivideo::findOrFail($id);

        $request->validate([
            'judul'=>'min:5|string',
            'file_video' => 'file|mimetypes:video/mp4,video/avi,video/quicktime|max:51200',
            'deskripsi'=>'min:5|string',
        ]);

        $data = [
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
        ];

        if($request->hasFile('file_video')){
            if($testimoni->file_video){
                Storage::disk('public')->delete($testimoni->file_video);
            }
            $filePath = $request->file('file_video')->store('program_files','public');
            $data['file_video'] = $filePath;
        }

        $testimoni->update($data);

        return redirect()->route('galerytestimonivideo.index')->with('success', 'Video berhasil Diubah');
    }

    public function destroy($id)
{
    $testimoni = galery_testimonivideo::findOrFail($id);


    if ($testimoni->file_video) {
        Storage::disk('public')->delete($testimoni->file_video);
    }

    $testimoni->delete();

    return redirect()->route('galerytestimonivideo.index')->with('success', 'Video berhasil dihapus.');
}
}
