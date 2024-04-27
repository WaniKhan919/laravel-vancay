<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = Job::where('user_id',auth()->user()->id)->get();
        return view('frontend.vancacies.index',compact('data'));
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
        ],[
            'category_id.required' => 'Category field is required',
        ]);
        $modal = new Job();
        $modal->user_id = auth()->user()->id;
        $modal->title = $request->title;
        $modal->sub_title = $request->sub_title;
        $modal->category_id = $request->category_id;
        $modal->description = $request->description;
        if($modal->save()){
            return redirect()->route('user.vacancies.index')->with(['success'=>'Vacancy added successfully']);
        }else{
            return redirect()->back()->with(['error'=>'Failed to add vacancy']);
        }
    }
    public function edit($id){
        
        $data = Job::find($id);
        return view('frontend.vancacies.edit',compact('data'));
    }
    public function update($id,Request $request){
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ],[
            'category_id.required' => 'Category field is required',
        ]);
        $modal = Job::find($id);
        $modal->title = $request->title;
        $modal->sub_title = $request->sub_title;
        $modal->category_id = $request->category_id;
        $modal->description = $request->description;
        if($modal->save()){
            return redirect()->route('user.vacancies.index')->with(['success'=>'Vacancy updated successfully']);
        }else{
            return redirect()->back()->with(['error'=>'Failed to update vacancy']);
        }
    }
    public function destory($id){
        $modal = Job::find($id);
        if($modal->delete()){
            return redirect()->route('user.vacancies.index')->with(['success'=>'Vacancy deleted successfully']);
        }else{
            return redirect()->back()->with(['error'=>'Failed to delete vacancy']);
        }
    }
}
