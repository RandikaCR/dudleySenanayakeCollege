@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'Contact';
    $breadcrumbDescription = '';
@endphp

@section('page_title')
    {{ $breadcrumbTitle }}
@endsection

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection

@section('css')

    <style type="text/css">

        .send-message{
            width: 260px;
        }

        @media only screen and (max-width: 767px){
            .send-message{
                width: 100%;
            }
        }
    </style>
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
                        <input type="text" placeholder="Name *" name="name" id="name" required="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 form-group">
                        <input type="email" placeholder="Your Email *" name="email" id="email" required="">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 form-group">
                        <textarea placeholder="Your Message *" name="message" id="message"></textarea>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 form-group">
                        <a href="javascript:void(0);" class="button-style-two send-message">Send Message <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Form Section -->


@endsection

@section('script')
    <script>

        function validateEmail($email) {
            // Regular expression for email validation
            var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            // Return true if email matches regex, false otherwise
            return regex.test($email);
        }

        $(document).ready(function (){
            $('.send-message').on('click', function ($e){
                $e.preventDefault();

                $name = $('#name').val().trim();
                $email = $('#email').val().trim();
                $message = $('#message').val().trim();

                $isInvalid = 0;

                if($name == ''){
                    $isInvalid++;
                    Swal.fire('Unable to send...', 'Name is required!', 'error');
                }else if($email == ''){
                    $isInvalid++;
                    Swal.fire('Unable to send...', 'Email is required!', 'error');
                }else if(!validateEmail($email)){
                    $isInvalid++;
                    Swal.fire('Unable to send...', 'Invalid Email address!', 'error');
                }else if($message == ''){
                    $isInvalid++;
                    Swal.fire('Unable to send...', 'Message is required!', 'error');
                }

                if($isInvalid == 0){
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You want to send this message!",
                        icon: "warning",
                        showCancelButton: !0,
                        showLoaderOnConfirm: true,
                        confirmButtonText: "Yes, Send it!",
                        cancelButtonText: "No, cancel!",
                        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                        cancelButtonClass: "btn btn-secondary w-xs mt-2",
                        buttonsStyling: !1,
                        showCloseButton: !0,
                    }).then((result) => {
                        if (result.isConfirmed) {

                            setTimeout(function() {
                                $.ajax({
                                    url: "{{ route('frontend.contactInquiry') }}",
                                    type: 'POST',
                                    data: {
                                        name: $name,
                                        email: $email,
                                        message: $message,
                                        _token: csrf_token()
                                    },
                                    dataType: 'json',
                                    beforeSend: function ($jqXHR, $obj) {
                                        Swal.fire({
                                            title: "Processing...",
                                            text: "Please wait",
                                            imageUrl: "{{ asset('assets/common/images/ajax-loader.gif') }}",
                                            showConfirmButton: false,
                                            allowOutsideClick: false
                                        });
                                    },
                                    success: function ($response, $textStatus, $jqXHR) {
                                        Swal.fire('Thank You!', 'Message has been sent successfully!. Your message will be reviewed shortly.', 'success');
                                        setTimeout(function(){
                                            location.reload();
                                        },4000);
                                    },
                                    error: function ($jqXHR, $textStatus, $errorThrown) {
                                        Swal.fire('Oops...', 'Something went wrong with the System!', 'error');
                                    }
                                });

                            }, 50);
                        }
                    });
                }


            });
        });

    </script>
@endsection
