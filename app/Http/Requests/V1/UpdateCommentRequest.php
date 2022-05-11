<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
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
            'content'=> ['required'],
            'author'=> ['required']
        ];
        } else {
            return [
                'content'=> ['sometimes', 'required'],
                'author'=> ['sometimes', 'required']
            ];        
        }
        
    } 
}
