@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'Sports and Co-Curricular Excellence';
    $breadcrumbDescription = '';
@endphp

@section('page_title')
    {{ $breadcrumbTitle }}
@endsection

@section('meta_info')
    @php
        $metaTitle = 'Sports and Co-Curricular Excellence in Dudley Senanayake College. Colombo 05';
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
                <div class="col-lg-12">
                    <div class="about_right_content">
                        <h5>Something Special</h5>
                        <h2>Sports and Co-Curricular Excellence</h2>
                        <p>Sports play a vital role in the holistic development of our students. In the past, the school was recognized as one of the leading volleyball teams in the Colombo Education Zone. Today, our rugby teams play a major role in school sports, while our cricket teams, karate team, football, netball, and athletics squads continue to perform with enthusiasm and determination. Through sports and extracurricular activities, we nurture teamwork, leadership, resilience, and discipline.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_right_content">
                        <h2>Schools Rugby Team</h2>
                        <p>Our powerful Rugby Team has consistently demonstrated excellence, determination, and true sportsmanship on the field.</p>
                        <h5 class="fw-bold mb-3">Achievements</h5>
                        <ul class="ms-5">
                            <li class="fw-bold mb-2" style="list-style: disc;">Champions – Division 3, 2024 Inter School Dialog Premier League</li>
                            <li class="fw-bold" style="list-style: disc;">Plate Runners-Up – Division 2, 2025 Inter School Dialog Premier League</li>
                        </ul>
                        <p class="mt-4">With back-to-back outstanding performances, our team has proven their strength and commitment to growth, rising through the divisions with confidence and pride.</p>

                        <h5 class="fw-bold mb-3">2026 – The Next Challenge</h5>
                        <p>In 2026, our team is set to compete in the Inter School Dialog Premier League Knockout Tournament. With determination, skill, and the unwavering support of our school community, they are ready to take on this exciting new challenge.</p>
                        <p>Under the guidance and leadership of our esteemed Principal, Rev. Ulapane Sumangala Thero, together with the School Rugby MIC and the dedicated Teachers’ Committee, the team continues to grow from strength to strength — both on and off the field.</p>
                        <p>We are proud of our players, coaches, and supporters who continue to build a legacy of excellence in school rugby.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="about_right_content">
                        <h2>Our Commitment</h2>
                        <p>From four classrooms in 1978 to a fully developed provincial mixed school today, Dudley Senanayake College continues its journey with pride and purpose. We remain committed to providing quality education, modern resources, strong values, and opportunities for every student to grow academically, physically, and morally.</p>
                        <p>We warmly welcome you to be a part of our continuing story of excellence.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_right_content">
                        <h2>Houses of Dudley Senanayake College</h2>
                        <p>Since its establishment, Dudley Senanayake College has proudly maintained a vibrant house system that plays a central role in student life. The house system fosters unity, leadership, teamwork, and healthy competition, contributing significantly to the development of character and school spirit.</p>
                        <h4 class="fw-bold mb-4">Early House Structure</h4>
                        <p>In its early years, the College was organized into four houses named after the noble virtues rooted in Buddhist philosophy:</p>
                        <ul class="ms-5">
                            <li class="fw-bold" style="list-style: disc;">Metta</li>
                            <li class="fw-bold" style="list-style: disc;">Karuna</li>
                            <li class="fw-bold" style="list-style: disc;">Muditha</li>
                            <li class="fw-bold" style="list-style: disc;">Upeksha</li>
                        </ul>
                        <p class="mt-3 mb-4">These names reflected the moral and ethical foundation of the institution, emphasizing compassion, kindness, joy, and equanimity.</p>
                        <h4 class="fw-bold mb-4">Subsequent Renaming</h4>
                        <p>As the College expanded and evolved, the houses were renamed to reflect themes of strength, heritage, and national pride:</p>
                        <ul class="ms-5">
                            <li class="fw-bold" style="list-style: disc;">Gajaba</li>
                            <li class="fw-bold" style="list-style: disc;">Vijaya</li>
                            <li class="fw-bold" style="list-style: disc;">Parakrama</li>
                        </ul>
                        <p class="mt-3 mb-4">This phase symbolized courage, leadership, and excellence in keeping with the growing stature of the College.</p>
                        <h4 class="fw-bold mb-4">Present House System</h4>
                        <p>In its most recent development, the house system was restructured to represent renewal and continued progress. The current houses of the College are:</p>
                        <ul class="ms-5">
                            <li class="fw-bold" style="list-style: disc;">Paravi</li>
                            <li class="fw-bold" style="list-style: disc;">Thisara</li>
                            <li class="fw-bold" style="list-style: disc;">Mayura</li>
                        </ul>
                        <p class="mt-3 mb-3">These names symbolize grace, resilience, and aspiration, reflecting the dynamic spirit of the students of Dudley Senanayake College.</p>
                        <p>The house system remains an integral part of college life, promoting camaraderie and a strong sense of belonging. Through inter-house sports meets, academic competitions, and cultural activities, students are encouraged to cultivate leadership, teamwork, and excellence—upholding the proud traditions of Dudley Senanayake College.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
