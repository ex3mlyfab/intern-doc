<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class PDFController extends Controller
{
    //
    public function postingFormPrint()
    {
        Pdf::view('pdf.posting_letter')->save('/pdf/test.pdf');
    }
}
