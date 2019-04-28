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
                                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div id="navbarExampleTransparentExample" class="navbar-menu">
                                <div class="navbar-end">
                                    <a class="navbar-item nav-item colour-white" href="#">
                                        <span>EN</span>
                                    </a>
                                    <a class="navbar-item nav-item colour-white" href="#">
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
                                                    <span>Register</span>
                                                </a>
                                            </span>
                                        @endif

                                        <span class="navbar-item">
                                            <a class="button is-white is-outlined" href="{{ route('login') }}">
                                                <span class="icon">
                                                    <i class="fas fa-sign-in-alt"></i>
                                                </span>
                                                <span>Login</span>
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
                        <h1 class="h1 title">The new standard in power supply</h1>
                        <p class="subtitle">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </section>
            <div class="box cta">
                <p class="has-text-centered">
                    <span class="tag is-contrast colour-white">New</span> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <section class="container">
                <div class="intro column is-8 is-offset-2">
                    <h2 class="h2 title">Perfect for developers or designers!</h2><br>
                    <p class="subtitle">Vel fringilla est ullamcorper eget nulla facilisi. Nulla facilisi nullam vehicula ipsum a. Neque egestas congue quisque egestas diam in arcu cursus.</p>
                </div>
                <div class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="headingFont title">49k</p>
                                <p class="subtitle">Subscribers</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="headingFont title">59k</p>
                                <p class="subtitle">Solar panels</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="headingFont title">34k</p>
                                <p class="subtitle">Wind turbines</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="headingFont title">19k</p>
                                <p class="subtitle">kWh produced daily</p>
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
                                    <h4 class="h4">Tristique senectus et netus et.</h4>
                                    <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                                    <p><a href="#">Learn more</a></p>
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
                                    <h4 class="h4">Tempor orci dapibus ultrices in.</h4>
                                    <p>Ut venenatis tellus in metus vulputate. Amet consectetur adipiscing elit pellentesque. Sed arcu non odio euismod lacinia at quis risus. Faucibus turpis in eu mi bibendum neque egestas cmonsu songue. Phasellus vestibulum lorem
                                    sed risus.</p>
                                    <p><a href="#">Learn more</a></p>
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
                                    <h4 class="h4"> Leo integer malesuada nunc vel risus. </h4>
                                    <p>Imperdiet dui accumsan sit amet nulla facilisi morbi. Fusce ut placerat orci nulla pellentesque dignissim enim. Libero id faucibus nisl tincidunt eget nullam. Commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    <p><a href="#">Learn more</a></p>
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
                            <h2 class="h2 colour-white">Category</h2>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Vestibulum errato isse</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Aisia caisia</a></li>
                                <li><a href="#">Murphy's law</a></li>
                                <li><a href="#">Flimsy Lavenrock</a></li>
                                <li><a href="#">Maven Mousie Lavender</a></li>
                            </ul>
                        </div>
                        <div class="column is-3">
                            <h2 class="h2 colour-white">Category</h2>
                            <ul>
                                <li><a href="#">Labore et dolore magna aliqua</a></li>
                                <li><a href="#">Kanban airis sum eschelor</a></li>
                                <li><a href="#">Modular modern free</a></li>
                                <li><a href="#">The king of clubs</a></li>
                                <li><a href="#">The Discovery Dissipation</a></li>
                                <li><a href="#">Course Correction</a></li>
                                <li><a href="#">Better Angels</a></li>
                            </ul>
                        </div>
                        <div class="column is-4">
                            <h2 class="h2 colour-white">Category</h2>
                            <ul>
                                <li><a href="#">Objects in space</a></li>
                                <li><a href="#">Playing cards with coyote</a></li>
                                <li><a href="#">Goodbye Yellow Brick Road</a></li>
                                <li><a href="#">The Garden of Forking Paths</a></li>
                                <li><a href="#">Future Shock</a></li>
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