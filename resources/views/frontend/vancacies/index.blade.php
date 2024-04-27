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
                <div class="single-feature">
                    <a href="{{ route('user.vacancies.create') }}">Add Vacancy</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-6 post-list">
                <div class="single-post d-flex flex-row">
                    <div class="details">
                        <div class="title d-flex flex-row justify-content-between">
                            <div class="titles">
                                <h4>Creative Art Designer</h4>
                                <h6>Premium Labels Limited</h6>
                            </div>
                            
                            <ul class="btns">
                                <li><a href="#"><span class="lnr lnr-trash"></span></a></li>
                                <li><a href="#">Edit</a></li>
                            </ul>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                        </p>
                        <h5>Job Nature: Full time</h5>
                        <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                        <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End post Area -->

@endsection
