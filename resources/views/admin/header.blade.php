<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>codesavvynest - Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('frontend/img/favicon-32x32-1.png') }}" type="image/x-icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon-32x32.png')}}" rel="icon">

    <!-- Fonts and icons -->
    <script src="{{ asset('admin/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('admin/css/fonts.min.css') }}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/kaiadmin.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        #editor {
            max-height: 550px !important;
        }

        .notify {
            z-index: 9999;
            /* Higher value ensures it appears on top */
            position: fixed;
            top: 20px;
            right: 20px;
            /* Other existing styles */
        }
    
    </style>
    @notifyCss
</head>

<body>
    <div class="wrapper">   
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header align-items-center" data-background-color="dark">
                    <a href="{{ url('codesavvy-admin') }}" class="logo">
                        <p class="text-white">CodeSavvyNest</p>
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item active">
                            <a href="{{ url('/codesavvy-admin/dashboard') }}" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('codesavvy-admin/home') }}">
                                <i class="fas fa-layer-group"></i>
                                <p>Home</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('codesavvy-admin/about') }}">
                                <i class="fas fa-address-book" aria-hidden="true"></i>
                                <p>About</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('codesavvy-admin/services') }}">
                                <i class="fas fa-cogs"></i>
                                <p>Services</p>
                            </a>

                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#charts">
                                <i class="far fa-chart-bar"></i>
                                <p>CMS</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="charts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ url('codesavvy-admin/banner') }}">
                                            <span class="sub-item">Banner</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('codesavvy-admin/map') }}">
                                            <span class="sub-item">Map</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('codesavvy-admin/social') }}">
                                            <span class="sub-item">Social</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('codesavvy-admin/view_faq') }}">
                                            <span class="sub-item">FAQ's</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('codesavvy-admin/view-why') }}">
                                            <span class="sub-item">Why Choose Us</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{url('codesavvy-admin/offer')}}">
                                            <span class="sub-item">Services We Offer</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('codesavvy-admin/querys') }}">
                                <i class="fas fa-solid fa-user-secret"></i>
                                <p>Querys</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('codesavvy-admin/testimonials') }}">
                                <i class="fas fa-solid fa-user-tie"></i>
                                <p>Testimonials</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/codesavvy-admin/refund-policy') }}">
                                <i class="fa-solid fa-bookmark"></i>
                                <p>Refund Policy</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('codesavvy-admin/terms-and-conditions') }}">
                                <i class="fas fa-desktop"></i>
                                <p>Terms & Conditions</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="{{ url('codesavvy/codesavvy-admin') }}" class="logo">
                            <img src="{{ asset('admin/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>
                            <!-- <li class="nav-item topbar-icon dropdown hidden-caret">
                                <a href="https://mail.google.com/mail/u/1/?ogbl#inbox">
                                    <i class="fa fa-envelope"></i>
                                </a>
                               
                            </li> -->
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <span class="profile-username">
                                        <span class="op-7">Hello,</span>
                                        <span class="fw-bold">{{ Auth::user()->name }}</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="u-text">
                                                    <h4>{{ Auth::user()->name }}</h4>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="profile">My Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <form method="POST" action="{{ route('admin.logout') }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger ms-5">Logout</button>
                                            </form>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>