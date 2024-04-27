<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        return view('frontend.index');
    }

    public function job_details(){
        return  view('frontend.job_details');
    }
}
