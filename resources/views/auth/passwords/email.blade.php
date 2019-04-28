@extends('layouts.app')

@section('content')
<section class="hero is-success is-fullheight" id="loginPage">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-8 is-offset-2">     
                <div class="box">
                    <form method="POST" action="{{ route('password.email') }}">
                        <p class="subtitle colour-black">Please provide your email.</p>
                        @csrf
                        <div class="field">
                            <div class="control">
                                <input id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email *" autofocus>
                            </div>
                        </div>
                        <button class="button is-block is-contrast is-large is-fullwidth colour-white btn-contrast">Send Password Reset Link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
