<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;

class LaravelPdfNuevoController extends Controller
{



    function pdfA() {
        $data = [
            'foo' => 'bar'
        ];
        $pdf = PDF::Make();
        $pdf->SetProtection(['copy', 'print'], '1234', 'owner_pass');
        $pdf->loadView('pdf.document', $data);
        return $pdf->Stream('document.pdf');
        //return $pdf->download('Poligrafo.pdf');
    }
}


