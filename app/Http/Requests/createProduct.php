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
            'mdl' => 'required | unique:products,mdl',
            'name' => 'required | unique:products,name',
            'phone' => 'required | unique:products,phone',
            'email' => 'required | unique:products,email |email',
            'address' => 'required',
            'status' => 'require'
        ];
    }

    public function messages()
    {
        return [
            'mdl.required' => 'khong duoc de trong',
            'mdl.unique' => 'Mã đã tồn tại',
            'name.required' => 'khong duoc de trong',
            'name.unique' => 'tên đã tồn tại',
            'phone.required' => 'khong duoc de trong',
            'phone.unique' => 'phone đã tồn tại',
            'email.required' => 'khong duoc de trong',
            'email.unique' => 'email đã tồn tại',
            'email.email' => 'khong dung dinh dang',
            'address.required' => 'khong duoc de trong',
            'status.required' => 'khong duoc de trong',
        ];
    }
}
