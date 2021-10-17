<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title ='Welcome to the Neo-blog';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title='About the Neo-blog';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' =>'How We Can Help You',
            'services' => ['Web Development', 'Mobile Development', 'Game Development']
        );
        return view('pages.services')->with($data);
    }
}
