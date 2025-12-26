@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'News';
    $breadcrumbDescription = '';
@endphp

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection


@section('content')

    <section class="blog_section_home_one blog_page sec_padding_140">
        <div class="container">
            <div class="row">
                @foreach($all_news as $news)
                    <div class="col-xl-4 col-xl-6 col-md-6 col-sm-12 block_block">
                        <div class="blog_block_one mb_30">
                            <div class="inner_box">
                                <figure class="blog_image">
                                    <a href="{{ url('news/' . $news->slug ) }}"><img src="{{ asset('assets/common/images/uploads/news/' . $news->primary_image) }}" alt=""></a>
                                    <div class="link_btn"><a href="{{ url('news/' . $news->slug ) }}">Read More</a></div>
                                </figure>
                                <div class="lower_content">
                                    <ul class="post_info">
                                        {{--<li><a href="#"><i class="flaticon-user-2"></i> Author</a></li>--}}
                                        <li><a href="#"><i class="flaticon-calendar"></i> {{ dateFormat($news->created_at) }}</a></li>
                                    </ul>
                                    <h4><a href="{{ url('news/' . $news->slug ) }}">{{ $news->en_title }}</a></h4>
                                    <p>{{ stringLimitLength($news->en_content, 300) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


            {!! $all_news->links('vendor.pagination.frontend') !!}
        </div>
    </section>

@endsection

@section('script')

@endsection
