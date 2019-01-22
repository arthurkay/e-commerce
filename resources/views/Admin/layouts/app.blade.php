<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 09:34:23 GMT -->
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>VicFirm Admin Panel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link type="image/png" rel="icon" href="{{asset('img/logo.png')}}" />

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{asset('/Admin/css/font-awesome.min.css')}}">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{asset('/Admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/Admin/css/mob.css')}}">
    <link rel="stylesheet" href="{{asset('/Admin/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/Admin/css/materialize.css')}}" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1 white_bg">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="" class="logo"><img src="{{asset('img/logo.png')}}" height="50px" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">e

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <!-- <li><a href="listing-all.html" class="waves-effect"><i class="fa fa-list-ul" aria-hidden="true"></i> Listings</a>
                    </li>
                    <li><a href="hotel-all.html" class="waves-effect"><i class="fa fa-building-o" aria-hidden="true"></i> Hotels</a>
                    </li>
                    <li><a href="package-all.html" class="waves-effect"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                    </li>
                    <li><a href="event-all.html" class="waves-effect"><i class="fa fa-flag-checkered" aria-hidden="true"></i> Events</a>
                    </li>
                    <li><a href="offers.html" class="waves-effect"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                    </li>
                    <li><a href="user-add.html" class="waves-effect"><i class="fa fa-user-plus" aria-hidden="true"></i> Add New User</a>
                    </li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-undo" aria-hidden="true"></i> Backup Data</a>
                    </li> -->
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div   >
    @php
    $msg_count = App\Message::where('status', 'unread')->count();
    @endphp
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="{{asset('img/logo.png')}}" alt="">
                        </li>
                        <li>
                            <h5>{{$user}}</h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <!-- <li><a href="index-2.html" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li> -->
                        <li><a href=""><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                        </li>
                         <li><a href="{{ route('profile')}}"><i class="fa fa-book" aria-hidden="true"></i>Company Profile</a>
                            </li>  
                          <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-briefcase" aria-hidden="true"></i> Products</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{route('newProduct')}}">Create Product</a>
                                      </li>
                                    <li><a href="{{route('viewProducts')}}">View Products</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{route('blog')}}">Create News</a>
                                    </li>
                                    <li><a href="{{route('blogs')}}">View News</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                            <li><a href="{{ route('read_msg')}}"><i class="fa fa-envelope" aria-hidden="true"></i>Messages ({{$msg_count}} unread)</a>
                            </li>   
                            <li><a href="{{ route('settings') }}"><i class="fa fa-cogs" aria-hidden="true"></i>Settings</a>
                            </li>                       
                        <li> <a href="{{ route('logout') }}" class="collapsible-header" 

                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                                        </a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </ul>
                </div>
            </div>
    
</div>
           
                @yield('content')

    <!--== BOTTOM FLOAT ICON ==-->
    <!-- <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section> -->

    <!--======== SCRIPT FILES =========-->
    <script src="{{asset('Admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('Admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Admin/js/materialize.min.js')}}"></script>
    <script src="{{asset('Admin/js/custom.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>


<!--     <script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
 -->
</body>
@yield('script')

<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2017 09:34:48 GMT -->
</html>
