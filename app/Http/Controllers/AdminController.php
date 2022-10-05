<?php

namespace App\Http\Controllers;

use App\Models\FrontendHomeSlider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }


    public function topSlider()
    {
        $data = FrontendHomeSlider::first();
        return view('admin.top_slider.top_slider', compact('data'));
    }


    public function editTopSlider(Request $request)
    {
        
        $top_slider = FrontendHomeSlider::first();
        $top_slider->title = $request->title;
        $top_slider->sub_title = $request->sub_title;

        // dd($request->file('bg_image'));

        $image = $request->file('bg_image');
        if ($request->file('bg_image')) {

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->file('bg_image')->move('assets/images/top_part', $imageName);
            $top_slider->bg_image = $imageName;
        

        }

        $resume = $request->file('resume');
        if ($request->file('resume')) {
            $resumeName = time() . '.' . $resume->getClientOriginalExtension();
            $request->file('bg_image')->move('assets/resumes', $resumeName);
            $top_slider->resume = $resumeName;
        }

        $top_slider->save();

        return redirect()->back()->with('message', 'Top Slider updated successfully');
        

    }
}
