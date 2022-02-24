<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogsRequest extends FormRequest
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
                'title'=>'required|max:10',
                'text'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'required'=>'حقل : attribute مطلوب',
            'title.max'=>'هذا الحقل يجب ان يكون أقل من 10 أحرف',

        ];
    }

    public function attributes()
    {
        return [
            'title'=>'العنوان',
            'text'=>'التفاصيل',
        ];
    }


}
