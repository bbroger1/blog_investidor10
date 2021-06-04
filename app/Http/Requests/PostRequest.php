<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|unique:posts,title|string',
            'body' => 'required|string',
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'O campo título não pode estar vazio',
            'title.unique'          => 'Esse título já está cadastrada.',
            'body.required'         => 'O campo conteúdo não pode estar vazio',
            'category_id.required'  => 'Selecione a categoria do Post',
        ];
    }
}
