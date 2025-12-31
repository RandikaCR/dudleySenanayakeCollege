@extends('layouts.frontend')

@php
    $breadcrumbTitle = '404 Not Found';
    $breadcrumbDescription = '';
@endphp

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection


@section('content')

    <section class="blog_listing_section sec_padding_150">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="mb_60 d-flex flex-wrap justify-content-center">
                        <div class="text-center">
                            <h2 style="font-size: 8rem; line-height: 12rem;">404</h2>
                            <h3 style="font-size: 4rem; line-height: 5rem;">Content Not Found</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

