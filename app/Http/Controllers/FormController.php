<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceFormRequest;
use App\Models\Form;

class FormController extends Controller
{
    public function update(InvoiceFormRequest $request)
    {
        $data = $request->validated();
        $data['invoice'] = $request->file('invoice')->store('invoices');
        $data['image'] = $request->file('image')->store('invoices');
        Form::create($data);

        return redirect()->back()->with('success', 1);
    }
}
