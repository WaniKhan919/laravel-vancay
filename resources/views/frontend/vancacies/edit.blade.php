@extends('frontend.layouts.app')
@section('content')
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-start align-items-start">
            <div class="about-content about-content1 col-lg-12 ">
                <div class="post-list">
                    @if(session()->has('error'))
                        <div class="alert alert-success">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('user.vacancies.update',$data->id) }}" method="POST" class="single-post">
                        @csrf
                        <div class="titles mb-2">
                            <h4>Edit Laravel Vacancy</h4>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12 col-md-6 mb-2">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $data->title ?? '' }}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <label for="">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" value="{{ $data->sub_title ?? '' }}">
                                @error('sub_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12 col-md-6 mb-2">
                                <label for="">Category</label>
                                <select name="category_id" class="form-control">
                                    <option disabled value="" selected>Select Category</option>
                                    <option value="1" @if($data->category_id == 1) selected @endif>Junior Laravel Developer</option>
                                    <option value="2" @if($data->category_id == 2) selected @endif>Intermediate Laravel Developer</option>
                                    <option value="3" @if($data->category_id == 3) selected @endif>Experienced Laravel Developer</option>
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control">{{ $data->description ?? '' }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end mt-3">
                            <button class="ticker-btn border-0" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>											
        </div>
    </div>
</section>

@endsection
