@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'School Prefects';
    $breadcrumbDescription = '';
@endphp

@section('page_title')
    {{ $breadcrumbTitle }}
@endsection

@section('meta_info')
    @php
        $metaTitle = 'Prefects - Dudley Senanayake College. Colombo 05';
        $metaDescription = '';
        $metaKeywords = '';
        $metaImage = '';
        $metaUrl = '';
    @endphp
@endsection

@section('css')

    <style type="text/css">

        .career_feature_block .image_box{
            margin-bottom: 15px;
        }

        .career_feature_block .image_box img {
            border-radius: 5px;
        }

        .career_feature_block h4 a{
            margin-bottom: 0;
        }

    </style>
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
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/p-1.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">MALKA RASAANJANA</a></h4>
                        <p class="text-primary fw-bold">Head Prefect</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/p-2.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">MALSHI AMAYA</a></h4>
                        <p class="text-primary fw-bold">Head Prefect</p>
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
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/p-3.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">MINARU NIMTHARU</a></h4>
                        <p class="text-primary fw-bold">Games Captain</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/p-4.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">RANUGI DAHAMSA</a></h4>
                        <p class="text-primary fw-bold">Games Captain</p>
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
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/p-5.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">NIJAL AKASH</a></h4>
                        <p class="text-primary fw-bold">Deputy Head Prefect</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/p-6.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">S. ASHIKAA</a></h4>
                        <p class="text-primary fw-bold">Deputy Head Prefect</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
