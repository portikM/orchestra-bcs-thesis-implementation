@extends('layouts.app')

@section('titile', 'Login')

@section('content')
<section class="hero is-success is-fullheight" id="loginPage">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-8 is-offset-2">
                <h3 class="title h1 colour-black">Login</h3>
                <p class="subtitle colour-black">Please login to proceed.</p>
                <div class="box form-container">
                    <figure class="avatar">
                        <img src="images/user-placeholder.png" alt="User Icon">
                    </figure>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="field">
                            <div class="control">
                                <input id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email *" autofocus>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input id="password" type="password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Your Password *" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</label>
                        </div>
                        <button class="button is-block is-contrast is-large is-fullwidth colour-white btn-contrast">Login</button>
                    </form>
                </div>
                <p class="colour-black">
                    <a href="{{ route('register') }}">Sign Up</a> &nbsp;·&nbsp;
                    <a href="{{ route('password.request') }}">Forgot Password</a> &nbsp;·&nbsp;
                    <a href="#">Need Help?</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
