<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class FilesController extends Controller
{

    public function uploadFiles2(Request $request, string $folder) // : Collection

    {
        // $request->validate([
        //     'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        // ]);

        //dd($request->all());
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            // $extension = $file->getClientOriginalExtension();

            // $picture = date('His') . '-' . $filename;

            // Storage::disk('public')->put($filename, 'Contents');
            // php artisan storage:link

            $file->move(public_path(str_replace('_', '\\', $folder)), $filename);

            return response()->json(["message" => "Image Uploaded Succesfully"]);
        } else {
            return response()->json(["message" => "Select image first."]);
        }
    }

    public function angEditorUploadImage(Request $request, string $folder) // : Collection
    {
        $file = $request->file('file');
        // $uploaddir = 'img/';
        $filename = $file->getClientOriginalName();
        // $destination_path = $uploaddir;

        if ($file->move(public_path($folder), $filename)) {
            return json_encode($this->addImage($folder, $filename));
        } else {
            return json_encode(['response' => 'error']);
        }
    }

    public function addImage($folder, $filename)
    {
        $path = request()->getSchemeAndHttpHost() . '/' . $folder . '/' . $filename;

        // if (Image::create(['name'=>$filename, 'path'=>$path])) {

        //     return [
        //         'status' => true,
        //         'originalName' => $filename,
        //         'generatedName' => $filename,
        //         'msg'=>"Image upload successful",
        //         'imageUrl' => $path
        //     ];
        // }
        // return ['response'=>'error'];

        return [
            // 'status' => true,
            // 'originalName' => $filename,
            // 'generatedName' => $filename,
            // 'msg'=>"Image upload successful",
            'imageUrl' => $path
        ];
    }



    public function deleteFiles(Request $request)
    {

        $filenames = $request->input('filenames');
        $folder = $request->input('folder');
        $folder = str_replace('_', '\\', $folder);
        $filesDeleted = "";
        foreach ($filenames as $file) {
            // Storage::disk('public')->delete("{$folder}/{$file}");
            File::delete("{$folder}/{$file}");


            $filesDeleted .= "{$folder}/{$file};";
        }

        return [
            'message' => count($filenames) == 0 ? "empty files {$filesDeleted}" : "delete successfuly {$filesDeleted}",
        ];
    }

    public function uploadFiles(Request $request, string $folder) // : Collection
    {
        $request->validate([
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            // 'file' => 'required',
        ]);

        $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];

        $length =  $request->length;
        if ($length != 0/*$request->hasFile('file0')*/) {

            $names = '';//$files->getClientOriginalName();
            for ($i=0; $i < $length; $i++) {

                $file = $request->file("file{$i}");

                $filename = $file->getClientOriginalName();

                $file->move(public_path(str_replace('_', '\\', $folder)), $filename);

                $names .= public_path(str_replace('_', '\\', $folder)) .'/'. $filename;
            }
            // $files = $request->file('file');


            // $i = 0;

            // foreach ($files as $file) {

            //     $filename = $file->getClientOriginalName();
            //     // $extension = $file->getClientOriginalExtension();
            //     // $check=in_array($extension,$allowedfileExtension);
            //     // $filename2 = $file->store('public/recipe_images/');

            //     // $picture = date('His') . '-' . $filename;

            //     // Storage::disk('public')->put($filename, 'Contents');
            //     // php artisan storage:link
            //     $i++;

            //     $file->move(public_path(str_replace('_', '\\', $folder)), $filename2);
            // }

            // return response()->json(["message" => "Image Uploaded Succesfully", "names" => $names]);
            return [
                "message" => "Image Uploaded Succesfully", 
                "names" => $names,
                // "files" => $files,
                "i" => $i,
            ];
        } else {
            return response()->json(["message" => "Select image first.", 'lenght' => $length]);
        }
    }
}
