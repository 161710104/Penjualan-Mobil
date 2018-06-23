<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;

class FrontendController extends Controller
{
    public function showpermerk($id){
           	$merk = Mobil::findorfail($id);
           	return view('frontend.catalog.show')->with(compact('merk'));
           }

}
