<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function userInfo()
    {
        return view('info/userInfo');
    }
    public function trafficInfo()
    {
        return view('info/trafficInfo');
    }
    public function siteInfo()
    {
        return view('info/siteInfo');
    }
}




