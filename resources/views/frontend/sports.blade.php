@extends('layouts.frontend')

@section('meta_info')
    @php
        $metaTitle = '';
        $metaDescription = '';
        $metaKeywords = '';
        $metaImage = '';
        $metaUrl = '';
    @endphp
@endsection

@php
    $breadcrumbTitle = 'Sports';
    $breadcrumbDescription = '';
@endphp

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection

@section('content')

    <section class="programs_section_home_one sec_padding_140 style_two">
        <div class="container-fulid">
            <div class="row clearfix justify-content-center">
                @foreach($sports as $sport)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 programs_block">
                        <div class="programs_block_one centred mb_40">
                            <div class="inner_box">
                                <figure class="image_box">
                                    <a href="{{ url('sports/' . $sport->slug) }}"><img src="{{ asset('assets/common/images/' . $sport->image) }}" alt=""></a>
                                </figure>
                                <div class="lower_content">
                                    <div class="inner">
                                        <h4><a href="{{ url('sports/' . $sport->slug) }}">{{ $sport->sport_category }}</a></h4>
                                        <div class="link-btn"><a href="{{ url('sports/' . $sport->slug) }}">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
