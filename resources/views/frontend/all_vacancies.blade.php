@extends('frontend.layouts.app')
@section('content')
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    All Jobs
                </h1>
            </div>
        </div>
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
        </div>
    </div>
</section>
<!-- End post Area -->

@endsection
