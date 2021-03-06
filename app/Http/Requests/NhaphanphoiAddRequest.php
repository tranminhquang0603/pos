<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NhaphanphoiAddRequest extends Request {

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
		return [
			'txtMa' => 'required|unique:nhaphanphoi,npp_ma',
			'txtTen' => 'required',
			'selKV' => 'required',
			'txtEmail' => 'email'
		];
	}

	public function messages()
	{
		return [
			'txtMa.required' => '<div class="alert alert-danger">
    								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    								<strong>Vui lòng không để trống trường này!</strong>
								</div>',
			'txtMa.unique' => '<div class="alert alert-danger">
    								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    								<strong>Dữ liệu đã tồn tại!</strong>
								</div>',
			'txtTen.required' => '<div class="alert alert-danger">
    								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    								<strong>Vui lòng không để trống trường này!</strong>
								</div>',
			'selKV.required' => '<div class="alert alert-danger">
    								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    								<strong>Vui lòng không để trống trường này!</strong>
								</div>',
			'txtEmail.email' => '<div class="alert alert-danger">
    								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    								<strong>Email không hợp lệ!</strong>
								</div>'
		];
	}


}
