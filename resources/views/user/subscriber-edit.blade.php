@extends('layouts.app')

@section('title', 'Edit Your Info')

@section('content')

@include('user.modules.dashboard-header-nav')

<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            @auth('admin')
                @include('admin.modules.admin-aside-nav')
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
                    @if(Auth::user()->subscriber)
                    <div class="card">
                        <header class="card-header{{ Session::has('user_submit_success') ? ' form-success' : '' }}">
                            <p class="card-header-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                @if (Session::has('user_submit_success'))
                                    <span class="submit-success">
                                        <i class="far fa-check-circle colour-contrast"></i>
                                    </span>
                                @endif
                            </p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="content">
                            <div class="card-content">
                                <form method="POST" action="{{ route('user-edit-submit', $currentUser->id) }}">
                                    @csrf
                                    <div class="columns">
                                        <div class="column is-12">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <div class="field">
                                                <div class="control">
                                                    <input id="email" type="email" class="input is-tablet form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $currentUser->email }}" autocomplete="email" placeholder="@lang('auth.new_email_placeholder')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-6">
                                            @if ($errors->has('new_password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('new_password') }}</strong>
                                                </span>
                                            @endif
                                            <div class="field">
                                                <div class="control">
                                                    <input id="new_password" type="password" class="input is-tablet form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}" name="new_password" autocomplete="new-password" placeholder="@lang('auth.new_password_placeholder')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            @if ($errors->has('password_confirmation'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                            <div class="field">
                                                <div class="control">
                                                    <input id="new_password_confirmation" type="password" class="input is-tablet form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="new_password_confirmation" autocomplete="new-password" placeholder="@lang('auth.confirm_password_placeholder')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            @if ($errors->has('old_password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('old_password') }}</strong>
                                                </span>
                                            @elseif ($errors->has('wrong_password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('wrong_password') }}</strong>
                                                </span>
                                            @endif
                                            <div class="field">
                                                <div class="control">
                                                    <input id="old_password" type="password" class="input is-tablet form-control{{ $errors->has('old_password') ? ' is-invalid' : ($errors->has('wrong_password') ? ' is-invalid' : '') }}" name="old_password" placeholder="@lang('auth.old_password_placeholder')" required autocomplete="current-password">
                                                </div>
                                            </div>
                                            <button class="button is-block is-primary is-tablet colour-white btn-primary">@lang('buttons.save')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endauth

                    <div class="card">
                        <header class="card-header{{ Session::has('subscriber_submit_success') ? ' form-success' : '' }}">
                            <p class="card-header-title">@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info_edit')
                                @if (Session::has('subscriber_submit_success'))
                                    <span class="submit-success">
                                        <i class="far fa-check-circle colour-contrast"></i>
                                    </span>
                                @endif
                            </p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="content">
                            <div class="card-content">
                                @auth
                                @if(Auth::user()->subscriber)
                                <form method="POST" action="{{ route('subscriber-edit-submit', $currentUser->id) }}">
                                @else
                                <form method="POST" action="{{ route('add-info-submit', $currentUser->id) }}">
                                @endif
                                @else
                                <form method="POST" action="{{ route('subscriber-edit-submit', $currentUser->id) }}">
                                @endauth
                                    @csrf
                                    @auth
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    @endauth
                                    <div class="columns">
                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <input id="phone_number" type="text" class="input is-tablet" name="phone_number" required autocomplete="phone_number" value="{{ $subscriber->phone_number ?? '' }}" placeholder="@lang('content/user/subscriber-edit.prone_number_placeholder')" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            <div class="field">
                                                <div class="control">
                                                    <div class="select">
                                                        <select name="subscriber_type" required>
                                                            <option>@lang('content/user/subscriber-edit.subscriber_type_option_private')</option>
                                                            <option>@lang('content/user/subscriber-edit.subscriber_type_option_business')</option>
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
                                                    <input id="address" type="text" class="input is-tablet" name="address" required autocomplete="address" value="{{ $subscriber->address ?? '' }}" placeholder="@lang('content/user/subscriber-edit.address_placeholder')">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control">
                                                    <input id="city" type="text" class="input is-tablet" name="city" required autocomplete="city" value="{{ $subscriber->city ?? '' }}" placeholder="@lang('content/user/subscriber-edit.city_placeholder')">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control">
                                                    <input id="postal_code" type="text" class="input is-tablet" name="postal_code" required autocomplete="postal_code" value="{{ $subscriber->postal_code ?? '' }}" placeholder="@lang('content/user/subscriber-edit.postal_code_placeholder')">
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