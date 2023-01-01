<?php

namespace Client\Http\Requests\Backend\Client;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class UpdateUserRequest extends FormRequest
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
        // dd($this->id);
        return [
            'email' => 'required|unique:users,email,'.$this->id,
            'name' => 'required|string',
            'phone' => 'required|numeric|regex:/(98)[0-9]{8}/|unique:users,phone_no,'.$this->id,
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Please Enter Client's Name.",
            'email.required' => "Please Enter Email.",
            'email.email' => "Please Enter A Valid E-mail.",
            'phone_no.required' => "Please Enter Phone Number.",
            'status.required' => "Please Select Client Status."
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
