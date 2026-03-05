@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'School Teachers';
    $breadcrumbDescription = '';
@endphp

@section('page_title')
    {{ $breadcrumbTitle }}
@endsection

@section('meta_info')
    @php
        $metaTitle = 'Teachers - Dudley Senanayake College. Colombo 05';
        $metaDescription = '';
        $metaKeywords = '';
        $metaImage = '';
        $metaUrl = '';
    @endphp
@endsection

@section('css')

    <style type="text/css">

        .career_feature_block .image_box{
            margin-bottom: 15px;
        }

        .career_feature_block .image_box img {
            border-radius: 5px;
        }

        .career_feature_block h4 a{
            margin-bottom: 10px;
        }

    </style>
@endsection

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection

@section('content')
    <section class="career_feature_section sec_padding_140">
        <div class="container">
            <div class="row justify-content-center mb_70">
                <div class="col-sm-12 mb-5 text-center">
                    <h3 class="fw-bold text-primary">Principal</h3>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/t-p.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">Ven. Ulapane Sumangala</a></h4>
                        {{--<p class="text-primary fw-bold">Head Prefect</p>--}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb_70">
                <div class="col-sm-12 mb-5 text-center">
                    <h3 class="fw-bold text-primary">Deputy Principal</h3>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7835.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">H.A Amali Kalpani Perera</a></h4>
                        <p class="fw-bold">Section Head - A/L Section<br>(Grade 12-13)</p>
                        <p class="text-primary fw-bold">BSc - Open University of Sri Lanka</p>
                        <p class="text-primary fw-bold">Diploma in Education - Siyane National College of Education</p>
                        <p class="text-primary fw-bold">Post Graduate Diploma in Education - University of Colombo</p>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb_70">
                <div class="col-sm-12 mb-5 text-center">
                    <h3 class="fw-bold text-primary">Assistant principals</h3>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/t-1.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">A.I Pallewela</a></h4>
                        <p class="fw-bold">Section Head - O/L Section<br>(Grade 9-11)</p>
                        <p class="text-primary fw-bold">G.C.E.(A/L)</p>
                        <p class="text-primary fw-bold">National Diploma in Teaching</p>
                        <p class="text-primary fw-bold">BED in Teaching English</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7828.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">Priyanka Udeni Mendis Jayasinghe</a></h4>
                        <p class="fw-bold">Section Head - Primary Section<br>(Grade 1-5)</p>
                        <p class="text-primary fw-bold">B.Ed - Primary training</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb_70">
                <div class="col-sm-12 mb-5 text-center">
                    <h3 class="fw-bold text-primary">Sectional Head</h3>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7816.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">H.N.P Kumuduni Dharmasena</a></h4>
                        <p class="fw-bold">Section Head - Secondary Section<br>(Grade 6-8)</p>
                        <p class="text-primary fw-bold">B.Ed</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb_70">
                <div class="col-sm-12 mb-5 text-center">
                    <h3 class="fw-bold text-primary">Teaching Panel</h3>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/t-2.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">S.K Nilushi C Samarasinghe</a></h4>
                        <p class="text-primary fw-bold">Bachelor of Arts degree</p>
                        <p class="text-primary fw-bold">Postgraduate Diploma in Education Diploma in law</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7861.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">D.M.A.R Weerakoon</a></h4>
                        <p class="text-primary fw-bold">BA Degree</p>
                        <p class="text-primary fw-bold">PGDE</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7839.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">M.C Dilrangi</a></h4>
                        <p class="text-primary fw-bold">GCE A/L</p>
                        <p class="text-primary fw-bold">Ncoe diploma (English medium mathematics)</p>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7845.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">K.H.S Rukmali</a></h4>
                        <p class="text-primary fw-bold">BSc Management(Hons)</p>
                        <p class="text-primary fw-bold">Post graduate education diploma</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7826.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">Thilini Nirasha Kothalawala</a></h4>
                        <p class="text-primary fw-bold">BA Arts</p>
                        <p class="text-primary fw-bold">PGDE (Education)</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7825.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">T.H.D.C.N THIRIMANNA</a></h4>
                        <p class="text-primary fw-bold">Bcom (Hons) Degree  </p>
                        <p class="text-primary fw-bold">National Diploma in Education</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7818.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">U.J Rashmi Narmada</a></h4>
                        <p class="text-primary fw-bold">G.C.E A/L</p>
                        <p class="text-primary fw-bold">National Diploma in Education</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7859.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">D Dilani Jacintha fernando</a></h4>
                        <p class="text-primary fw-bold">Masters of Education</p>
                        <p class="text-primary fw-bold">Post Graduate Diploma in Education</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7857.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">H.A Jaward</a></h4>
                        <p class="text-primary fw-bold">G.C.E.(A/L)</p>
                        <p class="text-primary fw-bold">English trained</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7867.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">Janani Madushika Nanayakkara</a></h4>
                        <p class="text-primary fw-bold">Degree</p>
                        <p class="text-primary fw-bold">Degree</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/t-5.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">UDUWARAGE RANGANI PIYUMIKA PERERA</a></h4>
                        <p class="text-primary fw-bold">BSc -Open University of Sri Lanka</p>
                        <p class="text-primary fw-bold">Following Postgraduate Diploma in Education</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7852.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">S.S Basnayake</a></h4>
                        <p class="text-primary fw-bold">BSc. In Agriculture</p>
                        <p class="text-primary fw-bold">Following PGDE</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7824.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">W.A.D Poornima</a></h4>
                        <p class="text-primary fw-bold">Degree</p>
                        <p class="text-primary fw-bold">PGDE</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7856.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">A.J.M.M Ruvini Lasantha</a></h4>
                        <p class="text-primary fw-bold">Bachelor of Art  (BA degree)</p>
                        <p class="text-primary fw-bold">Primary Trained</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7822.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">D.A.R Kavinda</a></h4>
                        <p class="text-primary fw-bold">MA in Linguistics (English) - University of Kelaniya</p>
                        <p class="text-primary fw-bold">BA(SP) in TESL-University of Sri Jayawardanapura</p>
                        <p class="text-primary fw-bold">Diploma in English - Aquinas University College</p>
                        <p class="text-primary fw-bold">Diploma in English - Gateway College</p>
                        <p class="text-primary fw-bold">Diploma in Daham Guru Sarasavi - Buddhist and Pali University of Sri Lanka</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7870.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">A.M.T hansanee</a></h4>
                        <p class="text-primary fw-bold">G.C.E.(A/L)</p>
                        <p class="text-primary fw-bold">National college of education primary diploma</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7838.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">W.H.D.P.Upasena</a></h4>
                        <p class="text-primary fw-bold">Bachelor of management studies</p>
                        <p class="text-primary fw-bold">Postgraduate diploma in education</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/user_square.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">S thanoosha</a></h4>
                        <p class="text-primary fw-bold">BA (Hons)</p>
                        <p class="text-primary fw-bold">MEd</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7853.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">S.M Jaladini Senevirathna</a></h4>
                        <p class="text-primary fw-bold">B.A Genaral</p>
                        <p class="text-primary fw-bold">Primary Trained Teacher (300 Hours)</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7863.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">J..P.Y.T.M.JAYAWARDHANA</a></h4>
                        <p class="text-primary fw-bold">BAPA ( University of VPA ) colombo 7</p>
                        <p class="text-primary fw-bold">Reading post graduate diploma</p>
                    </div>
                </div><div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7848.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">V.N.T.G Kosala Raveen</a></h4>
                        <p class="text-primary fw-bold">Bachelor of Science</p>
                        <p class="text-primary fw-bold">Post Graduate Diploma in Education (UG)</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7866.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">N.K SUDARSHANI</a></h4>
                        <p class="text-primary fw-bold">BSc Marketing Management special Degree</p>
                        <p class="text-primary fw-bold">Post Graduate Diploma in Education</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7869.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">K.A.I Anjani</a></h4>
                        <p class="text-primary fw-bold">B.B.Mgt (special)</p>
                        <p class="text-primary fw-bold">Reading for PGDE - UoC</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7854.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">J.M.D.B Ruklanthi</a></h4>
                        <p class="text-primary fw-bold">B.Sc Agriculture specialized in Bio technology</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7868.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">D.T. Gimhani Lankesha Subasinghe</a></h4>
                        <p class="text-primary fw-bold">BSc Science Degree</p>
                        <p class="text-primary fw-bold">Pre-Service Teacher Training</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7829.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">B.A.P Dinusha</a></h4>
                        <p class="text-primary fw-bold">O/L & A/L</p>
                        <p class="text-primary fw-bold">national teaching diploma</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/t-4.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">K.A.D Madhushika</a></h4>
                        <p class="text-primary fw-bold">G.C.E (A/L)</p>
                        <p class="text-primary fw-bold">Diploma in teaching</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7850.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">H.M.D.R Chandrasena</a></h4>
                        <p class="text-primary fw-bold">B.Sc (Biological Science)</p>
                        <p class="text-primary fw-bold">Graduate Teaching Practice</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7860.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">H.H.B Perera</a></h4>
                        <p class="text-primary fw-bold">G.C.E (A/L)</p>
                        <p class="text-primary fw-bold">National diploma in Teaching ICT</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7862.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">G.L.D GAMAGE</a></h4>
                        <p class="text-primary fw-bold">G.C.E (A/L)</p>
                        <p class="text-primary fw-bold">National diploma in Teaching</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="career_feature_block centred">
                        <figure class="image_box">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/uploads/DSC7841.jpg') }}" alt=""></a>
                        </figure>
                        <h4 class="text-uppercase"><a href="javascript:void(0);">Ruwani munasinghe</a></h4>
                        {{--<p class="text-primary fw-bold">G.C.E (A/L)</p>
                        <p class="text-primary fw-bold">National diploma in Teaching</p>--}}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
