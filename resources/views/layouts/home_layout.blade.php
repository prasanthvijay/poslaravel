<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Dashboard</title>
    <style>
        #loader {
            transition: all .3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000
        }
        
        #loader.fadeOut {
            opacity: 0;
            visibility: hidden
        }
        
        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out
        }
        
        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                opacity: 0
            }
        }
        
        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body class="app">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <script type="text/javascript">
        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.classList.add('fadeOut');
            }, 300);
        });
    </script>
    <div>
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-logo">
                    <div class="peers ai-c fxw-nw">
                        <div class="peer peer-greed">
                            <a class="sidebar-link td-n" href="index-2.html" class="td-n">
                                <div class="peers ai-c fxw-nw">
                                    <div class="peer">
                                        <div class="logo"><img src="assets/static/images/logo.png" alt=""></div>
                                    </div>
                                    <div class="peer peer-greed">
                                        <h5 class="lh-1 mB-0 logo-text">pos</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="peer">
                            <div class="mobile-toggle sidebar-toggle"><a href="#" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                        </div>
                    </div>
                </div>
                <ul class="sidebar-menu scrollable pos-r">
                    <li class="nav-item mT-30 active"><a class="sidebar-link" href="index-2.html" default><span class="icon-holder"><i
                  class="c-blue-500 ti-home"></i> </span><span class="title">Dashboard</span></a></li>
                    <!-- <li class="nav-item"><a class="sidebar-link" href="email.html"><span class="icon-holder"><i class="c-brown-500 ti-email"></i>
              </span><span class="title">Email</span></a></li>
                    <li class="nav-item"><a class="sidebar-link" href="compose.html"><span class="icon-holder"><i class="c-blue-500 ti-share"></i>
              </span><span class="title">Compose</span></a></li>
                    <li class="nav-item"><a class="sidebar-link" href="calendar.html"><span class="icon-holder"><i class="c-deep-orange-500 ti-calendar"></i>
              </span><span class="title">Calendar</span></a></li>
                    <li class="nav-item"><a class="sidebar-link" href="chat.html"><span class="icon-holder"><i class="c-deep-purple-500 ti-comment-alt"></i>
              </span><span class="title">Chat</span></a></li>
                    <li class="nav-item"><a class="sidebar-link" href="charts.html"><span class="icon-holder"><i class="c-indigo-500 ti-bar-chart"></i>
              </span><span class="title">Charts</span></a></li>
                    <li class="nav-item"><a class="sidebar-link" href="forms.html"><span class="icon-holder"><i class="c-light-blue-500 ti-pencil"></i>
              </span><span class="title">Forms</span></a></li>
                    <li class="nav-item dropdown"><a class="sidebar-link" href="ui.html"><span class="icon-holder"><i class="c-pink-500 ti-palette"></i>
              </span><span class="title">UI Elements</span></a></li> -->
                    <li class="nav-item"><a class="sidebar-link" href="customer"><span class="icon-holder"><i class="c-light-blue-500 ti-pencil"></i>
                    </span><span class="title">Customer</span></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i
                  class="c-orange-500 ti-layout-list-thumb"></i> </span><span class="title">Customer</span> <span class="arrow"><i
                  class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="sidebar-link" href="basic-table.html">Basic Table</a></li>
                            <li><a class="sidebar-link" href="datatable.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i
                  class="c-purple-500 ti-map"></i> </span><span class="title">Maps</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="google-maps.html">Google Map</a></li>
                            <li><a href="vector-maps.html">Vector Map</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i
                  class="c-red-500 ti-files"></i> </span><span class="title">Pages</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="sidebar-link" href="404.html">404</a></li>
                            <li><a class="sidebar-link" href="500.html">500</a></li>
                            <li><a class="sidebar-link" href="signin.html">Sign In</a></li>
                            <li><a class="sidebar-link" href="signup.html">Sign Up</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span class="icon-holder"><i
                  class="c-teal-500 ti-view-list-alt"></i> </span><span class="title">Multiple Levels</span> <span
                class="arrow"><i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown"><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                            <li class="nav-item dropdown"><a href="javascript:void(0);"><span>Menu Item</span> <span class="arrow"><i
                      class="ti-angle-right"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Menu Item</a></li>
                                    <li><a href="javascript:void(0);">Menu Item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-container">
            <div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
                        <li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i>
                <i class="search-icon-close ti-close pdd-right-10"></i></a></li>
                        <li class="search-input">
                            <input class="form-control" type="text" placeholder="Search...">
                        </li>
                    </ul>
                    <ul class="nav-right">
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                <div class="peer mR-10"><img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/10.jpg" alt=""></div>
                                <div class="peer"><span class="fsz-sm c-grey-900"> {{ Auth::user()->name }}</span></div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                                <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                                <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li>
                                <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li>
                                <li role="separator" class="divider"></li>
                                <li>

                                 <a class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                             <i class="ti-power-off mR-10"></i> <span>Logout</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                   
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('content')

            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2017 Designed by <a href="https://colorlib.com/"
            target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];

                    function gtag() {
                        dataLayer.push(arguments);
                    }
                    gtag('js', new Date());

                    gtag('config', 'UA-23581568-13');
                </script>
            </footer>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>
</body>

</html>