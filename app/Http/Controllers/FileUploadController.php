<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as HandlFile;

class FileUploadController extends Controller
{
    function index(){
        //Delete File From Database and Storage
        // $file = File::find(12);
        // HandlFile::delete(public_path($file->file_path));
        // $file->delete();

        $files = File::all();
        return view('file-upload',['files'=> $files]);
    }
    function store(FileUploadRequest $request){
        //Store on Local and private
        // $file = Storage::disk('local')->put('/',$request->file('file'));
        //$file = $request->file('file')->store('/','local');

        //Custum file name
        $file = $request->file('file');

        $customName = 'laravel_' . Str::uuid();
        $ext = $file->getClientOriginalExtension();
        $fileName = $customName . '.' . $ext;

        //Store File on public
        //$file = $request->file('file')->store('/','dir_public');

        $path = $file->storeAs('/', $fileName ,'dir_public');

        //store to DB
        $fileStore = new File();
        $fileStore->file_path = '/uploads/' . $path;
        $fileStore->save();

        return redirect()->back();
        // return redirect()->route('home');
        //return redirect()->away('https://www.google.com');
    }
    function download(){
        return Storage::disk('local')->download('9UXSdmAV9NSpzFrP557Q3VGLNrcjFxjloJnE9D0F.png');
    }
}
