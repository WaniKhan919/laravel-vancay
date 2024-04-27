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
                <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span>
                    <a href="single.html"> Job Details</a>
                </p>
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
                    <div class="details">

                        <div class="post-list">
                            <div class="single-post d-flex flex-row">
                                <div class="details">
                                    <div class="title d-flex flex-row justify-content-between">
                                        <div class="titles">
                                            <h4>{{ $data->title ?? '' }}</h4>
                                            <h6>
                                                @if($data->category_id == 1)
                                                Junior Laravel Developer
                                                @elseif($data->category_id == 2)
                                                Intermidiate Laravel Developer
                                                @elseif($data->category_id == 3)
                                                Experienced Laravel Developer
                                                @endif
                                            </h6>
                                        </div>
                                    </div>
                                    <p class="text-secondary">
                                        {{ $data->sub_title ?? '' }}
                                    </p>
                                    <p class="text-secondary">
                                        {{ $data->description ?? '' }}
                                    </p>
                                </div>
                            </div </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        {{-- comments section start --}}
        @if(auth()->user() && auth()->user()->role == 0)
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-8">
                <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                    <div class="card-body p-4">
                        <h4 class="mb-3">Comments</h4>
                        <form action="{{ route('add.comment') }}" method="post">
                            @csrf
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="addANote" class="form-control" placeholder="Type comment..."
                                    name="comment" />
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
                                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="avatar"
                                            width="25" height="25" />
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
        @endif
        {{-- comments section end --}}
</section>
<!-- End post Area -->


@endsection