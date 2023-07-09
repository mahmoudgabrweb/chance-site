<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\View\View;

class FrontController extends Controller
{
    public function index(): View
    {
        $pageName = "home";
        $data['sliders'] = Slider::with("images")->get();
        $data['services'] = Service::limit(6)->get();
        $data['events'] = Event::with("images")->orderByDesc("created_at")->limit(4)->get();
        $data['articles'] = Article::with("images")->orderByDesc("created_at")->limit(3)->get();
        return view("front.index", compact("pageName", "data"));
    }

    public function services(): View
    {
        $pageName = "services";
        $data['services'] = Service::limit(6)->get();
        return view("front.services", compact("pageName", "data"));
    }

    public function events(): View
    {
        $pageName = "events";
        $data['events'] = Event::with("images")->orderByDesc("created_at")->get();
        return view("front.events", compact("pageName", "data"));
    }

    public function articles(): View
    {
        $pageName = "articles";
        $data['articles'] = Article::with("images")->orderByDesc("created_at")->paginate(9);
        return view("front.articles", compact("pageName", "data"));
    }

    public function about(): View
    {
        $pageName = "about";
        return view("front.about", compact("pageName"));
    }

    public function contact(): View
    {
        $pageName = "contact";
        return view("front.contact", compact("pageName"));
    }
}
