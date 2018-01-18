<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceFormRequest;
use App\Models\Form;
use Maatwebsite\Excel\Facades\Excel;

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

    /**
     * @throws \Maatwebsite\Excel\Exceptions\LaravelExcelException
     */
    public function download($token)
    {
        if ($token == "72FqPcmnEh3uzBxe") {
            $dataForm = Form::all();
            Excel::create('Filename', function ($excel) use ($dataForm) {
                $excel->sheet('name', function ($sheet) use ($dataForm) {
                    $sheet->fromModel($dataForm);
                });
            })->export('xls');
        }
        abort('404');
    }
}
