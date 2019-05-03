@extends('layouts.app')

@section('title', 'Your System')

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
                    <li class="is-active"><a aria-current="page">@lang('content/user/dashboard-aside-nav.cat_subscriber_system')</a></li>
                </ul>
            </nav>
            <div class="columns">
                <div class="column is-12">

                    <!-- section specific content start  -->

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/user/dashboard-aside-nav.cat_subscriber_system')</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="card-table">
                            <div class="content">
                                <table class="table is-fullwidth is-striped">
                                    <tbody>
                                        <tr>
                                            <td width="5%"></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                    </tbody>
                                </table>
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