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
                    <li><a>Your Info</a></li>
                    <li class="is-active"><a aria-current="page">View Your Info</a></li>
                </ul>
            </nav>
            <div class="columns">
                <div class="column is-12">

                    <!-- section specific content start  -->

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">View Your Info</p>
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
                                            <p>Your phone number:</p>
                                            <p>2262247547</p>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <div class="field">
                                            <p>You are using this account:</p>
                                            <p>for private purposes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <p>Your address:</p>
                                            <p>122 St George St.</p>
                                        </div>
                                        <div class="field">
                                            <p>Your city:</p>
                                            <p>London, ON</p>
                                        </div>
                                        <div class="field">
                                            <p>Your postal code:</p>
                                            <p>N6A2A2</p>
                                        </div>
                                        <a href="/subscriber-edit/{{Auth::user()->id}}" class="button is-primary colour-white btn-primary">
                                            <span class="icon">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span>Edit</span>
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