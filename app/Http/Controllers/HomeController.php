<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PartnerComment;
use App\Models\PartnerTop;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index()
    {
        return view('app.home.index', [
            'categories' => Category::all(),
            'comments' => PartnerComment::all(),
            'top' => PartnerTop::all()->map(fn($item) => $item->partner)
        ]);
    }


    public function about(): View
    {
        return view('app.guest.about');
    }

    public function blog(): View
    {
        return view('app.guest.blog', [
            'posts' => Post::published()->get()
        ]);
    }

    public function partnership(): View
    {
        return view('app.guest.partnership');
    }


}
