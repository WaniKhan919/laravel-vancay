@extends('frontend.layouts.app')
@section('content')
	<!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Job Details
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="single.html"> Job Details</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post Area -->
    <section class="post-area section-gap">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8 post-list">
                    <div class="single-post d-flex flex-row">
                        {{-- <div class="thumb">
                            <img src="img/post.png" alt="">
                            <ul class="tags">
                                <li>
                                    <a href="#">Art</a>
                                </li>
                                <li>
                                    <a href="#">Media</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#"><h4>{{ $data->title ?? '' }}</h4></a>
                                    <h6>{{ $data->sub_title ?? '' }}</h6>
                                </div>
                                <ul class="btns">
                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                    <li><a href="#">Apply</a></li>
                                </ul>
                            </div>
                            <h5>Job Experience:
                                @if(!empty($data->category_id))
                                        @if($data->category_id == 1)
                                            Junior Laravel Developer
                                        @elseif($data->category_id == 2)
                                            Intermidiate Laravel Developer
                                        @elseif($data->category_id == 3)
                                            Experienced Laravel Developer
                                        @endif
                                @endif
                            </h5>
                            {{-- <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> --}}
                        </div>
                    </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Whom we are looking for</h4>
                        <p>
                            {{ $data->description ?? '' }}
                        </p>
                    </div>

                </div>
            </div>

           {{-- comments section start --}}
<div class="row d-flex justify-content-center">
    <div class="col-md-8 col-lg-8">
        <div class="card shadow-0 border" style="background-color: #f0f2f5;">
            <div class="card-body p-4">
                <form action="{{ route('add.comment') }}" method="post">
                    @csrf
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="addANote" class="form-control" placeholder="Type comment..." name="comment" />
                        <input type="hidden" name="job_id" value="{{ $data->id }}" />
                        <label class="form-label" for="addANote">+ Add a note</label>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </div>
                </form>

                @foreach ($data->comments as $comment)
                <div class="card mb-4">
                    <div class="card-body">
                        <p>{{ $comment->comment }}</p>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="avatar" width="25" height="25" />
                                <p class="small mb-0 ms-2 mx-2">{{ $comment->user->name }}</p>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
{{-- comments section end --}}


        </div>
    </section>
    <!-- End post Area -->


@endsection
