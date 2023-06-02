<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TCG\Voyager\Facades\Voyager;
use AshAllenDesign\ShortURL\Classes\Builder;

class ArticleController extends MainController
{
    public function __construct()
    {
        $this->moduleName = "articles";
        $this->model = Article::class;
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
            "body" => "required",
        ]);

        $slug = str_replace(" ", "-", $request->title);

        $created = $this->model::create([
            "title" => $request->title,
            "body" => $request->body,
            "slug" => $slug,
            "created_by" => auth()->id()
        ]);

        $url = env("APP_URL") . "/articles/$created->id/$slug";

        $builder = new Builder();

        $shortURLObject = $builder->destinationUrl($url)
            ->trackVisits()
            ->trackBrowser()
            ->trackBrowserVersion()
            ->trackIPAddress()
            ->trackDeviceType()
            ->trackOperatingSystem()
            ->trackRefererURL()
            ->make();

        $shortURL = $shortURLObject->default_short_url;

        $this->model::where('id', $created->id)->update(["short_url" => $shortURL]);

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
            "body" => "required"
        ]);

        $slug = str_replace(" ", "-", $request->title);

        $url = env("APP_URL") . "/articles/$id/$slug";

        $builder = new Builder();

        $shortURLObject = $builder->destinationUrl($url)
            ->trackVisits()
            ->trackBrowser()
            ->trackBrowserVersion()
            ->trackIPAddress()
            ->trackDeviceType()
            ->trackOperatingSystem()
            ->trackRefererURL()
            ->make();

        $shortURL = $shortURLObject->default_short_url;

        $this->model::where('id', $id)->update([
            "title" => $request->title,
            "short_url" => $shortURL,
            "body" => $request->body
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
