<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProduct extends FormRequest
{
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
            'name' => 'required | unique:products,name',
            'phone' => 'required | unique:products,phone',
            'address' => 'required',
            'email' => 'required | unique:products,email |email',
            'user_manage'=>'required',
            'mdl' => 'required | unique:products,mdl',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'khong duoc de trong',
            'name.unique' => 'tên đã tồn tại',
            'phone.required' => 'khong duoc de trong',
            'phone.unique' => 'phone đã tồn tại',
            'address.required' => 'khong duoc de trong',
            'email.required' => 'khong duoc de trong',
            'email.unique' => 'email đã tồn tại',
            'email.email' => 'khong dung dinh dang',
            'user_manage.required' => 'khong duoc de trong',
            'mdl.required' => 'khong duoc de trong',
            'mdl.unique' => 'Mã đã tồn tại',
            'status.required' => 'khong duoc de trong',
        ];
    }
}
