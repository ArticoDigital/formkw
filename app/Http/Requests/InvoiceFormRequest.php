<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceFormRequest extends FormRequest
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
            'email' => 'required|email',
            'name' => 'required',
            'identification' => 'required',
            'facebook' => 'required',
            'address' => 'required',
            'city' => 'required',
            'number_invoice' => 'required',
            'invoice' => 'required|image|max:2000',
            'image' => 'required|image|max:2000',
            'check' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email requerido',
            'email.email' => 'Email no valido',
            'name.required' => 'Nombre requerido',
            'identification.required' => 'Cédula requerida',
            'facebook.required' => 'Usuario de Facebook requerido',
            'address.required' => 'Dirección requerida',
            'city.required' => 'Ciudad requerida',
            'number_invoice.required' => 'Número de factura requerida',
            'invoice.required' => 'Imagen de factura requerida',
            'invoice.image' => 'La imagen no es valida',
            'invoice.max' => 'La  imagen debe ser mayor a 2MB',
            'image.required' => 'Imagen de producto es requerida',
            'image.image' => 'La imagen de producto no es valida',
            'image.max' => 'La  imagen de producto debe ser mayor a 2MB',
            'check.required' => 'Debe aceptar los términos y condiciones',
            'g-recaptcha-response.required' => 'Ingresar captcha',
            'g-recaptcha-response.captcha' => 'Captcha no valido'
        ];
    }
}
