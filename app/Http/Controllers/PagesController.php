<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title' ,$title);
    }

    public function services(){
        $data = [
            'title' => 'services',
            'services' => ['web design','Programming', 'Animation']
        ];

        return view('pages.services')->with($data);
    }
}
