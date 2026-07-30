<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    function index(){
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

        dd('Saved');
    }
    function download(){
        return Storage::disk('local')->download('9UXSdmAV9NSpzFrP557Q3VGLNrcjFxjloJnE9D0F.png');
    }
}
