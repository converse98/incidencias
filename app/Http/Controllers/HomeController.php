<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Incident;

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
    public function getreport()
    { //rutas en español, para el usuario
        //$project=Project::find(1);
        //$categories=$project->categories;
        $categories=Category::where('project_id',1)->get();
        return view('report')->with(compact('categories')); //nombres en ingles: variables y vistas, acontrollers y tablas
    }

    public function postreport(Request $request)
    {
        
        $rules=[
            'category_id'=>'sometimes|exists:categories,id',
            'severity'=>'required|in:M,N,A',
            'title'=>'required|min:5',
            'description'=>'required|min:15'
        ];
        
        $messages=[
            'category_id.exists'=>'La categoría seleccionada no existe en nuestra base de datos',
            'title.required'=>'Es necesario ingresar un título para la incidencia',
            'title.min'=>'El título debe presentar al menos 15 caracteres.'
        ];

        $this->validate($request,$rules,$messages);

        //Incident::create($request->all())
       
       // nada de esto va a ocurrir, si la validación falla. 
        $incident=new Incident();
        $incident->category_id=$request->input('category_id')?:null;
        $incident->severity=$request->input('severity');
        $incident->title=$request->input('title');
        $incident->description=$request->input('description');
        $incident->client_id=auth()->user()->id;

        $incident->save();
        
        return back();
    }
}
