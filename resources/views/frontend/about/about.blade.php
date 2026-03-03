@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'About School';
    $breadcrumbDescription = '';
@endphp

@section('meta_info')
    @php
        $metaTitle = 'About Dudley Senanayake College. Colombo 05';
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
                <div class="col-xl-4 col-lg-12">
                    <div class="about_left_image clearfix">
                        <figure class="about_image_four">
                            <img class="img-fluid w-100" src="{{ asset('assets/common/images/school-logo.png') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                    <div class="about_right_content">
                        <h5>About School</h5>
                        <h2>Dudley Senanayake College, Colombo 05.</h2>
                        <p>Located in the heart of Colombo, within Narahenpita Village in the Salpiti Koralaya – Palle Division of the Western Province, <span class="fw-bold">Dudley Senanayake College</span> has proudly served the community for 47 years. From its humble beginnings to its present status as a 1C Provincial Mixed School, our institution stands as a symbol of dedication, discipline, and continuous progress.</p>
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
                <h5>School Moto</h5>
                <h2 class="mt-3" style="font-style: italic;">විදු මගින් සරු බවට - Prosperity through Education</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-book-1"></i></div>
                            <div class="icon_box_two"><i class="flaticon-book-1"></i></div>
                            <div class="feature_content">
                                <h4><a href="javascript:void(0);">දැක්ම - Vision</a></h4>
                                <p>"නැණ ගුණ පිරි නිපුණතා සපිරි දරුවෙක්."</p>
                                <p>"A child enriched with knowledge, good values, and competencies."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="feature_block_three centred">
                        <div class="feature_inner_box">
                            <div class="icon_box"><i class="flaticon-graduated"></i></div>
                            <div class="icon_box_two"><i class="flaticon-graduated"></i></div>
                            <div class="feature_content">
                                <h4><a href="javascript:void(0);">මෙහෙවර - Mission</a></h4>
                                <p>ශ්‍රී ලාංකීය සංස්කෘතිය ජාතික අනන්‍යතාවය සුරක්ෂිත කරන අධ්‍යාපන නිපුණතාවන්ගෙන් පිරිපුන් 21 සියවසේ වැඩ ලෝකයට ගැලපෙන නවීන තාක්ෂණ කුසලතාවලින් පිරි සමතුලිත පෞරුෂත්වයෙන් යුතු දරු පිරිසක් දැයට දායාද කිරීම.</p>
                                <p>To develop a generation of students who uphold national values and identity and are equipped with the knowledge skills and attitudes required to meet the challenges of the 21st century, through quality education, effective guidance and a disciplined learner centered school environment.</p>
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
