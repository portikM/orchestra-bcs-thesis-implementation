@extends('layouts.app')

@section('title', 'Orchestra Dashboard')

@section('content')

@include('admin.modules.admin-header-nav')

<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            @include('admin.modules.admin-aside-nav')
        </div>
        <div class="column is-9">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li class="is-active"><a href="{{ url('/admin') }}">@lang('auth.nav_dashboard')</a></li>
                </ul>
            </nav>
            <section class="hero is-info welcome is-small">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title h1">@lang('auth.nav_dashboard')</h1>
                        <h2 class="subtitle">@lang('content/admin/admin.greeting_line')</h2>
                    </div>
                </div>
            </section>
            <section class="info-tiles">
                <div class="tile is-ancestor has-text-centered">
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="headingFont title">49k</p>
                            <p class="subtitle">@lang('content/landing.tiles_subscribers')</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="headingFont title">59k</p>
                            <p class="subtitle">@lang('content/landing.tiles_solar_panels')</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="headingFont title">34k</p>
                            <p class="subtitle">@lang('content/landing.tiles_wind_turbines')</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="headingFont title">19k</p>
                            <p class="subtitle">@lang('content/landing.tiles_energy_produced')</p>
                        </article>
                    </div>
                </div>
            </section>
            <div class="columns">
                <div class="column is-6">
                    <div class="card system-card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/admin/admin-aside-nav.cat_subscribers')</p>
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
                                        @foreach ($subscribers as $subscriber)
                                        <tr>
                                            <td width="5%"></td>
                                            <td>{{ $subscriber->first_name }} {{ $subscriber->last_name }}</td>
                                            <td>
                                                <a href="/subscriber-info/{{ $subscriber->id }}" class="subscriber-access-icon">
                                                    <i class="far fa-address-card"></i>
                                                </a>
                                                <a href="/subscriber-system/{{ $subscriber->id }}" class="subscriber-access-icon">
                                                    <i class="fas fa-solar-panel"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="/subscribers-list" class="card-footer-item">@lang('content/admin/admin-aside-nav.cat_subscribers_list')</a>
                        </footer>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="card system-card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/admin/admin-aside-nav.cat_general_tasks')</p>
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
                                            <td width="5%"><i class="far fa-bell"></i></td>
                                            <td>@lang('content/admin/admin.lorem_ipsum')</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="far fa-bell"></i></td>
                                            <td>@lang('content/admin/admin.lorem_ipsum')</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="far fa-bell"></i></td>
                                            <td>@lang('content/admin/admin.lorem_ipsum')</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="far fa-bell"></i></td>
                                            <td>@lang('content/admin/admin.lorem_ipsum')</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="far fa-bell"></i></td>
                                            <td>@lang('content/admin/admin.lorem_ipsum')</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="far fa-bell"></i></td>
                                            <td>@lang('content/admin/admin.lorem_ipsum')</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="far fa-bell"></i></td>
                                            <td>@lang('content/admin/admin.lorem_ipsum')</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="far fa-bell"></i></td>
                                            <td>@lang('content/admin/admin.lorem_ipsum')</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="far fa-bell"></i></td>
                                            <td>@lang('content/admin/admin.lorem_ipsum')</td>
                                            <td><a class="button is-small is-primary" href="#">@lang('buttons.manage')</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item">@lang('content/admin/admin-aside-nav.cat_general_tasks')</a>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
