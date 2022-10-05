<?php

namespace App\Http\Controllers;

use App\Models\FrontendHomeSlider;
use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    public function index()
    {
        $data = FrontendHomeSlider::first();
        return view('frontend.home', compact('data'));
    }
}
