<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataType;

class MainController extends Controller
{
    /**
     * @param string $action
     * @param string $slug
     * @return DataType
     * @throws AuthorizationException
     */
    final protected function checkPermission(string $action, string $slug): DataType
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        $this->authorize($action, app($dataType->model_name));

        return $dataType;
    }
}
