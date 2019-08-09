<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
        $data= ['name'=>'Fatima'];
        return view('pdf.invoice',compact('data'));
    }
    public function export()
    {
        $data= ['name'=>'Fatima'];
        $pdf = PDF::loadView('pdf.invoice', compact('data'));
        // return $pdf->download('invoice.pdf');
        return $pdf->setPaper('a4', 'landscape')->stream('invoice.pdf');
    }
}
