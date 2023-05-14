<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TCG\Voyager\Facades\Voyager;

class SliderController extends MainController
{
    private string $moduleName = "sliders";
    private string $model = Slider::class;

    /**
     * @return View
     * @throws AuthorizationException
     */
    public function index(): View
    {
        $dataType = $this->checkPermission('browse', $this->moduleName);

        $records = $this->model::all();

        $actions = [];
        foreach (Voyager::actions() as $action) {
            $actions[] = new $action($dataType, $records->first());
        }

        return view("admin.$this->moduleName.index", compact("actions", "dataType", "records"));
    }

    public function create(): View
    {
        $dataType = $this->checkPermission('add', $this->moduleName);

        return view("admin.$this->moduleName.create", compact('dataType'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "header" => "required",
            "title" => "required",
            "description" => "required",
        ]);

        $this->model::create([
            "header" => $request->header,
            "title" => $request->title,
            "link" => $request->link,
            "description" => $request->description,
        ]);

        return redirect(route("voyager.$this->moduleName.index"));
    }

    public function show(int $id): View
    {
        $dataType = $this->checkPermission('read', $this->moduleName);

        $details = $this->model::find($id);

        return view("admin.$this->moduleName.show", compact('dataType', 'details'));
    }

    public function edit(int $id): View
    {
        $dataType = $this->checkPermission('edit', $this->moduleName);

        $details = $this->model::find($id);

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

        return redirect(route("voyager.$this->moduleName.show", $id));

    }

    public function destroy(int $id): RedirectResponse
    {
        $this->checkPermission('delete', $this->moduleName);

        $this->model::destroy($id);

        return redirect(route("voyager.$this->moduleName.index"));
    }

}
