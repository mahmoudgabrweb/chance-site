<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Slider;
use App\Services\UploaderService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TCG\Voyager\Facades\Voyager;

class SliderController extends MainController
{
    public function __construct()
    {
        $this->moduleName = "sliders";
        $this->model = Slider::class;
    }

    public function index(): View
    {
        $dataType = $this->checkPermission('browse');

        $records = $this->model::all();

        $actions = [];
        foreach (Voyager::actions() as $action) {
            $actions[] = new $action($dataType, $records->first());
        }

        return view("admin.$this->moduleName.index", compact("actions", "dataType", "records"));
    }

    public function create(): View
    {
        $dataType = $this->checkPermission('add');

        return view("admin.$this->moduleName.create", compact('dataType'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "header" => "required",
            "title" => "required",
            "image" => "required|image",
            "description" => "required",
        ]);

        $created = $this->model::create([
            "header" => $request->header,
            "title" => $request->title,
            "link" => $request->link,
            "description" => $request->description,
        ]);

        $this->upload("slider", $created->id, "sliders", $request);

        return redirect(route("voyager.$this->moduleName.index"));
    }

    public function show(int $id): View
    {
        $dataType = $this->checkPermission('read');

        $details = $this->model::find($id);

        $details->image = Image::where("reference_type", "slider")->where("reference_id", $id)->first()->image_title;

        return view("admin.$this->moduleName.show", compact('dataType', 'details'));
    }

    public function edit(int $id): View
    {
        $dataType = $this->checkPermission('edit');

        $details = $this->model::find($id);

        $details->image = Image::where("reference_type", "slider")->where("reference_id", $id)->first()->image_title;

        return view("admin.$this->moduleName.edit", compact('dataType', 'details'));

    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            "header" => "required",
            "title" => "required",
            "description" => "required",
        ]);

        $this->model::where('id', $id)->update([
            "header" => $request->header,
            "title" => $request->title,
            "link" => $request->link,
            "description" => $request->description,
        ]);

        if ($request->file("image")) {
            $this->upload("slider", $id, "sliders", $request);
        }

        return redirect(route("voyager.$this->moduleName.show", $id));
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->checkPermission('delete');

        $this->model::destroy($id);

        return redirect(route("voyager.$this->moduleName.index"));
    }

}
