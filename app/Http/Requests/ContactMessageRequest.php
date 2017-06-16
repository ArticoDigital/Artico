<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMessageRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => 'required|email',
            'celphone' => 'required',
            'summary' => 'required|max:500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre requerido',
            'name.max' => 'No debe exeder los 100 caracteres',
            'email.required' => 'El email es requerido',
            'email.email' => 'Debe ser un mail válido ',
            'celphone.required' => 'El número celular es requerido',
            'summary.required' => 'El número celular es requerido',
            'summary.max' => 'No debe exeder los 500 caracteres ',
        ];
    }
    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return new JsonResponse($errors, 422);
        }
        $errors += ['message' => 'message'];
        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    }
}
