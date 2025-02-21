<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //Resume of CV Septian Hadi Nugroho.pdf
    public function download_cv(){
        $file = public_path('storage/pdf/CV Septian Hadi Nugroho.pdf');

        return response()->download($file);
    }
}
