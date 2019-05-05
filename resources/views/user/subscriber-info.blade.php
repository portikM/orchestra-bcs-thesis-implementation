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
                    <li class="is-active"><a aria-current="page">@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info_view')</a></li>
                </ul>
            </nav>
            <div class="columns">
                <div class="column is-12">

                    <!-- section specific content start  -->

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info_view')</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="content">
                            <div class="card-content">
                                <div class="columns">
                                    <div class="column is-6">
                                        <div class="field">
                                            <p>@lang('content/user/subscriber-info.phone_number')</p>
                                            <p>{{ $subscriber->phone_number }}</p>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="field">
                                            <p>@lang('content/user/subscriber-info.subscriber_type')</p>
                                            <p>{{ $subscriber->subscriber_type }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <p>@lang('content/user/subscriber-info.address')</p>
                                            <p>{{ $subscriber->address }}</p>
                                        </div>
                                        <div class="field">
                                            <p>@lang('content/user/subscriber-info.city')</p>
                                            <p>{{ $subscriber->city }}</p>
                                        </div>
                                        <div class="field">
                                            <p>@lang('content/user/subscriber-info.postal_code')</p>
                                            <p>{{ $subscriber->postal_code }}</p>
                                        </div>
                                        <a href="/subscriber-edit/{{$currentUser->id}}" class="button is-primary colour-white btn-primary">
                                            <span class="icon">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span>@lang('buttons.edit')</span>
                                        </a>
                                    </div>
                                </div>
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