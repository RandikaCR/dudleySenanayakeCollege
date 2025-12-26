@extends('layouts.frontend')

@php
    $breadcrumbTitle = $news->en_title;
    $breadcrumbDescription = '';
@endphp

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection


@section('content')

    <section class="blog_listing_section sec_padding_150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="blog_block_two mb_60">
                        <div class="inner_box">

                            <figure class="blog_image">
                                <div id="bootstrap-gallery-carousel" class="carousel slide">
                                    <div class="carousel-inner" id="image-carousel">
                                        @php
                                        $no = 0;
                                        @endphp
                                        @foreach($news->images as $img)
                                            <div class="carousel-item {{ $no == 0 ? 'active' : '' }}" data-src="{{ asset('assets/common/images/uploads/news/' . $img->image) }}">
                                                <img src="{{ asset('assets/common/images/uploads/news/' . $img->image) }}" class="d-block w-100" alt="{{ $news->en_title }}" />
                                            </div>
                                            @php
                                                $no++;
                                            @endphp
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#bootstrap-gallery-carousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#bootstrap-gallery-carousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </figure>
                            <div class="lower_content">
                                <div class="tag-list-area">
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><img src="{{ asset('assets/frontend/images/icons/facebook.png') }}" alt=""></a></li>
                                            <li><a href="#"><img src="{{ asset('assets/frontend/images/icons/instagram.png') }}" alt=""></a></li>
                                        </ul>
                                    </div>
                                    <ul class="post_info">
                                        {{--<li><a href="#"><i class="flaticon-user-2"></i> Author</a></li>--}}
                                        <li><a href="#"><i class="flaticon-calendar"></i> {{ dateFormat($news->created_at) }}</a></li>
                                    </ul>
                                </div>

                                <h4 class="my-4 fw-bold">{{ $news->en_title }}</h4>

                                {!! $news->en_content !!}
                            </div>
                            <div class="tag-list-area">
                                <div class="social-links">
                                    <h4>Social Network:</h4>
                                    <ul>
                                        <li><a href="#"><img src="{{ asset('assets/frontend/images/icons/facebook.png') }}" alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('assets/frontend/images/icons/instagram.png') }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="comment_box_area">
                        <div class="comments-area">
                            <h3 class="title mb_50">3 Comments</h3>
                            <div class="comment-box mb_40">
                                <div class="author-thumb"><img src="assets/images/blog/author-1.jpg" alt=""></div>
                                <div class="comment-inner">
                                    <div class="comment-info">
                                        <h5>William Cobus</h5>
                                        <span class="date">June 14, 2021 [11.20am]</span>
                                    </div>
                                    <div class="text">Quisque vitae volutpat leo. Cras scelerisque dignissim diam, nec auctor nisl pretium eu. Sed vulputate leo ac porta eleifend. Pellentesque semper convallis.</div>
                                    <a class="reply-comment-btn" href="#"><i class="flaticon-reply"></i></a>
                                </div>
                            </div>
                            <div class="comment-box mb_40 reply-comment">
                                <div class="author-thumb"><img src="assets/images/blog/author-2.jpg" alt=""></div>
                                <div class="comment-inner">
                                    <div class="comment-info">
                                        <h5>Cameron Williamson</h5>
                                        <span class="date">June 14, 2021 [11.20am]</span>
                                    </div>
                                    <div class="text">Quisque vitae volutpat leo. Cras scelerisque dignissim diam, nec auctor nisl pretium eu. Sed vulputate leo ac porta eleifend. Pellentesque semper convallis.</div>
                                    <a class="reply-comment-btn" href="#"><i class="flaticon-reply"></i></a>
                                </div>
                            </div>
                            <div class="comment-box mb_40">
                                <div class="author-thumb"><img src="assets/images/blog/author-3.jpg" alt=""></div>
                                <div class="comment-inner">
                                    <div class="comment-info">
                                        <h5>William Cobus</h5>
                                        <span class="date">June 14, 2021 [11.20am]</span>
                                    </div>
                                    <div class="text">Quisque vitae volutpat leo. Cras scelerisque dignissim diam, nec auctor nisl pretium eu. Sed vulputate leo ac porta eleifend. Pellentesque semper convallis.</div>
                                    <a class="reply-comment-btn" href="#"><i class="flaticon-reply"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_form_area">
                            <h3 class="title mb_50">Write your comment</h3>
                            <div class="blog_comment">
                                <form class="blog_comment_form" action="action_page.php">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 form-group">
                                            <input type="text" placeholder="First name *" name="fname" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 form-group">
                                            <input type="email" placeholder="Your Email *" name="email" required="">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 form-group">
                                            <textarea placeholder="Your Comment" name="comment"></textarea>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 form-group">
                                            <button type="submit" class="button-style-two">Submit <i class="flaticon-next"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>--}}
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="blog_sidebar_area">
                        <div class="sidebar_widget popular_event_widget mb_40">
                            <h4 class="event_sidebar_title">Lates News</h4>
                            @foreach($latest_news as $ln)
                                <div class="event_block_four mb_25">
                                    <div class="event_inner_box">
                                        <div class="date-inner">
                                            <div class="date_box">
                                                <a href="{{ url('news/' . $ln->slug ) }}">
                                                    <img src="{{ asset('assets/common/images/uploads/news/' . $ln->primary_image) }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="event-content">
                                            <h6><a href="{{ url('news/' . $ln->slug ) }}">{{ $ln->en_title }}</a></h6>
                                            <ul class="event_info">
                                                <li><i class="flaticon-clock-1"></i> {{ dateFormat($ln->created_at) }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="sidebar_widget categories-widget mb_40">
                            <h4 class="event_sidebar_title">Categories</h4>
                            <ul class="categories_checkbox">
                                @foreach($categories as $category)
                                    <li>
                                        <label for="styled-checkbox-1">{{ $category->news_category }} <span>({{ $category->count }})</span></label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
<script>
    $(document).ready(function (){

        lightGallery(document.getElementById('image-carousel'), {
            thumbnail: true,
        });


    });
</script>
@endsection
