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
                        <div class="content">
                            <div class="columns">
                                <div class="column is-6">
                                    <table class="table is-fullwidth">
                                        <tbody>
                                            <tr>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_country')</td>
                                                @if ( Config::get('app.locale') == 'en')
                                                <td>{{ $country->country_name_en }}</td>
                                                @else
                                                <td>{{ $country->country_name_ua }}</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_efficiency')</td>
                                                <td>86%</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_angle')</td>
                                                <td>{{ $angle }} &#176;</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_wind')</td>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_wind_value')</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="column is-6">
                                    <table class="table is-fullwidth">
                                        <tbody>
                                            <tr>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_dummy_parameter')</td>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_dummy_value')</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_dummy_parameter')</td>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_dummy_value')</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_dummy_parameter')</td>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_dummy_value')</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_dummy_parameter')</td>
                                                <td>@lang('content/user/subscriber-statistics.subscriber_dummy_value')</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column is-12">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/user/subscriber-statistics.systems_infographics')</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="content">
                            <div class="statistics">
                                <object data="../images/statistics/systems.svg" type="image/svg+xml"></object>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/user/subscriber-statistics.production_infographics')</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="card-table">
                            <div class="content">
                                <div class="statistics">
                                    <object data="../images/statistics/production.svg" type="image/svg+xml"></object>                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/user/subscriber-statistics.consumption_infographics')</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="card-table">
                            <div class="content">
                                <div class="statistics">
                                    <object data="../images/statistics/consumption.svg" type="image/svg+xml"></object>                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column is-12">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/user/subscriber-statistics.monthly_infographics')</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="card-table">
                            <div class="content">
                                <div class="statistics">
                                    <object data="../images/statistics/month.svg" type="image/svg+xml"></object>                           
                                </div>
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