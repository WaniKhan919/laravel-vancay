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
<section class="mt-5 mb-5">
    <div class="container d-flex align-items-center justify-content-center test-center">
        <h4 class="text-capitalize">Laravel Vacancies</h4>
    </div>
</section>
<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            @foreach ($data as $job)
                <div class="col-lg-6 post-list">
                    <a href="{{ route('job.details', $job->id) }}">
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
                                <p class="text-secondary">
                                    {{ $job->sub_title ?? '' }}
                                 </p>
                                 <p class="text-secondary">
                                    {{ $job->description ?? '' }}
                                 </p>
                            </div>
                        </div>
                    </a>

                </div>
            @endforeach

            <a class="text-uppercase loadmore-btn mx-auto d-block font-weight-bold mb-5" href="{{ url('/all-vacancies') }}">More Jobs</a>
        </div>
    </div>
</section>
<!-- End post Area -->

@endsection
