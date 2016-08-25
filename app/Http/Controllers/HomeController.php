<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
    	echo "dari function index";
    }

    public function school ($school=""){
    	echo "dari function sekolah".$school;
    }

    public function detail ($school=""){
    	$data['school'] = $school;
    	return view('school')->with($data);
    }


}
