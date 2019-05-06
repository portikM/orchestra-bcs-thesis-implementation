@extends('layouts.app')

@section('title', 'Your System')

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
                    <li><a href="{{ url('/admin') }}">@lang('auth.nav_dashboard')</a></li>
                    <li class="is-active"><a aria-current="page">@lang('content/admin/admin-aside-nav.cat_subscribers_list')</a></li>
                </ul>
            </nav>
            <div class="columns">
                <div class="column is-12">

                    <!-- section specific content start  -->

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">@lang('content/admin/admin-aside-nav.cat_subscribers_list')</p>
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
                                                <a href="/subscriber-edit/{{ $subscriber->id }}" class="subscriber-access-icon">
                                                    <i class="fas fa-edit"></i>
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
                    </div>

                    <!-- section specific content end -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection