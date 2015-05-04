<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateToDoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		// Request
		return [
			//
			'nombre' 		=> 'required|string',
			'fecha_inicio'	=> 'required|date',
			'fecha_fin'		=> 'required|date| after:fecha_inicio',
			'completo'		=> 'boolean ',
			// 'slug'			=> 'required | unique:todos'
		];
	}

}
