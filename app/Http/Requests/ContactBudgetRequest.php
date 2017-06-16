<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactBudgetRequest extends FormRequest
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
            'email' => 'required|email',
            'celphone' => 'required',
            'summary' => 'required|max:500',
            'name-company' => 'required',
            'city' => 'required',
            'do-company' => 'required',
            'summary' => 'required|max:500',
            'attached'=>'max:5120',

            'website' => 'required_without_all:appmobile,appweb,seo,3d,elearning,rrss,adwords,landing,ux,email-marketing,other',
            'appmobile' => 'required_without_all:website,appweb,seo,3d,elearning,rrss,adwords,landing,ux,email-marketing,other',
            'appweb' => 'required_without_all:website,appmobile,seo,3d,elearning,rrss,adwords,landing,ux,email-marketing,other',
            'seo' => 'required_without_all:website,appmobile,appweb,3d,elearning,rrss,adwords,landing,ux,email-marketing,other',
            '3d' => 'required_without_all:website,appmobile,appweb,seo,elearning,rrss,adwords,landing,ux,email-marketing,other',
            'elearning' => 'required_without_all:website,appmobile,appweb,seo,3d,rrss,adwords,landing,ux,email-marketing,other',
            'rrss' => 'required_without_all:website,appmobile,appweb,seo,3d,elearning,adwords,landing,ux,email-marketing,other',
            'adwords' => 'required_without_all:website,appmobile,appweb,seo,3d,elearning,rrss,landing,ux,email-marketing,other',
            'landing' => 'required_without_all:website,appmobile,appweb,seo,3d,elearning,rrss,adwords,ux,email-marketing,other',
            'ux' => 'required_without_all:website,appmobile,appweb,seo,3d,elearning,rrss,adwords,landing,email-marketing,other',
            'email-marketing' => 'required_without_all:website,appmobile,appweb,seo,3d,elearning,rrss,adwords,landing,ux,other',
            'other' => 'required_without_all:website,appmobile,appweb,seo,3d,elearning,rrss,adwords,landing,ux,email-marketing',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre requerido',
            'email.required' => 'El email es requerido',
            'email.email' => 'Debe ser un mail válido ',
            'celphone.required' => 'El número celular es requerido',
            'summary.required' => 'El número celular es requerido',
            'summary.max' => 'No debe exeder los 500 caracteres ',
            'name-company.required' => 'El nombre es requerido',
            'city.required' => 'La ciudad es requerida',
            'summary.required' => 'El resumen del proyecto es requerido',
            'attached.max' => 'El archivo no debe pesar mas de 5Mg',

            'website.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'appmobile.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'appweb.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'seo.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            '3d.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'elearning.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'rrss.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'adwords.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'landing.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'ux.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'email-marketing.required_without_all' => 'Debe escoger al menos un tipo proyecto',
            'other.required_without_all' => 'Debe escoger al menos un tipo proyecto',

        ];
    }
    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return new JsonResponse($errors, 422);
        }
        $errors += ['budget' => 'budget'];
        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    }
}
