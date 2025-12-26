<section class="page-title style_two">
    <div class="bg_layer" style="background-image: url({{ asset('assets/frontend/images/background/bg-image-08.jpg') }});"></div>
    <div class="container">
        <div class="content-box">
            <ul class="bread-crumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="current">{{ $breadcrumbTitle }}</li>
            </ul>
            <div class="title centred white_color">
                <h2>{{ $breadcrumbTitle }}</h2>
                @if(!empty($breadcrumbDescription))
                    <p>{{ $breadcrumbDescription }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
