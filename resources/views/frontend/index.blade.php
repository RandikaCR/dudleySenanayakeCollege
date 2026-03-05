@extends('layouts.frontend')

@section('page_title')
    Welcome
@endsection

@section('content')

    <!-- Banner Home Three -->
    <section class="banner_home_three">
        <div class="banner-three-carousel owl-carousel owl-theme owl-nav-none">
            <div class="slide" style="background-image:url({{ asset('assets/common/images/uploads/banner_5.png') }})">
                <div class="container">
                    <div class="content-box text-center">
                        <h3 class="text-capitalize" style="background: none; padding-bottom: 10px;">Proudly celebrating our</h3>
                        <h1 class="text-capitalize">48<sup>th</sup> Anniversary</h1>
                        {{--<h3>Sub title goes here</h3>
                        <h1>Title goes here</h1>
                        <h4 class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</h4>
                        <div class="link-button"><a href="{{ url('/') }}" class="button-style-four">Read more <i class="fa-solid fa-arrow-right"></i></a></div>--}}
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{ asset('assets/common/images/uploads/banner_1.jpg') }})">
                <div class="container">
                    <div class="content-box text-center">
                        <h3 class="text-capitalize" style="background: none; padding-bottom: 10px;">Proudly celebrating our</h3>
                        <h1 class="text-capitalize">48<sup>th</sup> Anniversary</h1>
                        {{--<h3>Sub title goes here</h3>
                        <h1>Title goes here</h1>
                        <h4 class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</h4>
                        <div class="link-button"><a href="{{ url('/') }}" class="button-style-four">Read more <i class="fa-solid fa-arrow-right"></i></a></div>--}}
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{ asset('assets/common/images/uploads/banner_3.jpg') }})">
                <div class="container">
                    <div class="content-box text-center">
                        <h3 class="text-capitalize" style="background: none; padding-bottom: 10px;">Proudly celebrating our</h3>
                        <h1 class="text-capitalize">48<sup>th</sup> Anniversary</h1>
                        {{--<h3>Sub title goes here</h3>
                        <h1>Title goes here</h1>
                        <h4 class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</h4>
                        <div class="link-button"><a href="{{ url('/') }}" class="button-style-four">Read more <i class="fa-solid fa-arrow-right"></i></a></div>--}}
                    </div>
                </div>
            </div>
            <!-- <div class="slide" style="background-image:url({{ asset('assets/common/images/uploads/banner_2.jpg') }})">
                <div class="container">
                    <div class="content-box">
                        {{--<h3>Sub title goes here</h3>
                        <h1>Title goes here</h1>
                        <h4 class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</h4>
                        <div class="link-button"><a href="{{ url('/') }}" class="button-style-four">Read more <i class="fa-solid fa-arrow-right"></i></a></div>--}}
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- End Banner Home Three -->

    <!-- Feature Section Home Three -->
    <section class="feature_section_home_three" style="background-image: url({{ asset('assets/common/images/uploads/logo_shape.png') }});">
        <div class="container">
            <div class="section_title_one centred mb_60">
                <h5>Welcome to School</h5>
                <h2 style="font-style: italic;">"විදු මගින් සරු බවට - Prosperity through Education"</h2>
            </div>
        </div>
    </section>
    <!-- End Feature Section Home Three -->

    <!-- About Section Home Three -->
    <section class="about_section_home_three" style="margin-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class=" clearfix">
                        <figure class="about_image_four">
                            <img class="img-fluid w-100 mb-4" src="{{ asset('assets/common/images/uploads/principal.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="about_right_content">
                        <h5>Principal's Message</h5>
                        <h2>Venerable Rev. Ulapane Sumangala Thero</h2>
                        <p class="mb-2">Dudley Senanayake College, Colombo 05, stands as a distinguished institution dedicated to providing quality education while nurturing discipline, wisdom, and moral integrity among its students. Since its establishment, the college has remained committed to shaping young minds into responsible citizens who contribute positively to society.</p>
                        <p class="mb-2">At Dudley Senanayake College, we firmly believe that education extends beyond academic achievement. True education nurtures character, leadership, creativity, and compassion. We strive to create a supportive and inspiring learning environment where students are encouraged to think critically, explore their talents, and develop confidence in their abilities.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="about_right_content">
                        <p class="mb-2">Our college is a Grade 1C provincial school that provides education from Grade 1 to Grade 13, offering Arts and Commerce streams for Advanced Level studies. We are also proud to maintain a strong English Medium section from Grade 6 to Grade 11, enabling students to enhance their language proficiency and prepare themselves for broader academic and professional opportunities.</p>
                        <p class="mb-2">To support modern education, the school is equipped with six Smart Boards, a fully functional computer laboratory with 60 computers, and 48 tablets, all of which are actively used by students for digital learning. These facilities help our students develop essential technological skills required in today’s rapidly evolving world.</p>
                        <p class="mb-2">In addition to academic excellence, we place great emphasis on aesthetic education. Students have the opportunity to study Dancing, Art, Drama, and Music as aesthetic subjects, allowing them to develop creativity, cultural appreciation, and artistic expression.</p>
                        <p class="mb-2">Sports play a vital role in the holistic development of our students. Dudley Senanayake College proudly maintains a strong sporting tradition with successful teams in several disciplines. Our rugby team, one of the most prominent in the school, is currently competing in the Dialogue Premier League Knockout Tournament. Furthermore, our boys’ and girls’ karate teams have achieved recognition at the national level. The college also has strong cricket and football teams, reflecting the enthusiasm and dedication of our students in sports.</p>
                        <p class="mb-2">In this digital era, the launch of our official website marks another significant milestone in our journey. It serves as a valuable platform to connect students, parents, alumni, and well-wishers while sharing our achievements, events, and future aspirations.</p>
                        <p class="mb-2">As a provincial school, we take great pride in the progress we have achieved and remain committed to continuously improving the quality of education we provide. I look forward with confidence to the continued growth of our college and the bright futures of the young individuals entrusted to our care.</p>
                        <p>May all our students be guided by wisdom and noble values in their journey through life.</p>

                        <div class="link-btn"><a href="{{ url('contact') }}" class="button-style-four">Contact <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section Home Three -->

    <!-- Video Section Home Three -->
    {{--<section class="video_section_home_three">
        <div class="container">
            <div class="video_inner">
                <figure class="image_box">
                    <img src="{{ asset('assets/frontend/images/background/bg-image-05.jpg') }}" alt="">
                </figure>
                <div class="video_link"><a href="https://www.youtube.com/watch?v=xPq1KrYWbqo" class="lightbox-image"><img src="{{ asset('assets/frontend/images/shape/youtube.png') }}" alt=""></a></div>
            </div>
        </div>
    </section>--}}
    <!-- End Services Section Home Two -->

    <!-- Funfact Section Home Three -->
    <!-- <section class="funfact_section_home_three">
        <div class="container">
            <div class="funfact_inner_home_three">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 border_rl">
                        <div class="funfact_left_text">
                            <h5>Everything starts with Liggeet</h5>
                            <h2>We believe in the power of cooperation.</h2>
                            <p>Etiam in arcu dictum, maximus libero ac, porttitor ante. Mauris in ultricies odio, id porttitor nulla. Phasellus tristique vehicula eros id hendrerit. Interdum et malesuada fames ac ante ipsumisth primis in faucibus. Maecenas ultricies finibus est.</p>
                            <span>Have questions?​  <a href="resgister.html">Get Free Guidebook</a></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="funfact_area border_r">
                            <div class="row clearfix">
                                <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 funfact_block">
                                    <div class="funfact_block_two">
                                        <div class="inner_box centred">
                                            <div class="count_outer count_box">
                                                <span class="count_text" data-speed="1500" data-stop="1021">0</span>
                                            </div>
                                            <h4>Finished Sessions</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 funfact_block">
                                    <div class="funfact_block_two">
                                        <div class="inner_box centred">
                                            <div class="count_outer count_box">
                                                <span class="count_text" data-speed="1500" data-stop="100">0</span><span>%</span>
                                            </div>
                                            <h4>Satisfaction rate</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 funfact_block">
                                    <div class="funfact_block_two">
                                        <div class="inner_box centred">
                                            <div class="count_outer count_box">
                                                <span class="count_text" data-speed="1500" data-stop="2562">0</span>
                                            </div>
                                            <h4>Enrolled Learners</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 funfact_block">
                                    <div class="funfact_block_two">
                                        <div class="inner_box centred">
                                            <div class="count_outer count_box">
                                                <span class="count_text" data-speed="1500" data-stop="150">0</span>
                                            </div>
                                            <h4>Online Instructors</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> -->
    <!-- End Funfact Section Home Three -->

    <!-- Our Studies Section Home Three -->
    <section class="studies_section_home_three sec_padding_110" style="padding-top: 40px;">
        <div class="container">
            <div class="section_title_one centred mb_60">
                <h5>Academic & Non Academic</h5>
                <h2>Academic & Non Academic Excellence and Facilities</h2>
                <p class="mt-4">Today, Dudley Senanayake College provides both English and Sinhala medium education from Grade 6 to Grade 10, along with a well-established Advanced Level section. Over the years, we have produced students who have excelled in fields such as medicine, engineering, chemistry, education, and many other professional sectors.</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-xl-6 col-md-6 col-sm-12 block_block">
                    <div class="blog_block_one mb_30">
                        <div class="inner_box">
                            <figure class="blog_image">
                                <img src="{{ asset('assets/common/images/uploads/home-2.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xl-6 col-md-6 col-sm-12 block_block">
                    <div class="blog_block_one mb_30">
                        <div class="inner_box">
                            <figure class="blog_image">
                                <img src="{{ asset('assets/common/images/uploads/home-4.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xl-6 col-md-6 col-sm-12 block_block">
                    <div class="blog_block_one mb_30">
                        <div class="inner_box">
                            <figure class="blog_image">
                                <img src="{{ asset('assets/common/images/uploads/home-3.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xl-6 col-md-6 col-sm-12 block_block">
                    <div class="blog_block_one mb_30">
                        <div class="inner_box">
                            <figure class="blog_image">
                                <img src="{{ asset('assets/common/images/uploads/home-1.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Studies Section Home Three -->

    <!-- Apply Admission Section Home Three -->
    <!-- <section class="apply_admission_home_three">
        <div class="container">
            <div class="apply_admission_inner">
                <div class="icon_box">
                    <img src="{{ asset('assets/frontend/images/shape/notification.svg') }}" alt="">
                </div>
                <div class="text_fild">
                    <h5>Easy to apply</h5>
                    <h4>Apply For Admissions</h4>
                </div>
                <div class="button_fild">
                    <a href="admission-one.html" class="button-style-three">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Apply Admission Section Home Three -->

    <!-- Programs Section Home Three -->
    <!-- <section class="programs_section_home_three">
        <div class="container-fulid">
            <div class="row clearfix m-0">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 programs_block p-0">
                    <div class="programs_block_one centred mb_40">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><img src="{{ asset('assets/frontend/images/program/program-image-05.jpg') }}" alt=""></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h4><a href="programs.html">Continuing Education</a></h4>
                                    <div class="link-btn"><a href="programs.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 programs_block p-0">
                    <div class="programs_block_one centred mb_40">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><img src="{{ asset('assets/frontend/images/program/program-image-06.jpg') }}" alt=""></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h4><a href="programs.html">Continuing Education</a></h4>
                                    <div class="link-btn"><a href="programs.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 programs_block p-0">
                    <div class="programs_block_one centred mb_40">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><img src="{{ asset('assets/frontend/images/program/program-image-07.jpg') }}" alt=""></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h4><a href="programs.html">Continuing Education</a></h4>
                                    <div class="link-btn"><a href="programs.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 programs_block p-0">
                    <div class="programs_block_one centred mb_40">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><img src="{{ asset('assets/frontend/images/program/program-image-08.jpg') }}" alt=""></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h4><a href="programs.html">Continuing Education</a></h4>
                                    <div class="link-btn"><a href="programs.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Programs Section Home Three -->

    <!-- Process Section Home Three -->
    <!-- <section class="process_section_home_three">
        <div class="container">
            <div class="section_title_one centred mb_60">
                <h5>process</h5>
                <h2>Let's Get Started</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 process_block">
                    <div class="process_block_item centred">
                        <div class="icon_box">
                            <div class="tag">01</div>
                            <div class="icon"><i class="flaticon-open-book"></i></div>
                            <div class="bg_icon"><i class="flaticon-open-book"></i></div>
                        </div>
                        <h4><a href="programs.html">Find The Right Program</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 process_block">
                    <div class="process_block_item centred">
                        <div class="icon_box">
                            <div class="tag">02</div>
                            <div class="icon"><i class="flaticon-interview"></i></div>
                            <div class="bg_icon"><i class="flaticon-interview"></i></div>
                        </div>
                        <h4><a href="request-info.html">Request Information</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 process_block">
                    <div class="process_block_item centred">
                        <div class="icon_box">
                            <div class="tag">03</div>
                            <div class="icon"><i class="flaticon-file"></i></div>
                            <div class="bg_icon"><i class="flaticon-file"></i></div>
                        </div>
                        <h4><a href="career.html">Your Application</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Process Section Home Three -->

    <!-- Blog Section Home One -->
    <!-- <section class="blog_section_home_one style_two sec_padding_120">
        <div class="container">
            <div class="outer_box">
                <div class="section_title_two mb_60">
                    <h5>News & Blogs</h5>
                    <h2>Latest News</h2>
                </div>
                <div class="blog_link_button">
                    <a href="{{ url('/news') }}">View all news <i class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="row">
                @foreach($latest_news as $ln)
                    <div class="col-xl-4 col-md-6 col-sm-12 block_block">
                        <div class="blog_block_one mb_30">
                            <div class="inner_box">
                                <figure class="blog_image">
                                    <a href="{{ url('news/' . $ln->slug ) }}"><img src="{{ asset('assets/common/images/uploads/news/' . $ln->primary_image) }}" alt=""></a>
                                    <div class="link_btn"><a href="{{ url('news/' . $ln->slug ) }}">Read More</a></div>
                                </figure>
                                <div class="lower_content">
                                    <ul class="post_info">
                                        {{--<li><a href="#"><i class="flaticon-user-2"></i> Author</a></li>--}}
                                        <li><a href="#"><i class="flaticon-calendar"></i> {{ dateFormat($ln->created_at) }}</a></li>
                                    </ul>
                                    <h4><a href="{{ url('news/' . $ln->slug ) }}">{{ $ln->en_title }}</a></h4>
                                    <p>{{ stringLimitLength($ln->en_content, 180) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> -->
    <!-- End Blog Section Home One -->

@endsection
