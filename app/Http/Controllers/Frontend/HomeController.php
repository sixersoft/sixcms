<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * ফ্রন্টএন্ড হোম পেজ।
     */
    public function index(): View
    {
        return view('frontend.index');
    }
}
