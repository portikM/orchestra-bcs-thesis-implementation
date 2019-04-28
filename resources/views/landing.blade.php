<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Orchestra</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700&#124;Roboto" rel="stylesheet">
        <!-- Bulma Version 0.7.4-->
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.4/css/bulma.min.css" />
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    </head>
    <body>
        <main id="app">
            <section class="hero is-medium is-bold">
                <div class="hero-head">
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar-brand">
                                <a class="navbar-logo" href="{{ url('/') }}">
                                    <img src="images/orchestra-logo-header.svg" alt="Orchestra Logo" width="200">
                                </a>
                                <div class="navbar-burger burger colour-white" data-target="navbarExampleTransparentExample">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div id="navbarExampleTransparentExample" class="navbar-menu">
                                <div class="navbar-end">
                                    <a class="navbar-item nav-item colour-white" href="lang/en">
                                        <span>EN</span>
                                    </a>
                                    <a class="navbar-item nav-item colour-white" href="lang/ua">
                                        <span>UA</span>
                                    </a>
                                    @auth
                                        <span class="navbar-item">
                                            <a class="button is-white is-outlined" href="{{ url('/dashboard') }}">
                                                <span class="icon">
                                                    <i class="fas fa-home"></i>
                                                </span>
                                                <span>Home</span>
                                            </a>
                                        </span>
                                    @else
                                        @if (Route::has('register'))
                                            <span class="navbar-item">
                                                <a class="button btn-contrast is-contrast colour-white" href="{{ route('register') }}">
                                                    <span>{{ trans('content/landing.nav_register') }}</span>
                                                </a>
                                            </span>
                                        @endif

                                        <span class="navbar-item">
                                            <a class="button is-white is-outlined" href="{{ route('login') }}">
                                                <span class="icon">
                                                    <i class="fas fa-sign-in-alt"></i>
                                                </span>
                                                <span>{{ trans('content/landing.nav_login') }}</span>
                                            </a>
                                        </span>
                                    @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <h1 class="h1 title">{{ trans('content/landing.hero_tagline') }}</h1>
                        <p class="subtitle">{{ trans('content/landing.hero_paragraph') }}</p>
                    </div>
                </div>
            </section>
            <div class="box cta">
                <p class="has-text-centered">
                    <span class="tag is-contrast colour-white">New</span>  {{ trans('content/landing.hero_cta') }}</p>
            </div>
            <section class="container">
                <div class="intro column is-8 is-offset-2">
                    <h2 class="h2 title">{{ trans('content/landing.intro_heading') }}</h2><br>
                    <p class="subtitle">{{ trans('content/landing.intro_paragraph') }}</p>
                </div>
                <div class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="headingFont title">49k</p>
                                <p class="subtitle">{{ trans('content/landing.tiles_subscribers') }}</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="headingFont title">59k</p>
                                <p class="subtitle">{{ trans('content/landing.tiles_solar_panels') }}</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="headingFont title">34k</p>
                                <p class="subtitle">{{ trans('content/landing.tiles_wind_turbines') }}</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="headingFont title">19k</p>
                                <p class="subtitle">{{ trans('content/landing.tiles_energy_produced') }}</p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="columns features">
                    <div class="column is-4">
                        <div class="card is-shady">
                            <div class="card-image has-text-centered">
                                <i class="fa fa-solar-panel"></i>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h4 class="h4">{{ trans('content/landing.card_solar_panels_heading') }}</h4>
                                    <p>{{ trans('content/landing.card_solar_panels_article') }}</p>
                                    <p><a href="#">{{ trans('content/landing.learn_more_anchor') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="card is-shady">
                            <div class="card-image has-text-centered">
                                <i class="fa fa-wind"></i>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h4 class="h4">{{ trans('content/landing.card_wind_turbines_heading') }}</h4>
                                    <p>{{ trans('content/landing.card_wind_turbines_article') }}</p>
                                    <p><a href="#">{{ trans('content/landing.learn_more_anchor') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="card is-shady">
                            <div class="card-image has-text-centered">
                                <i class="fa fa-power-off"></i>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h4 class="h4">{{ trans('content/landing.card_control_heading') }}</h4>
                                    <p>{{ trans('content/landing.card_control_article') }}</p>
                                    <p><a href="#">{{ trans('content/landing.learn_more_anchor') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer">
                <div class="container">
                    <div class="columns">
                        <div class="column is-3 is-offset-2">
                            <h2 class="h2 colour-white">{{ trans('content/landing.footer_about_heading') }}</h2>
                            <ul>
                                <li><a href="#">{{ trans('content/landing.footer_about_anchor_company') }}</a></li>
                                <li><a href="#">{{ trans('content/landing.footer_about_anchor_partners') }}</a></li>
                                <li><a href="#">{{ trans('content/landing.footer_about_anchor_contact') }}</a></li>
                            </ul>
                        </div>
                        <div class="column is-3">
                            <h2 class="h2 colour-white">{{ trans('content/landing.footer_law_heading') }}</h2>
                            <ul>
                                <li><a href="#">{{ trans('content/landing.footer_law_anchor_law') }}</a></li>
                                <li><a href="#">{{ trans('content/landing.footer_law_anchor_equipment') }}</a></li>
                                <li><a href="#">{{ trans('content/landing.footer_about_anchor_terms') }}</a></li>
                            </ul>
                        </div>
                        <div class="column is-4">
                            <h2 class="h2 colour-white">{{ trans('content/landing.footer_info_heading') }}</h2>
                            <ul>
                                <li><a href="#">{{ trans('content/landing.footer_info_anchor_contribution') }}</a></li>
                                <li><a href="#">{{ trans('content/landing.footer_info_anchor_international') }}</a></li>
                                <li><a href="#">{{ trans('content/landing.footer_info_anchor_products') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
        <script src="js/app.js"></script>
        <script src="js/bulma.js"></script>
    </body>
</html>