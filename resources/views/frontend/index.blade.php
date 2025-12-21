@extends('layouts.frontend')


@section('content')

    <!-- Banner Home Three -->
    <section class="banner_home_three">
        <div class="banner-three-carousel owl-carousel owl-theme owl-nav-none">
            <div class="slide" style="background-image:url({{ asset('assets/frontend/images/banner/banner-image-06.png') }})">
                <div class="shape_one" style="background-image: url({{ asset('assets/frontend/images/banner/shape-one.svg') }});"></div>
                <div class="shape_two" style="background-image: url({{ asset('assets/frontend/images/banner/shape-two.svg') }});"></div>
                <div class="shape_four" style="background-image: url({{ asset('assets/frontend/images/banner/shape-four.svg') }});"></div>
                <div class="container">
                    <div class="content-box">
                        <h3>Rising to the Climate</h3>
                        <h1>Challenge.</h1>
                        <h4 class="text">We are one of the largest, most diverse universities in <br>the USA with over 90,000 students in USA</h4>
                        <div class="link-button"><a href="resgister.html" class="button-style-four">Free Join Us <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{ asset('assets/frontend/images/banner/banner-image-06.png') }})">
                <div class="shape_one" style="background-image: url({{ asset('assets/frontend/images/banner/shape-one.svg') }});"></div>
                <div class="shape_two" style="background-image: url({{ asset('assets/frontend/images/banner/shape-two.svg') }});"></div>
                <div class="shape_four" style="background-image: url({{ asset('assets/frontend/images/banner/shape-four.svg') }});"></div>
                <div class="container">
                    <div class="content-box">
                        <h3>Rising to the Climate</h3>
                        <h1>Challenge.</h1>
                        <h4 class="text">We are one of the largest, most diverse universities in <br>the USA with over 90,000 students in USA</h4>
                        <div class="link-button"><a href="resgister.html" class="button-style-four">Free Join Us <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{ asset('assets/frontend/images/banner/banner-image-06.png') }})">
                <div class="shape_one" style="background-image: url({{ asset('assets/frontend/images/banner/shape-one.svg') }});"></div>
                <div class="shape_two" style="background-image: url({{ asset('assets/frontend/images/banner/shape-two.svg') }});"></div>
                <div class="shape_four" style="background-image: url({{ asset('assets/frontend/images/banner/shape-four.svg') }});"></div>
                <div class="container">
                    <div class="content-box">
                        <h3>Rising to the Climate</h3>
                        <h1>Challenge.</h1>
                        <h4 class="text">We are one of the largest, most diverse universities in <br>the USA with over 90,000 students in USA</h4>
                        <div class="link-button"><a href="resgister.html" class="button-style-four">Free Join Us <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Home Three -->

    <!-- Feature Section Home Three -->
    <section class="feature_section_home_three" style="background-image: url({{ asset('assets/frontend/images/shape/map_shape.png') }});">
        <div class="shape-one"><img src="{{ asset('assets/frontend/images/shape/shape-09.svg') }}" alt=""></div>
        <div class="shape-two"><img src="{{ asset('assets/frontend/images/shape/shape-10.svg') }}" alt=""></div>
        <div class="container">
            <div class="section_title_one centred mb_60">
                <h5>How our services</h5>
                <h2>Why Choose Liggeet {{ __('main.next') }}</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-book-1"></i></div>
                            <div class="feature_content">
                                <h4><a href="programs.html">Innovative Courses</a></h4>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam. To the power.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-graduated"></i></div>
                            <div class="feature_content">
                                <h4><a href="programs.html">Affordability</a></h4>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam. To the power.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-education"></i></div>
                            <div class="feature_content">
                                <h4><a href="programs.html">Academics</a></h4>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam. To the power.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-light-bulb"></i></div>
                            <div class="feature_content">
                                <h4><a href="programs.html">Inspiring Student Life</a></h4>
                                <p>Sed gravida nisl a porta tincidunt. Integer aliquam. To the power.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Section Home Three -->

    <!-- About Section Home Three -->
    <section class="about_section_home_three">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about_left_content">
                        <h5>About The Liggeet</h5>
                        <h2>We are one of the largest, most universities in the world.</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about_right_content">
                        <p>Etiam in arcu dictum, maximus libero ac, porttitor ante. Mauris in ultricies odio, id porttitor nulla. Phasellus tristique vehicula eros id hendrerit. Interdum et malesuada fames ac ante ipsumisth primis in faucibus. Maecenas ultricies finibus est, non aliquet ligula suscipit id. Nulla a mi velit. Proin sollicitudin consectetur gravida.</p>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed velv ipsum ultrices, congue eros quis,</p>
                        <div class="link-btn"><a href="resgister.html" class="button-style-four">Free Join Us <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section Home Three -->

    <!-- Video Section Home Three -->
    <section class="video_section_home_three">
        <div class="container">
            <div class="video_inner">
                <div class="shape"><img src="{{ asset('assets/frontend/images/shape/shape-11.svg') }}" alt=""></div>
                <figure class="image_box">
                    <img src="{{ asset('assets/frontend/images/background/bg-image-05.jpg') }}" alt="">
                </figure>
                <div class="video_link"><a href="https://www.youtube.com/watch?v=xPq1KrYWbqo" class="lightbox-image"><img src="{{ asset('assets/frontend/images/shape/youtube.png') }}" alt=""></a></div>
            </div>
        </div>
    </section>
    <!-- End Services Section Home Two -->

    <!-- Funfact Section Home Three -->
    <section class="funfact_section_home_three">
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
    </section>
    <!-- End Funfact Section Home Three -->

    <!-- Our Studies Section Home Three -->
    <section class="studies_section_home_three sec_padding_110">
        <div class="container">
            <div class="section_title_one centred mb_60">
                <h5>Student stadies</h5>
                <h2>Our Studies</h2>
            </div>
            <div class="four_item_carousel owl-carousel owl-theme owl-dots-none">
                <div class="studies_block">
                    <div class="studies_block_one mb_50">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><i class="flaticon-architect"></i></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h3><a href="programs.html">Architecture</a></h3>
                                    <p>Sed gravida nisl a porta tincidunt. Integer aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="studies_block">
                    <div class="studies_block_one mb_50">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><i class="flaticon-design-thinking"></i></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h3><a href="programs.html">Design</a></h3>
                                    <p>Sed gravida nisl a porta tincidunt. Integer aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="studies_block">
                    <div class="studies_block_one mb_50">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><i class="flaticon-engineering"></i></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h3><a href="programs.html">Engineering</a></h3>
                                    <p>Sed gravida nisl a porta tincidunt. Integer aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="studies_block">
                    <div class="studies_block_one mb_50">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><i class="flaticon-education"></i></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h3><a href="programs.html">Education</a></h3>
                                    <p>Sed gravida nisl a porta tincidunt. Integer aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="studies_block">
                    <div class="studies_block_one mb_50">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><i class="flaticon-architect"></i></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h3><a href="programs.html">Architecture</a></h3>
                                    <p>Sed gravida nisl a porta tincidunt. Integer aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="studies_block">
                    <div class="studies_block_one mb_50">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><i class="flaticon-system"></i></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h3><a href="programs.html">IT</a></h3>
                                    <p>Sed gravida nisl a porta tincidunt. Integer aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="studies_block">
                    <div class="studies_block_one mb_50">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><i class="flaticon-engineering"></i></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h3><a href="programs.html">Health Care</a></h3>
                                    <p>Sed gravida nisl a porta tincidunt. Integer aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="studies_block">
                    <div class="studies_block_one mb_50">
                        <div class="inner_box">
                            <figure class="image_box">
                                <a href="programs.html"><i class="flaticon-economy"></i></a>
                            </figure>
                            <div class="lower_content">
                                <div class="inner">
                                    <h3><a href="programs.html">Economy</a></h3>
                                    <p>Sed gravida nisl a porta tincidunt. Integer aliquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Studies Section Home Three -->

    <!-- Apply Admission Section Home Three -->
    <section class="apply_admission_home_three">
        <div class="container">
            <div class="shape"><img src="{{ asset('assets/frontend/images/shape/shape-19.png') }}" alt=""></div>
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
    </section>
    <!-- End Apply Admission Section Home Three -->

    <!-- Programs Section Home Three -->
    <section class="programs_section_home_three">
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
    </section>
    <!-- End Programs Section Home Three -->

    <!-- Process Section Home Three -->
    <section class="process_section_home_three">
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
    </section>
    <!-- End Process Section Home Three -->

    <!-- Blog Section Home One -->
    <section class="blog_section_home_one style_two sec_padding_120">
        <div class="shape">
            <div class="shape-1"><img src="{{ asset('assets/frontend/images/shape/shape-07.svg') }}" alt=""></div>
            <div class="shape-2"><img src="{{ asset('assets/frontend/images/shape/shape-06.svg') }}" alt=""></div>
        </div>
        <div class="container">
            <div class="outer_box">
                <div class="section_title_two mb_60">
                    <h5>News & Blogs</h5>
                    <h2>Latest News</h2>
                </div>
                <div class="blog_link_button">
                    <a href="blog-list.html">View all news <i class="flaticon-next"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12 block_block">
                    <div class="blog_block_one mb_30">
                        <div class="inner_box">
                            <figure class="blog_image">
                                <a href="blog-details.html"><img src="{{ asset('assets/frontend/images/blog/blog-image-01.jpg') }}" alt=""></a>
                                <div class="link_btn"><a href="blog-details.html">Read More</a></div>
                            </figure>
                            <div class="lower_content">
                                <ul class="post_info">
                                    <li><a href="#"><i class="flaticon-user-2"></i> Author</a></li>
                                    <li><a href="#"><i class="flaticon-calendar"></i> 10 /30/2022</a></li>
                                </ul>
                                <h4><a href="blog-details.html">Autism rates have increased and show differences in ethnic minorities</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 block_block">
                    <div class="blog_block_one mb_30">
                        <div class="inner_box">
                            <figure class="blog_image">
                                <a href="blog-details.html"><img src="{{ asset('assets/frontend/images/blog/blog-image-02.jpg') }}" alt=""></a>
                                <div class="link_btn"><a href="blog-details.html">Read More</a></div>
                            </figure>
                            <div class="lower_content">
                                <ul class="post_info">
                                    <li><a href="#"><i class="flaticon-user-2"></i> Author</a></li>
                                    <li><a href="#"><i class="flaticon-calendar"></i> 10 /30/2022</a></li>
                                </ul>
                                <h4><a href="blog-details.html">Gender inequality in higher education persists</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 block_block">
                    <div class="blog_block_one mb_30">
                        <div class="inner_box">
                            <figure class="blog_image">
                                <a href="blog-details.html"><img src="{{ asset('assets/frontend/images/blog/blog-image-03.jpg') }}" alt=""></a>
                                <div class="link_btn"><a href="blog-details.html">Read More</a></div>
                            </figure>
                            <div class="lower_content">
                                <ul class="post_info">
                                    <li><a href="blog-details.html"><i class="flaticon-user-2"></i> Author</a></li>
                                    <li><a href="blog-details.html"><i class="flaticon-calendar"></i> 10 /30/2022</a></li>
                                </ul>
                                <h4><a href="blog-details.html">Higher education is part of the Agenda 2030 ecosystem</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section Home One -->

@endsection
