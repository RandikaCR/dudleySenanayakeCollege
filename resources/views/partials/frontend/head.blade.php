
@yield('meta_info')
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>@yield('page_title') :: Dudley Senanayake College Official Website</title>

@php
    $metaTitle = !empty($metaTitle) ? $metaTitle : 'Dudley Senanayake College. Colombo 05';
    $metaDescription = !empty($metaDescription) ? $metaDescription : '';
    $metaKeywords = !empty($metaKeywords) ? $metaKeywords : '';
    $metaImage = !empty($metaImage) ? $metaImage : asset('assets/common/images/meta-image.jpg');
    $metaUrl = !empty($metaUrl) ? $metaUrl : url('');
@endphp

<meta property="title" content="{{ $metaTitle }}" />
<meta name="description" content="{{ $metaDescription }}">
<meta name="keywords" content="{{ $metaKeywords }}">
<meta name="author" content="www.dudleysenanayakecollege.lk">

<meta property="og:title" content="{{ $metaTitle }}" />
<meta property="og:description" content="{{ $metaDescription }}" />
<meta property="og:image" content="{{ $metaImage }}" />
<meta property="og:url" content="{{ $metaUrl }}" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="Dudley Senanayake College. Colombo 05" />


<!-- Stylesheets -->
<link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/fontawesome.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/flaticon_liggett.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/global.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/header.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/banner.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/feature.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/about.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/funfact.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/program.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/studies.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/blog.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/event.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/elements-css/footer.css') }}" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lightgallery.min.css" integrity="sha512-QMCloGTsG2vNSnHcsxYTapI6pFQNnUP6yNizuLL5Wh3ha6AraI6HrJ3ABBaw6SIUHqlSTPQDs/SydiR98oTeaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link href="{{ asset('assets/backend/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">
<!-- End Stylesheets -->

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('assets/common/images/favicon.png') }}" type="image/png"/>
<!-- End Fav Icon -->

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet">
<!-- End Google Fonts -->
<style type="text/css">
    .carousel-item {
        .lg-item > img {
            height: 600px;
        }
    }
</style>
