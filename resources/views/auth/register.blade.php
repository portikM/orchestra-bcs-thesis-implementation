@extends('layouts.app')

@section('titile', 'Register')

@section('content')
<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-12">     
                <div class="box">
                    <h3 class="title h1 colour-black">Register</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="field">
                            <div class="control">
                                <input id="first_name" type="text" class="input is-large form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name"  placeholder="First name *" autofocus>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input id="last_name" type="text" class="input is-large form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"  placeholder="Last name *">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email *">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input id="password" type="password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password" placeholder="Your password *">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input id="password-confirm" type="password" class="input is-large form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password *">
                            </div>
                        </div>
                        <button class="button is-block is-contrast is-large is-fullwidth colour-white btn-contrast">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
