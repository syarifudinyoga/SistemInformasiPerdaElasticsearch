<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    //
    public function Kontak(){
      return view('Kontak', ["title" => 'Kontak']);
    }
}
