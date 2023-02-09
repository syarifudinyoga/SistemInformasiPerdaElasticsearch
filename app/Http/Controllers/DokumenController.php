<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumenController extends Controller
{
    //
    public function PeraturanDaerah(){
        return view('PeraturanDaerah', ["title" => 'Dokumen']);
    }
    public function PeraturanGubernur(){
        return view('PeraturanGubernur', ["title" => 'Dokumen']);
    }
    public function PeraturanBersamaGubernur(){
        return view('PeraturanBersamaGubernur', ["title" => 'Dokumen']);
    }
    public function PeraturanDPRD(){
        return view('PeraturanDPRD', ["title" => 'Dokumen']);
    }
}
