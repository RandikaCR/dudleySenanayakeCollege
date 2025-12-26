<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.frontend.head')
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

@include('partials.frontend.header')

@yield('breadcrumb')

@yield('content')

@include('partials.frontend.footer')

<!-- Scroll to Top -->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="flaticon-next"></i>
</button>
<!--End Scroll to Top -->


@include('partials.frontend.script')

</body>
<!-- End Page Wrapper -->

</html>
