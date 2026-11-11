<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Show the landing page with the album collection.
     */
    public function index(): View
    {
        return view('landing', [
            'albums' => Album::ordered()->get(),
        ]);
    }
}
