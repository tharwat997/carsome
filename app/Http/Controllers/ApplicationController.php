<?php

namespace App\Http\Controllers;


class ApplicationController extends Controller
{
    public function __invoke()
    {
        return view('application');
    }
}
