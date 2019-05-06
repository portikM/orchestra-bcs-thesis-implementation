@extends('layouts.app')

@section('title', 'Edit Your Info')

@section('content')

@include('user.modules.dashboard-header-nav')

<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            @include('admin.modules.admin-aside-nav')
        </div>
        <div class="column is-9">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/admin') }}">@lang('auth.nav_dashboard')</a></li>
                    <li class="is-active"><a aria-current="page">@lang('content/admin/admin-aside-nav.cat_systems_register')</a></li>
                </ul>
            </nav>
            <div class="columns">
                <div class="column is-12">

                    <!-- section specific content start  -->

                    <div class="card">
                        <header class="card-header{{ Session::has('register_system_success') ? ' form-success' : '' }}">
                            <p class="card-header-title">@lang('content/admin/admin-aside-nav.cat_systems_register')
                                @if (Session::has('register_system_success'))
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
                                <form method="POST" action="{{ route('register-system-submit') }}">
                                    @csrf
                                    <div class="columns">
                                        <div class="column is-6">
                                            <h3 class="h3 title">@lang('content/admin/admin-aside-nav.cat_subscribers')</h3>
                                            <table class="table is-fullwidth">
                                                <tbody>
                                                    @foreach ($subscribers as $subscriber)
                                                    <tr>
                                                        <td width="5%"><input type="radio" id="subscriber{{ $subscriber->id }}" name="subscriber_id" value="{{ $subscriber->id }}"></td>
                                                        <td><label class="radio" for="subscriber{{ $subscriber->id }}">{{ $subscriber->first_name }} {{ $subscriber->last_name }}</label></td>
                                                        <td></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="column is-6">
                                            <h3 class="h3 title">@lang('content/admin/admin-aside-nav.cat_systems')</h3>
                                            <table class="table is-fullwidth">
                                                <tbody>
                                                    @foreach ($systems as $system)
                                                    <tr>
                                                        <td width="5%"><input type="checkbox" id="system{{ $system->id }}" name="system_id[]" value="{{ $system->id }}"></td>
                                                        @if ($system->system_type === 1)
                                                        <td><label class="checkbox" for="system{{ $system->id }}">@lang('content/user/dashboard.system_type_solar_panel') {{ $system->system_code }} {{ $system->system_capacity }}@lang('content/user/dashboard.system_capacity_units')<label class="checkbox"></td>
                                                        @elseif ($system->system_type === 2)
                                                        <td><label class="checkbox" for="system{{ $system->id }}">@lang('content/user/dashboard.system_type_wind_turbine') {{ $system->system_code }} {{ $system->system_capacity }}@lang('content/user/dashboard.system_capacity_units')<label class="checkbox"></td>
                                                        @endif
                                                        <td></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
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