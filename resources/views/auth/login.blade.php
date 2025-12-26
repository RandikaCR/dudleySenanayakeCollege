@extends('layouts.frontend')

@php
    $breadcrumbTitle = 'Login';
    $breadcrumbDescription = '';
@endphp

@section('breadcrumb')
    @include('partials.frontend.breadcrumb')
@endsection


@section('content')

    <section class="login_section sec_padding_70">
        <div class="container">
            <div class="register_inner">

                <form class="register_form" action="{{ route('login') }}" method="POST">
                    @csrf

                    @if($errors->any())
                        <div class="row">
                            <div class="col-sm-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        {{$error}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <h3 class="title">login</h3>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <div class="icon"><img src="{{ asset('assets/frontend/images/icons/user.png') }}" alt=""></div>
                        <input type="text" id="email" placeholder="Type your email address" name="email" required="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="icon"><img src="{{ asset('assets/frontend/images/icons/lock.png') }}" alt=""></div>
                        <input type="password" id="password" placeholder="Type your password" name="password" required="">
                    </div>
                    <div class="form-group centred">
                        <div class="forget_pass"><a href="#">Forget  your password?</a></div>
                        <button type="submit" class="button-style-two">Login <i class="flaticon-next"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
