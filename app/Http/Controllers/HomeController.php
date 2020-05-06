<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use File;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('page/home');
    }

    public function admin()
    {
        return File::get(public_path() . '/index2.html');
    }

    public function testApi()
    {
        return [
            "bnr1" => "2464068867179663_2495149740738242",
            "bnr2" => "2464068867179663_2495149934071556",
            "inter1" => "2464068867179663_2495150220738194",
            "inter2" => "2464068867179663_2495150424071507"
        ];
    }
}
