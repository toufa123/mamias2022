@extends('layouts.auth')
@section('title')
    {{ __('Register') }}
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/js/extra/hideshow/css/demo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/js/extra/hideshow/css/example.wink.css') }}">
@endsection

@section('content')
    <!-- register section starts -->
    <section class="row flexbox-container">
        <div class="col-xl-8 col-10">
            <div class="card bg-authentication mb-0">
                <div class="row m-0">
                    <!-- register section left -->
                    <div class="col-md-6 col-12 px-0">
                        <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <div class="brand-logo text-center"><img class="logo"
                                                                             src="{{ asset('app-assets/logos/l.png') }}">
                                    </div>
                                    <h4 class="text-center mb-2">    {{ __('Register') }}</h4>
                                </div>
                            </div>
                            <!--<div class="text-center">
                                <p> <small> Please enter your details to sign up and be part of our great community</small>
                                </p>
                            </div>-->
                            <div class="card-content">
                                <div class="card-body">
                                    <x-jet-validation-errors class="mb-4"/>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6 mb-50">
                                                <label class="text-bold-600"
                                                       for="first_name">{{ __('First Name') }}</label>
                                                <input type="text" class="form-control" d="first_name" type="text"
                                                       name="first_name" placeholder="First name" required autofocus>
                                            </div>
                                            <div class="form-group col-md-6 mb-50">
                                                <label class="text-bold-600"
                                                       for="last_name">{{ __('Last Name') }}</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name"
                                                       placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="form-group mb-50">
                                            <label class="text-bold-600" for="username">{{ __('Username') }}</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                   :value="old('username')" required autocomplete="username"
                                                   placeholder="Username"></div>
                                        <div class="form-group mb-50">
                                            <label class="text-bold-600" for="email">{{ __('Email') }}</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                   :value="old('email')" required placeholder="Email address"></div>
                                        <div class="form-group mb-50">
                                            <label class="text-bold-600" for="password">{{ __('Password') }}</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                   required autocomplete="new-password" placeholder="Password">
                                        </div>
                                        <div class="form-group mb-50">
                                            <label class="text-bold-600"
                                                   for="password_confirmation">{{ __('Confirm Password') }}</label>
                                            <input type="password" class="form-control" id="password_confirmation"
                                                   name="password_confirmation" required autocomplete="new-password"
                                                   placeholder="Password">
                                        </div>
                                        <div class="form-group mb-50">
                                            <label class="text-bold-600" for="Country">{{ __('Country') }}</label>

                                            <select name="country_id" class="select2 form-control">
                                                <option value="">Select a country</option>
                                                @foreach ($Getcountrylist as $Country)
                                                    <option value="{{ $Country->id }}">{{$Country->ISO3}}
                                                        --{{$Country->CountryName}}
                                                    </option>
                                                @endforeach

                                            </select>


                                        </div>
                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                            <div
                                                class="form-group mb-2 d-flex flex-md-row flex-column justify-content-between align-items-center">
                                                <div class="text-left">
                                                    <div class="checkbox checkbox-sm checkbox-primary">
                                                        <input type="checkbox" name="terms" id="terms" checked="">
                                                        <label for="terms">{!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                        ]) !!}</label>
                                                    </div>

                                                </div>

                                            </div>
                                        @endif


                                        <button type="submit"
                                                class="btn btn-primary glow position-relative w-100">{{ __('Register') }}
                                            <i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                    </form>
                                    <hr>
                                    <div class="text-center"><small
                                            class="mr-25">{{ __('Already registered?') }}</small><a
                                            href="{{ route('login') }}"><small>{{ __('Login') }}</small> </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- image section right -->
                    <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                        <img class="img-fluid" src="{{ asset('app-assets/images/pages/register.png') }}"
                             alt="Register"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register section endss -->
@section('js')
    <script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
    <script src="{{ asset('app-assets/js/extra/hideshow/hideShowPassword.js') }}"></script>

    <script>
        $('#password').hideShowPassword(true, true);
        $('#password_confirmation').hideShowPassword(true, true);

    </script>
@endsection

@endsection()



