@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'Academic Excellence and Facilities';
    $breadcrumbDescription = '';
@endphp

@section('meta_info')
    @php
        $metaTitle = 'Academic Excellence and Facilities in Dudley Senanayake College. Colombo 05';
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
                        <h2>Academic Excellence and Facilities</h2>
                        <p>Today, Dudley Senanayake College provides both English and Sinhala medium education from Grade 6 to Grade 10, along with a well-established Advanced Level section. Over the years, we have produced students who have excelled in fields such as medicine, engineering, chemistry, education, and many other professional sectors.</p>
                        <p>To support modern teaching and learning, the school is equipped with:</p>
                        <p>Four smart boards and five smart classrooms including a <span class="fw-bold">fully equipped STEAM Education Room</span>; televisions in every primary classroom; a well-maintained computer laboratory with 60 functioning computers; a well-stocked library; an attractive language laboratory; fully equipped science and mathematics laboratories; a main hall; a newly built large auditorium; and a spacious playground — a rare and valuable feature for a school located in this urban area.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about_right_content">
                        <h2>Leadership and Community</h2>
                        <p>Under the guidance of our current principal, <span class="fw-bold">Ven. Ulapane Sumangala</span>, the school continues to grow in strength and reputation. What began primarily as a school for the children of government workers has now become a sought-after institution for families throughout the surrounding community.</p>
                        <p>Our students come from multicultural backgrounds and work together in unity and cooperation. While the school maintains a strong Buddhist foundation that promotes discipline and moral values, it fosters respect and harmony among students of all religions and backgrounds.</p>
                        <p>We have been fortunate to be guided by dedicated leaders throughout our history:</p>
                        <ul class="ms-5">
                            <li class="fw-bold" style="list-style: disc;">Mrs. Hemawellage – Founder Principal</li>
                            <li class="fw-bold" style="list-style: disc;">Mr. Athuwedage</li>
                            <li class="fw-bold" style="list-style: disc;">Mr. S.D. Jayasinghe</li>
                            <li class="fw-bold" style="list-style: disc;">Ven. Ulapane Sumangala – Current Principal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
