@extends('layouts.frontend')

@php
    $breadcrumbTitle = $sport_category->sport_category;
    $breadcrumbDescription = '';
@endphp

@section('meta_info')
    @php
        $metaTitle = $sport_category->sport_category . ' - Dudley Senanayake College. Colombo 05';
        $metaDescription = '';
        $metaKeywords = '';
        $metaImage = '';
        $metaUrl = url('sports/' . $sport_category->slug);
    @endphp
@endsection

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection


@section('content')

    <section class="blog_section_home_one blog_page sec_padding_140">
        <div class="container">
            <div class="row">
                @foreach($sports as $sport)
                    <div class="col-xl-4 col-xl-6 col-md-6 col-sm-12 block_block">
                        <div class="blog_block_one mb_30">
                            <div class="inner_box">
                                <figure class="blog_image">
                                    <a href="{{ url('sport/' . $sport->slug ) }}"><img src="{{ asset('assets/common/images/uploads/sports/' . $sport->primary_image) }}" alt=""></a>
                                    <div class="link_btn"><a href="{{ url('sport/' . $sport->slug ) }}">Read More</a></div>
                                </figure>
                                <div class="lower_content">
                                    <ul class="post_info">
                                        {{--<li><a href="#"><i class="flaticon-user-2"></i> Author</a></li>--}}
                                        <li><a href="#"><i class="flaticon-calendar"></i> {{ dateFormat($sport->created_at) }}</a></li>
                                    </ul>
                                    <h4><a href="{{ url('sport/' . $sport->slug ) }}">{{ $sport->en_title }}</a></h4>
                                    <p>{{ stringLimitLength($sport->en_content, 300) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


            {!! $sports->links('vendor.pagination.frontend') !!}
        </div>
    </section>

@endsection

@section('script')

@endsection
