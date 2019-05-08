@extends('layouts.app')

@section('title', 'Your System')

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
                    <li><a>@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_system')</a></li>
                    <li class="is-active"><a aria-current="page">@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_system_statistics')</a></li>
                </ul>
            </nav>

            <!-- section specific content start  -->

            <div class="columns">
                <div class="column is-12">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Today</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="card-table">
                            <div class="content">
                            <div class="bar-graph">
                            </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Energy production</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="card-table">
                            <div class="content">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Energy consumption</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="card-table">
                            <div class="content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column is-12">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">This month</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="card-table">
                            <div class="content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- section specific content end -->

        </div>
    </div>
</div>
@endsection