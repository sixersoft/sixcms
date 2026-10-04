<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Frontend home page.
     */
    public function index(): View
    {
        return view('frontend.index');
    }
}
