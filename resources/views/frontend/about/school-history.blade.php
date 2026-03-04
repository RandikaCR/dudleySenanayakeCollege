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
                    <div class="blog_block_one mb_30">
                        <div class="inner_box">
                            <figure class="blog_image">
                                <img class="w-100" src="{{ asset('assets/common/images/uploads/h-1.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="about_right_content">
                        <h5>About School</h5>
                        <h2>Since 1978</h2>
                        <p>The school was established on 4<sup>th</sup> April 1978 under the concept of <span class="fw-bold">former President Ranasinghe Premadasa</span> with the aim of providing quality education to the children of government employees working in and around Narahenpita. At its inception, the school functioned as a boys’ school, mainly serving families who were unable to secure admission to leading national schools.</p>
                        <p>The school began in a single building with only four classrooms. Shortly afterwards, four garage rooms belonging to Anderson Flats were generously provided to accommodate Grade 1 classes. The land, which measures 1 acre, 1 rood, and 2 perches, was once a wetland and has since been transformed into a vibrant centre of learning. The first principal, Mrs. Hemawellage, laid a strong foundation of discipline, commitment, and academic excellence.</p>
                        <p>A significant milestone in our journey was the commencement of our first Advanced Level batch in the year 2000. Since then, the school has steadily expanded its academic offerings and facilities.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="feature_section_home_three about_page">
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
    </section> -->

    <!-- <section class="funfact_section_home_one centred">
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
    </section> -->
@endsection
