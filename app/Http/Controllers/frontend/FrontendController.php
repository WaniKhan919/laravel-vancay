<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data = Job::limit(6)->orderBy('id','desc')->get();
        return view('frontend.index',compact('data'));
    }

    public function job_details(){
        return  view('frontend.job_details');
    }
}
