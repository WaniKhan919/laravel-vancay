<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('frontend.vancacies.index');
    }
    public function create(){
        return view('frontend.vancacies.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);
        $model = new Job();
        $model->title = $request->title;
        $model->sub_title = $request->sub_title;
        $model->category_id = $request->category_id;
        $model->description = $request->description;
        $model->save();
        return view('frontend.vancacies.index');
    }
}
