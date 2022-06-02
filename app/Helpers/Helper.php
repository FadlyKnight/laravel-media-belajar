<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Helper {

    public static function makedir($name_dir)
    {
        // $name_dir = $name_dir ?? 'foto'; 
        if (!file_exists('../'.$name_dir.'/' . date('Y'))) {
            // dd($name_dir);
            mkdir('../'.$name_dir.'/' . date('Y'), 0777, true);
        }
        if (!file_exists('../'.$name_dir.'/' . date('Y') . '/' . date('m'))) {
            mkdir('../'.$name_dir.'/' . date('Y') . '/' . date('m'), 0777, true);
        }
    }

    public function uploadFile($uploadedfile, $directory){
        $dir = $directory.'/' . date('Y') . '/' . date('m');
        $file = $file_foto = $uploadedfile;
        // dd($file_foto,$directory);
        $ext = $file_foto->getClientOriginalExtension();
        $tipe_file = $directory;
        $filename_foto            = $dir . '/' . Str::random(20) . '_' . date('d') . '_' . md5(time()) . $tipe_file.'.' . $ext;

        $file->move(public_path($dir), $filename_foto);
        return $filename_foto;
    }

    public function deleteFile($paths){
        if (File::exists($paths)) {
            File::delete($paths);
        }
    }

}