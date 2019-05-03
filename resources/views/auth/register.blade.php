@extends('layouts.app')

@section('title', 'Register')

@section('content')
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-12">     
                <div class="box">
                    <h3 class="title h1 colour-black">@lang('content/register.heading')</h3>
                    <p class="subtitle colour-black">@lang('content/register.instruction')</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                        <div class="field">
                            <div class="control">
                                <input id="first_name" type="text" class="input is-large form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name"  placeholder="@lang('content/register.first_name_placeholder')" autofocus>
                            </div>
                        </div>
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                        <div class="field">
                            <div class="control">
                                <input id="last_name" type="text" class="input is-large form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"  placeholder="@lang('content/register.last_name_placeholder')">
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <div class="field">
                            <div class="control">
                                <input id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="@lang('content/register.email_placeholder')">
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <div class="field">
                            <div class="control">
                                <input id="password" type="password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password" placeholder="@lang('content/register.password_placeholder')">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input id="password-confirm" type="password" class="input is-large form-control" name="password_confirmation" required autocomplete="new-password" placeholder="@lang('content/register.confirm_password_placeholder')">
                            </div>
                        </div>
                        <button class="button is-block is-contrast is-large is-fullwidth colour-white btn-contrast">@lang('content/register.button')</button>
                    </form>
                </div>
                <p class="colour-black">
                    <a href="{{ route('login') }}">@lang('content/register.login_anchor')</a> &nbsp;·&nbsp;
                    <a href="#">@lang('content/register.help_anchor')</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
