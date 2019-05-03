@extends('layouts.app')

@section('title', 'Orchestra Dashboard')

@section('content')

@include('user.modules.dashboard-header-nav')

<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            @include('user.modules.dashboard-aside-nav')
        </div>
        <div class="column is-9">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/dashboard') }}">Orchestra</a></li>
                    <li class="is-active"><a aria-current="page">Dashboard</a></li>
                </ul>
            </nav>
            <section class="hero is-info welcome is-small">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title h1">Hello, {{ Auth::user()->first_name }}.</h1>
                        <h2 class="subtitle">We hope you are having a great day!</h2>
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
                <div class="column is-5">
                    <div class="card system-card">
                        <header class="card-header">
                            <p class="card-header-title">Your system</p>
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
                                        @if(Auth::user()->subscriber)
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">Manage</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">Manage</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">Manage</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">Manage</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">Manage</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">Manage</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">Manage</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">Manage</a></td>
                                        </tr>
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td><a class="button is-small is-primary" href="#">Manage</a></td>
                                        </tr>
                                        @else
                                            <td>You are not a subscriber right now. To become a subscriber add your personal information so we could set up your system.</td>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <footer class="card-footer">
                            @if(Auth::user()->subscriber)
                                <a href="/subscriber-system/{{Auth::user()->id}}" class="card-footer-item">View All</a>
                            @else
                                <a href="/add-info/{{Auth::user()->id}}" class="card-footer-item">Add info</a>
                            @endif
                        </footer>
                    </div>
                </div>
                <div id="weatherWidget" class="column is-7">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Weather</p>
                            <span class="card-header-icon" aria-label="more options">
                                <span class="card-header-icon icon">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </span>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <iframe src="https://www.meteoblue.com/en/weather/widget/three?geoloc=detect&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 460px;height: 610px"></iframe>
                                <p><a href="https://www.meteoblue.com/en/weather/forecast/week?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget" target="_blank">meteoblue</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
