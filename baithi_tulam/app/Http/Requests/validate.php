<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validate extends FormRequest
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
            'name' => 'required',
            'cat' => 'numeric',
            'price'=>'required|numeric',
            'image' => 'required|mimes:jpg,png|min:1|max:5000' //unit file is kb
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên sản phẩm',
            'cat' =>'Tên danh mục',
            'price' =>'Giá tiền',
            'image' =>'Ảnh sản phẩm',
            
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'image.required' => ':attribute chưa được upload',
            'image.mimes' => ':attribute phải có đuôi jpg,png',
            'image.min' => 'Kích thước :attribute phải lớn hơn 1kb',
            'image.max' => 'Kích thước :attribute phải nhỏ hơn 5mb',
            'cat.numeric' => 'Chưa chọn :attribute', 
            'numeric' =>   ':attribute phải là số',
        ];
    }
}