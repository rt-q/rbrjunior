<?php

namespace App\Http\Requests\V1;


use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'title' => ['required'],
                'content'=> ['required'],
                'author' => ['required']
            ];


        } else {
            return [
                'title' => ['sometimes', 'required'],
                'content'=> ['sometimes', 'required'],
                'author' => ['sometimes', 'required']
            ]; 
        }
    }
}
