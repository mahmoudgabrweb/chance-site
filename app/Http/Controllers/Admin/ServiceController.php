<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TCG\Voyager\Facades\Voyager;

class ServiceController extends MainController
{
    public function __construct()
    {
        $this->moduleName = "services";
        $this->model = Service::class;
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
            "title" => "required",
            "color_code" => "required",
            "description" => "required",
        ]);

        $this->model::create([
            "title" => $request->title,
            "color_code" => $request->color_code,
            "description" => $request->description,
        ]);

        return redirect(route("voyager.$this->moduleName.index"));
    }

    public function show(int $id): View
    {
        $dataType = $this->checkPermission('read');

        $details = $this->model::find($id);

        return view("admin.$this->moduleName.show", compact('dataType', 'details'));
    }

    public function edit(int $id): View
    {
        $dataType = $this->checkPermission('edit');

        $details = $this->model::find($id);

        return view("admin.$this->moduleName.edit", compact('dataType', 'details'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            "title" => "required",
            "color_code" => "required",
            "description" => "required",
        ]);

        $this->model::where('id', $id)->update([
            "title" => $request->title,
            "color_code" => $request->color_code,
            "description" => $request->description,
        ]);

        return redirect(route("voyager.$this->moduleName.show", $id));
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->checkPermission('delete');

        $this->model::destroy($id);

        return redirect(route("voyager.$this->moduleName.index"));
    }

}
