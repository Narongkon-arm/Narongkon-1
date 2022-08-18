<?php

namespace App\Utils;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadFile
{
    public static function upload($file, $folder = '')
    {
        $filename = Carbon::now()->format('Y/m/d/') .Str::uuid() . '.' . $file->getClientOriginalExtension();
        $wxh = getimagesize($file);

        if($wxh) {
            $new_wxh = $wxh[0].'x'.$wxh[1];
        }else{
            $new_wxh = 'xxx';
        }

        $size = $file->getSize();

        $path = 'public';
        if (!empty($folder)) {
            $path = "{$path}/{$folder}";
        }
        $file->storeAs($path, $filename);

        $result = [
            'filename' => $filename,
            'wxh' => $new_wxh,
            'size' => $size
        ];

        return $result;
    }

    public static function delete($file, $folder = '')
    {
        return Storage::delete("public/{$folder}/{$file}");
    }
}
