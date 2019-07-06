<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>XL Asset Manager | </title>
    <!-- ================== GOOGLE FONTS ==================-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
    <!-- ======================= GLOBAL VENDOR STYLES ========================-->
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/metismenu/dist/metisMenu.css')}}">
    {{--<link rel="stylesheet" href="{{asset('vendor/switchery-npm/index.css')}}">--}}
    <link rel="stylesheet" href="{{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- ======================= LINE AWESOME ICONS ===========================-->
{{--<link rel="stylesheet" href="{{asset('css/icons/line-awesome.min.css')}}">--}}
{{--<link rel="stylesheet" href="{{asset('css/icons/simple-line-icons.css')}}">--}}
<!-- ======================= DRIP ICONS ===================================-->

    <!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->

    <!-- ======================= PAGE VENDOR STYLES ===========================-->
    <link rel="stylesheet" href="{{asset('vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- ======================= GLOBAL COMMON STYLES ============================-->
    <link rel="stylesheet" href="{{asset('css/common/main.bundle.css')}}">
    <!-- ======================= LAYOUT TYPE ===========================-->
    <link rel="stylesheet" href="{{asset('css/layouts/vertical/core/main.css')}}">
    <!-- ======================= MENU TYPE ===========================-->
    <link rel="stylesheet" href="{{asset('css/layouts/vertical/menu-type/content.css')}}">
    <!-- ======================= THEME COLOR STYLES ===========================-->
    <link rel="stylesheet" href="{{asset('css/layouts/vertical/themes/theme-i.css')}}">


<body class="content-menu">
<!-- CONTENT WRAPPER -->
<div id="app">
    <nav class="top-toolbar navbar navbar-mobile navbar-tablet">
        <ul class="navbar-nav nav-left">
            <li class="nav-item">
                <a href="javascript:void(0)" data-toggle-state="aside-left-open">
                    {{--<i class="icon dripicons-align-left"></i>--}}
                    <i class="material-icons">menu</i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav nav-center site-logo">
            <li>
                <a href="">
                    <div class="logo_mobile">
                        <p style="color: white">Test</p>
                        {{--<svg id="logo_mobile" width="30" height="30" viewBox="0 0 54.03 56.55">
                            <defs>
                                <linearGradient id="logo_background_mobile_color">
                                    <stop class="stop1" offset="0%"/>
                                    <stop class="stop2" offset="50%"/>
                                    <stop class="stop3" offset="100%"/>
                                </linearGradient>
                            </defs>
                            <path id="logo_path_mobile" class="cls-2" d="M90.32,0c14.2-.28,22.78,7.91,26.56,18.24a39.17,39.17,0,0,1,1,4.17l.13,1.5A15.25,15.25,0,0,1,118.1,29v.72l-.51,3.13a30.47,30.47,0,0,1-3.33,8,15.29,15.29,0,0,1-2.5,3.52l.06.07c.57.88,1.43,1.58,2,2.41,1.1,1.49,2.36,2.81,3.46,4.3.41.55,1,1,1.41,1.56.68.92,1.16,1.89.32,3.06-.08.12-.08.24-.19.33a2.39,2.39,0,0,1-2.62.07,4.09,4.09,0,0,1-.7-.91c-.63-.85-1.41-1.61-2-2.48-1-1.42-2.33-2.67-3.39-4.1a16.77,16.77,0,0,1-1.15-1.37c-.11,0-.06,0-.13.07-.41.14-.65.55-1,.78-.72.54-1.49,1.08-2.24,1.56A29.5,29.5,0,0,1,97.81,53c-.83.24-1.6.18-2.5.39a16.68,16.68,0,0,1-3.65.26H90.58L88,53.36A36.87,36.87,0,0,1,82.71,52a27.15,27.15,0,0,1-15.1-14.66c-.47-1.1-.7-2.17-1.09-3.39-1-3-1.45-8.86-.51-12.38a29,29,0,0,1,2.56-7.36c3.56-6,7.41-9.77,14.08-12.57a34.92,34.92,0,0,1,4.8-1.3Zm.13,4.1c-.45.27-1.66.11-2.24.26a32.65,32.65,0,0,0-4.74,1.37A23,23,0,0,0,71,18.7,24,24,0,0,0,71.13,35c2.78,6.66,7.2,11.06,14.21,13.42,1.16.39,2.52.59,3.84.91l1.47.07a7.08,7.08,0,0,0,2.43,0H94c.89-.21,1.9-.28,2.75-.46V48.8A7.6,7.6,0,0,1,95.19,47c-.78-1-1.83-1.92-2.62-3s-1.86-1.84-2.62-2.87c-2-2.7-4.45-5.1-6.66-7.62-.57-.66-1.14-1.32-1.66-2-.22-.29-.59-.51-.77-.85a2.26,2.26,0,0,1,.58-2.61,2.39,2.39,0,0,1,2.24-.2,4.7,4.7,0,0,1,1.22,1.3l.51.46c.5.68,1,1.32,1.6,2,2.07,2.37,4.38,4.62,6.27,7.17.94,1.26,2.19,2.3,3.14,3.58l1,1c.82,1.1,1.8,2,2.62,3.13.26.35.65.6.9,1A23.06,23.06,0,0,0,105,45c.37-.27,1-.51,1.15-1h-.06c-.18-.51-.73-.83-1-1.24-.74-1-1.64-1.88-2.37-2.87-1.8-2.44-3.89-4.6-5.7-7-.61-.82-1.44-1.52-2-2.34-.85-1.16-3.82-3.73-1.54-5.41a2.27,2.27,0,0,1,1.86-.26c.9.37,2.33,2.43,2.94,3.26s1.27,1.31,1.79,2c1.44,1.95,3.11,3.66,4.54,5.6.41.55,1,1,1.41,1.56.66.89,1.46,1.66,2.11,2.54.29.39.61,1.06,1.09,1.24.54-1,1.34-1.84,1.92-2.8a25.69,25.69,0,0,0,2.5-6.32c1.27-4.51.32-10.37-1.15-13.81A22.48,22.48,0,0,0,100.75,5.94a35.12,35.12,0,0,0-6.08-1.69A20.59,20.59,0,0,0,90.45,4.11Z" transform="translate(-65.5)" fill="url(#logo_background_mobile_color)"/>
                        </svg>--}}
                    </div>
                    {{--<h1 class="brand-text">XL Asset Manager</h1>--}}
                </a>
            </li>
        </ul>
        <ul class="navbar-nav nav-right">
            <li class="nav-item">
                <a href="javascript:void(0)" data-toggle-state="mobile-topbar-toggle">
                    <i class="material-icons rotate-90">menu</i>
                </a>
            </li>
        </ul>
    </nav>
    <nav class="top-toolbar navbar navbar-desktop flex-nowrap">
        <ul class="navbar-nav nav-left">
            <li class="nav-item">
                <a href="javascript:void(0)" data-toggle-state="content-menu-close">
                    <i class="material-icons">format_align_left</i>
                    {{--<i class="icon dripicons-align-left"></i>--}}
                </a>
            </li>
            <li class="nav-item nav-text dropdown dropdown-menu-md">
                <a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span>
							Dropdown
						</span>
                    <i class="material-icons menu-arrow-down">expand_more</i>
                </a>
                <div class="dropdown-menu menu-icons dropdown-menu-left">
                    <div class="form-group form-filter">
                        <input type="text" placeholder="Filter location..." class="form-control filter-input" data-search-trigger="open">
                        <i data-q-action="clear-filter" class="icon dripicons-cross clear-filter"></i>
                        <ul class="list-reset filter-list" data-scroll="minimal-dark">
                            <li><a class="dropdown-item" href="#">Search</a></li>
                        </ul>
                    </div>
                </div>
            </li>

        </ul>
        <ul class="site-logo">
            <li>
                <!-- START LOGO -->
                <a href="index-2.html">
                    <div class="logo">
                        {{--<svg id="logo" width="25" height="25" viewBox="0 0 54.03 56.55">
                            <defs>
                                <linearGradient id="logo_background_color">
                                    <stop class="stop1" offset="30%"/>
                                    <stop class="stop2" offset="80%"/>
                                    <stop class="stop3" offset="100%"/>
                                </linearGradient>
                            </defs>
                            <path id="logo_path" class="cls-2" d="M90.32,0c14.2-.28,22.78,7.91,26.56,18.24a39.17,39.17,0,0,1,1,4.17l.13,1.5A15.25,15.25,0,0,1,118.1,29v.72l-.51,3.13a30.47,30.47,0,0,1-3.33,8,15.29,15.29,0,0,1-2.5,3.52l.06.07c.57.88,1.43,1.58,2,2.41,1.1,1.49,2.36,2.81,3.46,4.3.41.55,1,1,1.41,1.56.68.92,1.16,1.89.32,3.06-.08.12-.08.24-.19.33a2.39,2.39,0,0,1-2.62.07,4.09,4.09,0,0,1-.7-.91c-.63-.85-1.41-1.61-2-2.48-1-1.42-2.33-2.67-3.39-4.1a16.77,16.77,0,0,1-1.15-1.37c-.11,0-.06,0-.13.07-.41.14-.65.55-1,.78-.72.54-1.49,1.08-2.24,1.56A29.5,29.5,0,0,1,97.81,53c-.83.24-1.6.18-2.5.39a16.68,16.68,0,0,1-3.65.26H90.58L88,53.36A36.87,36.87,0,0,1,82.71,52a27.15,27.15,0,0,1-15.1-14.66c-.47-1.1-.7-2.17-1.09-3.39-1-3-1.45-8.86-.51-12.38a29,29,0,0,1,2.56-7.36c3.56-6,7.41-9.77,14.08-12.57a34.92,34.92,0,0,1,4.8-1.3Zm.13,4.1c-.45.27-1.66.11-2.24.26a32.65,32.65,0,0,0-4.74,1.37A23,23,0,0,0,71,18.7,24,24,0,0,0,71.13,35c2.78,6.66,7.2,11.06,14.21,13.42,1.16.39,2.52.59,3.84.91l1.47.07a7.08,7.08,0,0,0,2.43,0H94c.89-.21,1.9-.28,2.75-.46V48.8A7.6,7.6,0,0,1,95.19,47c-.78-1-1.83-1.92-2.62-3s-1.86-1.84-2.62-2.87c-2-2.7-4.45-5.1-6.66-7.62-.57-.66-1.14-1.32-1.66-2-.22-.29-.59-.51-.77-.85a2.26,2.26,0,0,1,.58-2.61,2.39,2.39,0,0,1,2.24-.2,4.7,4.7,0,0,1,1.22,1.3l.51.46c.5.68,1,1.32,1.6,2,2.07,2.37,4.38,4.62,6.27,7.17.94,1.26,2.19,2.3,3.14,3.58l1,1c.82,1.1,1.8,2,2.62,3.13.26.35.65.6.9,1A23.06,23.06,0,0,0,105,45c.37-.27,1-.51,1.15-1h-.06c-.18-.51-.73-.83-1-1.24-.74-1-1.64-1.88-2.37-2.87-1.8-2.44-3.89-4.6-5.7-7-.61-.82-1.44-1.52-2-2.34-.85-1.16-3.82-3.73-1.54-5.41a2.27,2.27,0,0,1,1.86-.26c.9.37,2.33,2.43,2.94,3.26s1.27,1.31,1.79,2c1.44,1.95,3.11,3.66,4.54,5.6.41.55,1,1,1.41,1.56.66.89,1.46,1.66,2.11,2.54.29.39.61,1.06,1.09,1.24.54-1,1.34-1.84,1.92-2.8a25.69,25.69,0,0,0,2.5-6.32c1.27-4.51.32-10.37-1.15-13.81A22.48,22.48,0,0,0,100.75,5.94a35.12,35.12,0,0,0-6.08-1.69A20.59,20.59,0,0,0,90.45,4.11Z" transform="translate(-65.5)" fill="url(#logo_background_color)"/>
                        </svg>--}}
                    </div>
                    <h1 class="brand-text">Test</h1>
                </a>
                <!-- END LOGO -->
            </li>
        </ul>
        <ul class="navbar-nav nav-right">
            {{--<li class="nav-item">
                <a href="javascript:void(0)" class="open-search-button" data-q-action="open-site-search">
                    <i class="icon dripicons-search"></i>
                </a>
            </li>--}}


            <li class="nav-item dropdown">
                <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('img/avatars/geek.png')}}" class="w-35 rounded-circle" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                    <div class="dropdown-header pb-3">
                        <div class="media d-user">
                            <img class="align-self-center mr-3 w-40 rounded-circle" src="" alt="">
                            {{--<img class="align-self-center mr-3 w-40 rounded-circle" src="../assets/img/avatars/1.jpg" alt="">--}}
                            <div class="media-body">
                                <h5 class="mt-0 mb-0"></h5>
                                <span>@if(Auth::check()){{Auth::user()->email}} @endif</span>
                            </div>
                        </div>
                    </div>

                    <a class="dropdown-item" href=""><i class="material-icons">person</i> Profile</a>
                    <a class="dropdown-item" href=""><i class="material-icons">settings</i> Account Settings </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href=""><i class="material-icons">power_settings_new</i> Sign Out</a>
                </div>
            </li>
        </ul>
        {{--<form role="search" action="http://www.authenticgoods.co/themes/quantum-pro/demos/demo7/pages.search.html" class="navbar-form">
            <div class="form-group">
                <input type="text" placeholder="Search and press enter..." class="form-control navbar-search" autocomplete="off">
                <i class="material-icons">search</i>
                --}}{{--<i data-q-action="close-site-search" class="icon dripicons-cross close-search"></i>--}}{{--
            </div>
            <button type="submit" class="d-none">Submit</button>
        </form>--}}
    </nav>
    <!-- END TOP TOOLBAR WRAPPER -->
    <div class="content-wrapper">
        <!-- MENU SIDEBAR WRAPPER -->

    <!-- END MENU SIDEBAR WRAPPER -->
        <div class="content container-fluid">
            <!--START PAGE HEADER -->
            <header class="page-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h1>Dashboard</h1>
                    </div>
                    <ul class="actions top-right">
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-icon-menu dropdown-menu-right">
                                <div class="dropdown-header">
                                    Quick Actions
                                </div>
                                <a href="" class="dropdown-item">
                                    <i class="material-icons">refresh</i> Refresh
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
<section>
    <div class="row">
        <div class="col-12">
            <div id="msg"></div>
            <div class="card">
                <div class="row m-0 col-border-xl">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="card-body">
                            <div class="icon-rounded icon-rounded-primary float-left m-r-20">
                                <i class="material-icons">sync</i>
                            </div>
                            <h5 class="card-title m-b-5 counter" data-count=""></h5>
                            <h6 class="text-muted m-t-10">
                                Total users
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="card-body">
                            <div class="icon-rounded icon-rounded-accent float-left m-r-20">
                                <i class="material-icons">money</i>
                            </div>
                            <h5 class="card-title m-b-5 counter" data-count="">0 </h5><small></small>
                            <h6 class="text-muted m-t-10">
                                Total news
                            </h6>
                        </div>
                    </div>
                <div><p id="logout" style="color: blue; cursor: pointer; float: right; font-size: 30px;">Logout</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">Recently created
                    <ul class="actions top-right">
                        <li><a href="javascript:void(0)" data-q-action="card-expand"><i class="icon dripicons-expand-2"></i></a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" data-target="#exampleModal" data-toggle="modal">Add News</button>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>News Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                             @foreach($news as $story)
                                <tr>
                                    <td>{{$story->title}}</td>
                                    <td>
                                        <button class="btn btn-info" data-view="{{$story->id}}" id="view">View</button>
                                        <button class="btn btn-danger" data-del="{{$story->id}}" id="del">Delete</button>
                                    </td>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <button id="getNews" style="cursor: pointer">See all news from api</button>
                </div>
            </div>
        </div>

        {{--edit modal--}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add news</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form id="editAsset" enctype="multipart/form-data">
                        <div class="modal-body">

                            <input type="hidden" class="form-control" id="theId" name="theId">
                            <div class="form-group">
                                <label  class="form-control-label">Title</label>
                                <input type="text" class="form-control" id="iname" name="title">
                            </div>

                            {{--<div class="form-group">
                                <label  class="form-control-label">Subsidiary</label>
                                <select class="form-control" id="sub" name="sub">
                                    <option selected disabled>Select subsidiary</option>

                                </select>
                            </div>--}}

                            <div class="form-group" id="itemComment">
                                <label>News Details</label>
                                <textarea class="form-control" name="details" rows="5"></textarea>
                            </div>
                            <div class="form-group" id="takeExtra">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="submitAdd">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{--message--}}
        <div class="modal fade small-modal" tabindex="-1" role="dialog" id="successmsg" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mySmallModalLabel">News</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>

                    </div>
                    <div class="modal-body" id="showmsg">

                    </div>
                    <div class="modal-footer">
                        {{--<button type="button" class="btn btn-primary">OK</button>--}}
                        <button type="button" class="btn btn-info" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>
        {{--confirm delete--}}
        <div class="modal fade small-modal" tabindex="-1" role="dialog" id="confirmDelete" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mySmallModalLabel">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="takeDeleteDetails">
                        <input type="hidden" id="getId">
                        Are you sure you want to delete this asset:
                        <strong><i id="tquest"></i> ?</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="del">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade small-modal" tabindex="-1" role="dialog" id="viewTag" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="mySmallModalLabel">Tag</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="takeTagDetails">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info printsingle">Print</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade small-modal" tabindex="-1" role="dialog" id="displayComment" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="mySmallModalLabel">Item Comment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="takeTheComment">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{--<button type="button" class="btn btn-info printsingle">Print</button>--}}
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

        </div></div></div>
<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/js-storage/js.storage.js')}}"></script>
<script src="{{asset('vendor/js-cookie/src/js.cookie.js')}}"></script>
<script>
    $(document).on('click', '#submitAdd', function(e){
        e.preventDefault();
        let title = $('input[name=title]').val();
        let details = $('textarea[name=details]').val();
        let dataToSend = {title: title, details: details, token: localStorage.getItem('token')}
        console.log(dataToSend);
        $.post('{{url('/')}}/api/add', dataToSend, function (resp) {
            console.log(resp);
            if(resp.data){
                alert('Hurray! You created a news story');
                $('input[name=title]').val('');
                $('textarea[name=details]').val('');
                $('#exampleModal').modal('toggle');
                location.reload();
            }else if(resp.errors){
                alert('Oops, news could not be added, try again');
            }
        });
    });

    $(document).on('click', '#getNews', function(){
        alert();
        $.get('{{url('/')}}/api/allnews?token='+localStorage.getItem('token'), function (resp) {
            console.log(resp);
            if(resp.status == "success"){
                alert('Fetched');
                $('#showmsg').empty();
                $('#showmsg').append('<b>JSON Result:</b><br><p>'+JSON.stringify(resp.news)+'</p>');
                $('#successmsg').modal('toggle');
            }else if(resp.status == "error"){
                alert('Oops, news could not be fetched, try again');
            }else if(resp.status == "Token is Expired"){
                alert('log in again');
                location.href= "{{url('/')}}";
            }
        });
    });

    $(document).on('click', '#view', function(){
        let id = $(this).data('view');
        $.get('{{url('/')}}/api/getSingleNews/'+id+'?token='+localStorage.getItem('token'), function (resp) {
            console.log(resp);
            if(resp.status == "success"){
                $('#showmsg').empty();
                $('#showmsg').append('<p><b>'+resp.news.title+'</b></p><p>'+resp.news.details+'</p><p>Author: '+resp.news.realauthor+'</p>');
                $('#successmsg').modal('toggle');
            }else if(resp.status == "error"){
                alert('Oops, news could not be fetched, try again');
            }else if(resp.status == "Token is Expired"){
                location.href= "{{url('/')}}";
            }
        });
    });

    $(document).on('click', '#del', function(){
        let id = $(this).data('del');
        $.get('{{url('/')}}/api/removeNews/'+id+'?token='+localStorage.getItem('token'), function (resp) {
            console.log(resp);
            if(resp.status == "Deleted"){
                $('#showmsg').empty();
                $('#showmsg').append('<p>Deleted Successfully</p>');
                $('#successmsg').modal('toggle');
                location.reload();
            }else if(resp.status == "error"){
                alert('Oopss, try again');
            }else if(resp.status == "Token is Expired"){
                location.href= "{{url('/')}}";
            }
        });
    });

    $(document).on('click', '#logout', function(){
        //let id = $(this).data('del');
        $.post('{{url('/')}}/api/logout', {token:localStorage.getItem('token')}, function (resp) {
            console.log(resp);
            if(resp.status == "success"){
                alert('You are Logged out');
                location.href= "{{url('/')}}";
            }else if(resp.status == "error"){
                alert('Oopss, try again');
            }else if(resp.status == "Token is Expired"){
                location.href= "{{url('/')}}";
            }
        });
    });
</script>

    </body>



</html>
