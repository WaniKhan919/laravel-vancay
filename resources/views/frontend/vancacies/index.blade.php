@extends('frontend.layouts.app')
@section('content')
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    My Vacancies				
                </h1>	
                <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about-us.html"> Vacancies</a></p>
            </div>											
        </div>
    </div>
</section>
<section class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-feature border">
                    <a href="{{ route('user.vacancies.create') }}" class="font-bold font-weight-bold">Add Vacancy</a>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<hr>
<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            @foreach ($data as $job)    
                <div class="col-lg-6 post-list">
                    <div class="single-post d-flex flex-row">
                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <h4>{{ $job->title ?? '' }}</h4>
                                    <h6>
                                        @if($job->category_id == 1)
                                            Junior Laravel Developer
                                        @elseif($job->category_id == 2)
                                            Intermidiate Laravel Developer
                                        @elseif($job->category_id == 3)
                                            Experienced Laravel Developer
                                        @endif
                                    </h6>
                                </div>
                                
                                <ul class="btns">
                                    <li><a type="button" data-toggle="modal" data-target="#exampleModal_{{ $job->id }}"><span class="lnr lnr-trash"></span></a></li>
                                    <li><a href="{{ route('user.vacancies.edit',$job->id) }}">Edit</a></li>
                                </ul>
                            </div>
                            <p>
                               {{ $job->sub_title ?? '' }}
                            </p>
                            <p>
                               {{ $job->description ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal_{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete vacancy!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Are you sure to delete this?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a class="btn btn-danger" href="{{ route('user.vacancies.destory',$job->id) }}">Yes</a>
                        </div>
                      </div>
                    </div>
                  </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End post Area -->

@endsection
