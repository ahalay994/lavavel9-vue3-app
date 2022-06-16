<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function show(): View|Factory|Application
    {
        return view('pages.main', [
            'meta' => ['title' => '', 'description' => '', 'image' => '', 'keywords' => '', 'author' => env('AUTHOR_PROJECT')]
        ]);
    }
}
