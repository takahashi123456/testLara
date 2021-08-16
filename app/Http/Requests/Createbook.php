<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Createbook extends FormRequest
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
            //フォームのルールを定義
            'title' =>'required|max:100',
            'author' => 'required|max:40',
            'isbn' => 'required|max:40',
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'author' => '著者',
            
        ];
    }
}
