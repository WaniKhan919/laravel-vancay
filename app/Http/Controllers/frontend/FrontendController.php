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

    public function job_details($id){
        $data = Job::with('comments', 'user')->find($id);
        return  view('frontend.job_details' , compact('data'));
    }
    public function all_vacancies(){
        $data = Job::with('comments', 'user')->orderBy('id','desc')->get();
        return  view('frontend.all_vacancies' , compact('data'));
    }
}
