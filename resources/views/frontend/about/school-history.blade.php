@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'School History';
    $breadcrumbDescription = '';
@endphp

@section('meta_info')
    @php
        $metaTitle = 'School History - Dudley Senanayake College. Colombo 05';
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

    <section class="about_section_home_four sec_padding_140">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="about_left_image clearfix">
                        <figure class="about_image_four">
                            <img src="{{ asset('assets/frontend/images/resource/about-image-03.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="about_right_content">
                        <h5>About School</h5>
                        <h2>We are one of the largest, most universities in the world.</h2>
                        <p>Etiam in arcu dictum, maximus libero ac, porttitor ante. Mauris in ultricies odio, id porttitor nulla. Phasellus tristique vehicula eros id hendrerit. Interdum et malesuada fames ac ante ipsumisth primis in faucibus. Maecenas ultricies finibus est, non aliquet ligula suscipit id. Nulla a mi velit. Proin sollicitudin consectetur gravida. <br>
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed velv ipsum ultrices, congue eros quis, pulvinar sem. <a href="#">Quisque nec libero faucibus estte the most conguelosting</a> sodales ac sed nisl. Donec tincidunt id purus sit amet vulputate.</p>
                        <ul class="feauter_list_four">
                            <li class="feature_item">
                                <div class="icon_box"><i class="flaticon-checked"></i></div>
                                <div class="title">Overseas education and study visa consultants.</div>
                            </li>
                            <li class="feature_item">
                                <div class="icon_box"><i class="flaticon-open-book"></i></div>
                                <div class="title">Top-ranked universities to the guarantee admissions.</div>
                            </li>
                        </ul>
                        <div class="link-btn"><a href="{{ url('contact') }}" class="button-style-four">Contact <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature_section_home_three about_page">
        <div class="container">
            <div class="section_title_one centred mb_60">
                <h5>How our services</h5>
                <h2>Why Choose Liggeet</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-book-1"></i></div>
                            <div class="icon_box_two"><i class="flaticon-book-1"></i></div>
                            <div class="feature_content">
                                <h4><a href="javascript:void(0);">Innovative Courses</a></h4>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam. To the power.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-graduated"></i></div>
                            <div class="icon_box_two"><i class="flaticon-graduated"></i></div>
                            <div class="feature_content">
                                <h4><a href="javascript:void(0);">Affordability</a></h4>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam. To the power.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-education"></i></div>
                            <div class="icon_box_two"><i class="flaticon-education"></i></div>
                            <div class="feature_content">
                                <h4><a href="javascript:void(0);">Academics</a></h4>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam. To the power.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-light-bulb"></i></div>
                            <div class="icon_box_two"><i class="flaticon-light-bulb"></i></div>
                            <div class="feature_content">
                                <h4><a href="javascript:void(0);">Inspiring Student Life</a></h4>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam. To the power.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="funfact_section_home_one centred">
        <div class="container">
            <div class="inner_container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact_block">
                        <div class="funfact_block_one">
                            <div class="inner_box">
                                <div class="count_outer count_box">
                                    <span class="count_text" data-speed="1500" data-stop="1021">0</span>
                                </div>
                                <p>Finished Sessions</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact_block">
                        <div class="funfact_block_one">
                            <div class="inner_box">
                                <div class="count_outer count_box">
                                    <span class="count_text" data-speed="1500" data-stop="100">0</span><span>%</span>
                                </div>
                                <p>Satisfaction rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact_block">
                        <div class="funfact_block_one">
                            <div class="inner_box">
                                <div class="count_outer count_box">
                                    <span class="count_text" data-speed="1500" data-stop="2562">0</span><span>+</span>
                                </div>
                                <p>Enrolled Learners</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact_block">
                        <div class="funfact_block_one">
                            <div class="inner_box">
                                <div class="count_outer count_box">
                                    <span class="count_text" data-speed="1500" data-stop="100">0</span>
                                </div>
                                <p>Online Instructors</p>
                            </div>
                        </div>
                        <div class="centerd"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
