<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::with('user')->orderBy('id' , 'desc')->get();

        return view('admin.job.index', compact('jobs'));
    }
}
