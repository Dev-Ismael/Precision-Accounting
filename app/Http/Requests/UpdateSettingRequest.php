<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'seo_description'   => ['required' , 'string' , 'max:255' ],
            'seo_keywords'      => ['required' , 'string' , 'max:255' ],
            'address'           => ['required' , 'string' , 'max:255' ],
            'location'          => ['required' , 'string' , 'max:255' ],
            'email'             => ['required' , 'email' , 'max:255' ],
            'phone'             => ['required' , 'string' , 'max:255' ],
            'sms'               => ['required' , 'string' , 'max:255' ],
            'whatsapp'          => ['required' , 'string' , 'max:255' ],
            'linkedin'          => ['required' , 'string' , 'max:255' ],
            'facebook'          => ['required' , 'string' , 'max:255' ],
            'twitter'           => ['required' , 'string' , 'max:255' ],
            'youtube'           => ['required' , 'string' , 'max:255' ],
        ];
    }
}
