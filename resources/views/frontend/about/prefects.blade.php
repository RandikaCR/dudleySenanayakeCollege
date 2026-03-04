@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'School Prefects';
    $breadcrumbDescription = '';
@endphp

@section('meta_info')
    @php
        $metaTitle = 'Prefects - Dudley Senanayake College. Colombo 05';
        $metaDescription = '';
        $metaKeywords = '';
        $metaImage = '';
        $metaUrl = '';
    @endphp
@endsection

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection

@section('content')

    <section class="career_feature_section sec_padding_140">
        <div class="container">
            <div class="row justify-content-center mb_70">
                <div class="col-sm-12 mb-5 text-center">
                    <h2 class="mb-4 fw-bold">Prefect Guild - 2026</h2>
                    <h3 class="fw-bold text-primary">Head Prefects</h3>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="#"><img src="{{ asset('assets/common/images/user-square.jpg') }}" alt=""></a>
                        </figure>
                        <h4><a href="#">MALKA RASAANJANA</a></h4>
                        <p>Head Prefect</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="#"><img src="{{ asset('assets/common/images/user-square.jpg') }}" alt=""></a>
                        </figure>
                        <h4><a href="#">MALSHI AMAYA</a></h4>
                        <p>Head Prefect</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb_70">
                <div class="col-sm-12 mb-5 text-center">
                    <h3 class="fw-bold text-primary">Games Captains</h3>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="#"><img src="{{ asset('assets/common/images/user-square.jpg') }}" alt=""></a>
                        </figure>
                        <h4><a href="#">MINARU NIMTHARU</a></h4>
                        <p>Games Captain</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="#"><img src="{{ asset('assets/common/images/user-square.jpg') }}" alt=""></a>
                        </figure>
                        <h4><a href="#">RANUGI DAHAMSA</a></h4>
                        <p>Games Captain</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb_70">
                <div class="col-sm-12 mb-5 text-center">
                    <h3 class="fw-bold text-primary">Deputy Head Prefects</h3>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="#"><img src="{{ asset('assets/common/images/user-square.jpg') }}" alt=""></a>
                        </figure>
                        <h4><a href="#">NIJAL AKASH</a></h4>
                        <p>Deputy Head Prefect</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="#"><img src="{{ asset('assets/common/images/user-square.jpg') }}" alt=""></a>
                        </figure>
                        <h4><a href="#">ASHIKAA</a></h4>
                        <p>Deputy Head Prefect</p>
                    </div>
                </div>
     
            </div>
        </div>
    </section>
@endsection
