@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<section class="hero is-success is-fullheight" id="loginPage">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-8 is-offset-2">
                <h3 class="title h1 colour-black">@lang('content/admin-login.heading')</h3>
                <p class="subtitle colour-black">@lang('content/admin-login.line')</p>
                <div class="box form-container">
                    <figure class="avatar">
                        <img src="../images/admin-placeholder.png" alt="User Icon">
                    </figure>
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <div class="field">
                            <div class="control">
                                <input id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="@lang('content/login.email_placeholder')" autofocus>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="field">
                            <div class="control">
                                <input id="password" type="password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="@lang('content/login.password_placeholder')" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> @lang('content/login.remember')</label>
                        </div>
                        <button class="button is-block is-contrast is-large is-fullwidth colour-white btn-contrast">@lang('content/login.button')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
