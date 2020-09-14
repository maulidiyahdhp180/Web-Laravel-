<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about', ['nama' => 'Maulidiyah Dwi Hernita Pangastuti']);
    }
}