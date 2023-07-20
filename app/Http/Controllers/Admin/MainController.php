<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Services\UploaderService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataType;

class MainController extends Controller
{
    protected string $moduleName;
    protected string $model;

    /**
     * @param string $action
     * @return DataType
     * @throws AuthorizationException
     */
    final protected function checkPermission(string $action): DataType
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $this->moduleName)->first();

        $this->authorize($action, app($dataType->model_name));

        return $dataType;
    }

    final protected function upload(string $referenceType, string $reference_id, string $folderName, Request $request)
    {
        $image = $request->file("image");

        $uploadFileService = new UploaderService();

        $folderName = env("APP_ENV") === "local" ? "public/$folderName" : $folderName;

        if (is_array($image)) {
            foreach ($image as $one) {
                list($isUploaded, $uploadedImage) = $uploadFileService->uploadImage($one, $folderName);
                if ($isUploaded) {
                    Image::create(["reference_type" => $referenceType, "reference_id" => $reference_id, "image_title" => $uploadedImage]);
                }
            }
        } else {
            list($isUploaded, $uploadedImage) = $uploadFileService->uploadImage($image, $folderName);
            if ($isUploaded) {
                Image::updateOrCreate(["reference_type" => $referenceType, "reference_id" => $reference_id], ["image_title" => $uploadedImage]);
            }
        }
    }
}
