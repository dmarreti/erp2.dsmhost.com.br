<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:191',
            'lastname' => 'required|min:3|max:191',
            'email' => (!empty($this->request->all()['id']) ? 'required|email|unique:clients,email,' . $this->request->all()['id'] : 'required|email|unique:clients,email'),
            'document' => (!empty($this->request->all()['id']) ? 'required|min:11|max:20|unique:clients,document,' . $this->request->all()['id'] : 'required|min:11|max:20|unique:clients,document'),

            // Address
            'address' => 'required',
            'number' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'zipcode' => 'required|min:8|max:10',
            'state' => 'required',

            // Contacts
            'cellphone' => 'required',
        ];
    }
}
