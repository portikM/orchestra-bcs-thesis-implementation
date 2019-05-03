@extends('layouts.app')

@section('title', 'Edit Your Info')

@section('content')

@include('user.modules.dashboard-header-nav')

<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            @auth('admin')
            <!-- include('admin.modules.dashboard-aside-nav') -->
            @else
                @include('user.modules.dashboard-aside-nav')
            @endauth
        </div>
        <div class="column is-9">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    @auth('admin')
                    <li><a>{{ $currentUser->first_name }} {{ $currentUser->last_name }}</a></li>
                    @else
                    <li><a href="{{ url('/dashboard') }}">Orchestra</a></li>
                    @endauth
                    <li><a>Your Info</a></li>
                    <li class="is-active"><a aria-current="page">Edit Your Info</a></li>
                </ul>
            </nav>
            <div class="columns">
                <div class="column is-12">

                    <!-- section specific content start  -->

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Edit Your Info</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="content">
                            <div class="card-content">
                                <form method="POST" action="">
                                    <div class="columns">
                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <input id="phone_number" type="text" class="input is-tablet" name="phone_number" required autocomplete="phone_number" value="{{ $checkvariable ?? '' }}" placeholder="Your phone number *" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <div class="select">
                                                        <select name="subscriber_type">
                                                            <option>Business</option>
                                                            <option>Private</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <div class="control">
                                                    <input id="address" type="text" class="input is-tablet" required autocomplete="address" value="{{ $checkvariable ?? '' }}" placeholder="Your address *">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control">
                                                    <input id="city" type="text" class="input is-tablet" name="city" required autocomplete="city" value="{{ $checkvariable ?? '' }}" placeholder="Your city *">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control">
                                                    <input id="postal_code" type="text" class="input is-tablet" name="postal_code" required autocomplete="postal_code" value="{{ $checkvariable ?? '' }}" placeholder="Postal code *">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label class="checkbox">
                                                    <input type="checkbox" required>
                                                    I give my consent to processing of my personal data
                                                </label>
                                            </div>
                                            <button class="button is-block is-primary is-tablet colour-white btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- section specific content end -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection