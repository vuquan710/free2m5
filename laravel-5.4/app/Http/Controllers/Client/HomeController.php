<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $rootView = 'AdminView.Homes.';

    public function index(Request $request)
    {
        return view($this->rootView . 'index');
    }
}
