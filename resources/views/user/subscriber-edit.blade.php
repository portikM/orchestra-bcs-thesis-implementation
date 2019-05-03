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
                    <li><a>@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info')</a></li>
                    <li class="is-active"><a aria-current="page">@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info_edit')</a></li>
                </ul>
            </nav>
            <div class="columns">
                <div class="column is-12">

                    <!-- section specific content start  -->
                    
                    @auth
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
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
                                        <div class="column is-12">
                                        <div class="field">
                                                <div class="control">
                                                    <input id="email" type="email" class="input is-tablet" name="email" value="{{ $currentUser->email }}" autocomplete="email" placeholder="@lang('auth.email_placeholder')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <input id="password" type="password" class="input is-tablet" name="password" autocomplete="new-password" placeholder="@lang('auth.new_password_placeholder')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <input id="password-confirm" type="password" class="input is-tablet" name="password_confirmation" autocomplete="new-password" placeholder="@lang('auth.confirm_password_placeholder')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <div class="control">
                                                    <input id="password" type="password" class="input is-tablet" name="password" placeholder="@lang('auth.old_password_placeholder')" autocomplete="current-password">
                                                </div>
                                            </div>
                                            <button class="button is-block is-primary is-tablet colour-white btn-primary">@lang('buttons.save')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endauth

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info_edit')</p>
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
                                                    <input id="phone_number" type="text" class="input is-tablet" name="phone_number" required autocomplete="phone_number" value="{{ $checkvariable ?? '' }}" placeholder="@lang('content/user/subscriber-edit.prone_number_placeholder')" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <div class="select">
                                                        <select name="subscriber_type">
                                                            <option>@lang('content/user/subscriber-edit.subscriber_type_option_business')</option>
                                                            <option>@lang('content/user/subscriber-edit.subscriber_type_option_private')</option>
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
                                                    <input id="address" type="text" class="input is-tablet" required autocomplete="address" value="{{ $checkvariable ?? '' }}" placeholder="@lang('content/user/subscriber-edit.address_placeholder')">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control">
                                                    <input id="city" type="text" class="input is-tablet" name="city" required autocomplete="city" value="{{ $checkvariable ?? '' }}" placeholder="@lang('content/user/subscriber-edit.city_placeholder')">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control">
                                                    <input id="postal_code" type="text" class="input is-tablet" name="postal_code" required autocomplete="postal_code" value="{{ $checkvariable ?? '' }}" placeholder="@lang('content/user/subscriber-edit.postal_code_placeholder')">
                                                </div>
                                            </div>
                                            @auth
                                            <div class="field">
                                                <label class="checkbox">
                                                    <input type="checkbox" required>
                                                    @lang('content/user/subscriber-edit.personal_data_consent')
                                                </label>
                                            </div>
                                            @endauth
                                            <button class="button is-block is-primary is-tablet colour-white btn-primary">@lang('buttons.save')</button>
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