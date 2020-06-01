<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\URL;

class FilesController extends Controller
{

    public function uploadFiles(Request $request, string $folder) // : Collection

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

            $file->move(public_path(str_replace('_','\\', $folder)), $filename);

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
        }
        else{
             return json_encode(['response' => 'error']);

        }
    }

    public function addImage($folder, $filename)
    {
        $path = request()->getSchemeAndHttpHost().'/'.$folder.'/'.$filename;
        
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
        $folder = str_replace('_','\\', $folder);
        $filesDeleted = "";
        foreach ($filenames as $file){
            // Storage::disk('public')->delete("{$folder}/{$file}");
            File::delete("{$folder}/{$file}");

            $filesDeleted.= "{$folder}/{$file};";
        }

        return [
            'message' => count($filenames) == 0 ? "empty files {$filesDeleted}" : "delete successfuly {$filesDeleted}",
        ];
    }
}
