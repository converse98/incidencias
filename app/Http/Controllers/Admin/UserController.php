<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Project;
use App\ProjectUser;

class UserController extends Controller
{
	public function index(){

		$users= User::where('role',1)->get();
		return view('admin.users.index')->with(compact('users'));
	}

	public function store(Request $request){
		$rules=[
			'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6'
		];
		$messages=[
			'name.required'=> 'Es necesario ingresar el nombre de usuario.',
			'name.max'=> 'El nombre es demasiado extenso.',
			'email.required'=>'Es indispensable ingresar el correo del usuario.',
			'email.email'=>'El correo del usuario no es válido.',
			'email.max'=>'El correo es demsiado extenso.',
			'email.unique'=>'Este correo ya se encuentra en uso.',
			'password.required'=>'Olvidó ingresar la contraseña.',
			'password.min'=>'La contraseña debe presentar al menos 6 caracteres.'
		];
		$this->validate($request,$rules,$messages);

		//creamos un nuevo usuario

		$user=new User();
		$user->name= $request->input('name');
		$user->email= $request->input('email');
		$user->password= bcrypt($request->input('password'));
		$user->role=1;
		$user->save();

		return back()->with('notification','Usuario registrado exitosamente.');
	}

	public function edit($id){
		$user=User::find($id);
		$projects=Project::all();
		$projects_user = ProjectUser::where('user_id', $user->id)->get();
		return view('admin.users.edit')->with(compact('user','projects', 'projects_user'));
	}

	public function update($id, Request $request){
		
		$rules=[
			'name'=>'required|max:255',
			'password'=>'nullable|min:6'
		];

		$messages=[
			'name.required'=>'Es necesario ingresar el nombre del usuario.',
			'name.max'=>'El nombre es demsiado extenso.',
			'password.min'=>'La contraseña debe presentar al menos 6 caracteres.'
		];
		//validación de informacion
		$this->validate($request, $rules, $messages);
		//capturamos al usuario enbase a su id
		$user = User::find($id);
		$user->name = $request->input('name');

		$password = $request->input('password');

		if($password)
			$user->password=bcrypt($password);

		$user->save(); //podemos usarlo sobre usarios recientemente instanciados o obtenidos de una consulta
		
		return back()->with('notification','Usuario modificado exitosamente.'); //var de sesion
	}

	public function delete($id){
		$user=User::find($id);
		$user->delete();

		return back()->with('notification','Usuario dado de baja correctamente.'); //var de sesion

	}
}

