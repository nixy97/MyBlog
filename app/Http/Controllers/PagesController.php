<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pages(){
        $title = 'Welcome to myLaravel!';
        return view('pages.index')->with('title', $title);
    }
}
