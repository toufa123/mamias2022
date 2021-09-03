@extends('layouts.auth')
@section('title')
    {{ __('Login') }}
@endsection

@section('content')
    <!-- login page start -->
    <section id="auth-login" class="row flexbox-container">
        <div class="col-xl-8 col-11">
            <div class="card bg-authentication mb-0">
                <div class="row m-0">
                    <!-- left section-login -->
                    <div class="col-md-6 col-12 px-0">
                        <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <div class="brand-logo text-center"><img class="logo"
                                                                             src="{{ asset('app-assets/logos/l.png') }}">
                                    </div>
                                    <h4 class="text-center mb-2">Welcome Back</h4>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="d-flex flex-md-row flex-column justify-content-around">

                                        <a href="#"
                                           class="btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1">
                                            <i class="bx bxl-google font-medium-3"></i><span
                                                class="pl-50 d-block text-center">Google</span></a>
                                        <a href="#" class="btn btn-social btn-block mt-0 btn-facebook font-small-3">
                                            <i class="bx bxl-facebook-square font-medium-3"></i><span
                                                class="pl-50 d-block text-center">Facebook</span></a>
                                    </div>
                                    <div class="divider">
                                        <div class="divider-text text-uppercase text-muted"><small>or login with
                                                email</small>
                                        </div>
                                    </div>
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <x-jet-validation-errors class="mb-2"/>


                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group mb-50">
                                            <label class="text-bold-600" for="email">{{ __('Email') }}</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                   :value="old('email')" required autofocus placeholder="Email address">
                                        </div>

                                        <div class="form-group">
                                            <label class="text-bold-600" for="password">{{ __('Password') }}</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                   required autocomplete="current-password" placeholder="Password">
                                        </div>
                                        <div
                                            class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                            <div class="text-left">

                                                <div class="checkbox checkbox-sm checkbox-primary">
                                                    <input type="checkbox" id="remember_me" name="remember" checked="">
                                                    <label
                                                        for="remember_me"><small>{{ __('Remember me') }}</small></label>
                                                </div>


                                            </div>
                                            <div class="text-right">

                                                @if (Route::has('password.request'))
                                                    <a class="card-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif

                                            </div>
                                        </div>

                                        <button type="submit"
                                                class="btn btn-primary glow w-100 position-relative">{{ __('Login') }}<i
                                                id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                    </form>
                                    <hr>
                                    <div class="text-center"><small class="mr-25">Don't have an account?</small><a
                                            href="{{ route('register') }}"><small>{{ __('Register') }}</small></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right section image -->
                    <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                        <div class="card-content">
                            <img class="img-fluid" src="{{ asset('app-assets/images/pages/login.png') }}" alt="Login">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login page ends -->
@endsection


