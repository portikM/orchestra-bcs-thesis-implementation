@extends('layouts.app')

@section('titile', 'Login')

@section('content')
<section class="hero is-success is-fullheight" id="loginPage">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-8 is-offset-2">
                <h3 class="title h1 colour-black">{{ trans('content/login.heading') }}</h3>
                <p class="subtitle colour-black">{{ trans('content/login.line') }}</p>
                <div class="box form-container">
                    <figure class="avatar">
                        <img src="images/user-placeholder.png" alt="User Icon">
                    </figure>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <div class="control">
                                <input id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ trans('content/login.email_placeholder') }}" autofocus>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input id="password" type="password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ trans('content/login.password_placeholder') }}" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ trans('content/login.remember') }}</label>
                        </div>
                        <button class="button is-block is-contrast is-large is-fullwidth colour-white btn-contrast">{{ trans('content/login.button') }}</button>
                    </form>
                </div>
                <p class="colour-black">
                    <a href="{{ route('register') }}">{{ trans('content/login.register_anchor') }}</a> &nbsp;·&nbsp;
                    <a href="{{ route('password.request') }}">{{ trans('content/login.forgot_password_anchor') }}</a> &nbsp;·&nbsp;
                    <a href="#">{{ trans('content/login.help_anchor') }}</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
