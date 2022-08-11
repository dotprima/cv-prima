<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function resume()
    {
        return view('resume');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function blog()
    {
        return view('blog');
    }

   

}
