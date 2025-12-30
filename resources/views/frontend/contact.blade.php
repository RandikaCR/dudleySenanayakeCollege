@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'Contact';
    $breadcrumbDescription = '';
@endphp

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection

@section('content')

    <!-- Map Section -->
    <section class="map_section">
        <div class="container-fulid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9992058476973!2d79.8700075758255!3d6.890696918785667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bd32087b1b1%3A0xbf364c2e05ddbf74!2sDudley%20Senanayake%20College!5e0!3m2!1sen!2slk!4v1767111421660!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Info Section -->
    <section class="contact_info_section">
        <div class="container">
            <div class="contact_info_inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="contact_info_item">
                            <h4 class="title">Address</h4>
                            <p>Dudley Senanayake College. <br>Park Road, Colombo 05 - 00500</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="contact_info_item">
                            <h4 class="title">Contact</h4>
                            <ul class="contact-list">
                                <li><i class="fa fa-phone me-2"></i> <a href="tel:+94112589558">+94 11 258 9558</a></li>
                                <li><i class="flaticon-email-1 me-2"></i> <a href="mailto:info@dudleysenanayakecollege.lk">info@dudleysenanayakecollege.lk</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="contact_info_item">
                            <h4 class="title">Hour of operation</h4>
                            <ul class="shedule_time">
                                <li>Monday - Friday: <strong>07:30 - 14:00</strong></li>
                            </ul>
                            <code>*During Non-Holidays</code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Section -->

    <!-- Contact Form Section -->
    <section class="contact_form_section sec_padding_140">
        <div class="container">
            <form class="contact_form" action="">
                <h3 class="title mb_60">Send us a message</h3>
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
    </section>
    <!-- End Contact Form Section -->


@endsection
