@extends('frontend.layouts.app')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <h1 class="text-white">
                    <span>1500+</span> Jobs posted last week
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start features Area -->
<section class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4>Junior Laravel Developer</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4>Intermediate Laravel Developer</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4>Senior Laravel Developer</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End features Area -->

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            @foreach ($data as $job)
                <div class="col-lg-6 post-list">
                    <a href="{{ route('job.details') }}">
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
                                </div>
                                <p>
                                    {{ $job->sub_title ?? '' }}
                                 </p>
                                 <p>
                                    {{ $job->description ?? '' }}
                                 </p>
                            </div>
                        </div>
                    </a>

                    <a class="text-uppercase loadmore-btn mx-auto d-block" href="#">More Jobs</a>

                </div>    
            @endforeach
        </div>
    </div>
</section>
<!-- End post Area -->

@endsection
