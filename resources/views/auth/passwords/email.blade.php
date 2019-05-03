@extends('layouts.app')

@section('title', 'Password reset')

@section('content')
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-8 is-offset-2">     
                <div class="box">
                    <h3 class="subtitle h1 colour-black">@lang('content/reset.heading')</h3>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="field">
                            <div class="control">
                                <input id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="@lang('content/reset.email_placeholder')" autofocus>
                            </div>
                        </div>
                        <button class="button is-block is-contrast is-large is-fullwidth colour-white btn-contrast">@lang('content/reset.button')</button>
                    </form>
                </div>
                <p class="colour-black">
                    <a href="#">@lang('content/reset.help_anchor')</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
