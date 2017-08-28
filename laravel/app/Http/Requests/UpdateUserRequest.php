<?php

namespace App\Http\Requests;

use Auth;

class UpdateUserRequest extends Request
{
	public function authorize()
	{
		return Auth::user()->is_admin || $this->user()->id == Auth::user()->id;
	}

	public function rules()
	{
		return [
			'first_name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'email' => 'email|required:unique:users,email,'. Auth::user()->id .',id',
		];
	}
}
