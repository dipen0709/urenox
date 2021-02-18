<?php
$users = Auth::user();
$site_languages = Session::get('site_languages');
$sel_lang_code = Session::get('lang_code');
$default_img = config('constants.NO_IMG');
?>
<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-minimize d-inline">
                <button class="minimize-sidebar btn btn-link btn-just-icon" rel="tooltip" data-original-title="Sidebar toggle" data-placement="right">
                    <i class="tim-icons icon-align-center visible-on-sidebar-regular"></i>
                    <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini"></i>
                </button>
            </div>
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">                
                <li class="dropdown nav-item">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="notification d-none d-lg-block d-xl-block"></div>
                        <i class="tim-icons icon-sound-wave"></i>
                        <p class="d-lg-none">
                            Notifications
                        </p>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                        <li class="nav-link">
                            <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                        </li>
                        <li class="nav-link">
                            <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                        </li>
                        <li class="nav-link">
                            <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                        </li>
                        <li class="nav-link">
                            <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                        </li>
                        <li class="nav-link">
                            <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="photo">
                            <img src="{{ asset('/public/img/'.$default_img) }}" alt="Profile Photo">
                        </div>
                        <b class="caret d-none d-lg-block d-xl-block"></b>
                        <p class="d-lg-none">
                            Log out
                        </p>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar">
                        <li class="nav-link">
                            <a href="{{ route('profile.edit',array("id" => $users->id)) }}" class="nav-item dropdown-item"> {{ trans("common.label_common_profile") }}</a>
                        </li>                        
                        <li class="nav-link">
                            <a href="{{ route('log-out') }}" class="nav-item dropdown-item">{{ trans("common.label_common_logout") }}</a>
                        </li>
                    </ul>
                </li>
                <li class="separator d-lg-none"></li>
            </ul>
        </div>
    </div>
</nav>