<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{ \App\Models\Setting::find(1)->favicon ? asset("storage/".\App\Models\Setting::find(1)->favicon) : ""; }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">    
    @yield('styles')
    <title>@yield('title', "Admin Panel | Learn Quran Online")</title>
</head>
<body>
    
    @php $adminPanel = true @endphp

    @include('dashboard.partials.upper-nav')

    <div class="row main-row" style="min-height: calc(100vh - 75px)">
        <div class="col-md-3">
            <aside class="main-sidebar px-4">

                <div class="row">
                    <div class="col-md-12 col-10">
                        <div class="avatar m-auto py-4 ">
                            <div class="img float-left pr-3">
                                <img src="{{ asset('imgs/avatar-default.png') }}" alt="">
                            </div>
                            <div class="user">
                                <div class="name">
                                    {{ "@".strtolower(str_replace(' ', "", auth()->user()->fullName )) }}    
                                </div>
                                <div class="admin d-block">Administrator</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 d-md-none">
                        <div class="side-nav-toggler">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
        
                <nav class="side-nav pt-3">
                    <ul>
                        <li class="{{ Request::routeIs('admin.dashboard')  ? "active" : "" }}">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-chart-line"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('admin.users') ? "active" : "" }}"> 
                            <a href="{{ route('admin.users') }}">
                                <i class="fas fa-users"></i>
                                Users
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('admin.groups') ? "active" : "" }}"> 
                            <a href="{{ route('admin.groups') }}">
                                <i class="fas fa-cube"></i>
                                Groups 
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('admin.subscriptions') ? "active" : "" }}">
                            <a href="{{ route('admin.subscriptions') }}">
                                <i class="fas fa-share"></i>
                                Subscriptions
                            </a>
                        </li>
                        <li class="{{ Request::routeIs('admin.settings') ? "active" : "" }}">
                            <a href="{{ route('admin.settings') }}">
                                <i class="fas fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                </nav>

            </aside>
        </div>


        <div class="col-md-9 px-4">
            @yield('content')
        </div>

    </div>

    @yield('scripts')
</body>
</html>