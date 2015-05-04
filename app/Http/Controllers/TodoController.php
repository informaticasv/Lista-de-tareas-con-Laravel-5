<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use Request;

use App\Http\Requests\CreateToDoRequest;
use App\Todo as Todo;

class TodoController extends Controller {

	public function index(){
		$todos = Todo::paginate();
		return view('todos/index', compact('todos'));
	}

	public function nueva(){
		$todo = new Todo;
		return view('todos/nueva', compact('todo'));
	}

	public function guardar (CreateToDoRequest $request){
		return $this->save(new Todo);
	}

	public function editar(Todo $todo){
		// return Str::slug($todo->nombre);
		return view('todos/editar', compact('todo'));
	}

	public function actualizar(Todo $todo, CreateToDoRequest $request){
		return $this->save($todo);
	}

	private function save(Todo $todo){
		$data = Request::input();
		$data['completo'] = Request::get('completo', 0);
		$data['slug'] = Str::slug($data['nombre']);
		$todo->fill($data);
		$todo->save();

		return Redirect()->route('inicio');
	}


}
