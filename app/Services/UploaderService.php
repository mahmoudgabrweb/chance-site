<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Image;

class UploaderService
{
    public function uploadImage(UploadedFile $avatarFile, string $path, int $width = 200, int $height = 200): array
    {
        $avatarName = $this->generateRandomString() . "_" . time() . "." . $avatarFile->getClientOriginalExtension();

        $avatarImage = Image::make($avatarFile->getRealPath());

        $avatarImage->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });

        $avatarImage->stream();

        $isUploaded = Storage::put("$path/$avatarName", $avatarImage);

        return [$isUploaded, $path . "/" . $avatarName];
    }

    public function generateRandomString(int $n = 10): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

}
