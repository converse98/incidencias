<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestsController extends Controller
{
    
    public function index()
    {
        return 'Ruta /usuarios resuelta por admin\RequestsController@index';
    }
      /*  $requests = Requests::withTrashed()->get();
        return view('admin.requests.index')->with(compact('requests'));
    }
     
    public function store(Request $request)
    {
        $this->validate($request, Requests::$rules, Requests::$messages);
        Requests::create($request->all());
        return back()->with('notification', 'El proyecto se ha registrado correctamente.');
    }
     
    public function edit($id)
    {
        $request = Requests::find($id);
        return view('admin.requests.edit')->with(compact('requests'));
    }
     
    public function update($id, Request $request)
    {
        $this->validate($request, Requests::$rules, Requests::$messages);
        Requests::find($id)->update($request->all());
        return back()->with('notification', 'El proyecto se ha actualizado correctamente.');
    }
     
    public function delete($id)
    {
        Requests::find($id)->delete();
        return back()->with('notification', 'El proyecto se ha deshabilitado correctamente.');
    }
     
    public function restore($id)
    {
        Requests::withTrashed()->find($id)->restore();
        return back()->with('notification', 'El proyecto se ha habilitado correctamente.');
    }*/


}