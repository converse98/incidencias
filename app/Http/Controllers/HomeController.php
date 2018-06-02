<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function report()
    { //rutas en español, para el usuario
        //$project=Project::find(1);
        //$categories=$project->categories;
        $categories=Category::where('project_id',1)->get();
        return view('report')->with(compact('categories')); //nombres en ingles: variables y vistas, acontrollers y tablas
    }
}
