<!doctype html>
<html lang="en">

<head>
    <title>@yield('title') | NEAT CO LTD Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/chartist/css/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/owlcarousel/owl.theme.default.min.css') }}">

    @yield('header-style')

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/img/favicon.png') }}">
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('admin/img/logo-dark.png') }}" alt="Klorofil Logo" class="img-responsive logo"></a>
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
            </div>
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('admin.user-profile') }}"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                            <li><a href="{{ route('admin.settings') }}"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                            <li><a href="{{ route('admin.logout') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li><a href="{{ route('admin.dashboard') }}" class="{{ Request::is('root/dashboard*') ? "active" : "" }}">
                            <i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

                    <li><a href="{{ route('admin.vehicles.create') }}" class="{{ Request::is('root/vehicles/*') ? "active" : "" }}">
                            <i class="lnr lnr-car"></i>Upload New Vehicle</a></li>

                    <li><a href="{{ route('admin.vehicles.index') }}" class="{{ Request::is('root/vehicles') ? "active" : "" }}">
                            <i class="lnr lnr-car"></i>View All Vehicles</a></li>

                    <li><a href="{{ route('admin.contact.index') }}" class="{{ Request::is('root/vehicle-contact*') ? "active" : "" }}">
                            <i class="lnr lnr-inbox"></i> <span>Vehicle Contacts</span></a></li>

                    <li><a href="{{ route('admin.brands.index') }}" class="{{ Request::is('root/brands*') ? "active" : "" }}">
                            <i class="lnr lnr-tag"></i> <span>Car Brands</span></a></li>

                    <li><a href="{{ route('admin.car-features') }}" class="{{ Request::is('root/car-feature*') ? "active" : "" }}">
                            <i class="lnr lnr-layers"></i> <span>Car Features</span></a></li>

                    <li><a href="{{ route('admin.fuel-types') }}" class="{{ Request::is('root/fuel-types*') ? "active" : "" }}">
                            <i class="lnr lnr-list"></i> <span>Fuel Types</span></a></li>

                    <li><a href="{{ route('admin.user-profile') }}" class="{{ Request::is('root/user-profile*') ? "active" : "" }}">
                            <i class="lnr lnr-user"></i> <span>My Profile</span></a></li>

                    <li><a href="{{ route('admin.settings') }}" class="{{ Request::is('root/settings*') ? "active" : "" }}">
                            <i class="lnr lnr-cog"></i> <span>Settings</span></a></li>

                    <li><a href="{{ route('admin.logout') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>

                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                @include('layouts.alert-block')
                @yield('content')
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
        <div class="container-fluid">
            <p class="copyright">&copy; 2019 <a href="{{ route('admin.dashboard') }}">NEAT CO LTD - Administrator</a>. All Rights Reserved.</p>
        </div>
    </footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('admin/vendor/chartist/js/chartist.min.js') }}"></script>
<script src="{{ asset('admin/scripts/klorofil-common.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
<script>
    $(function() {
        var data, options;

        // headline charts
        data = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
                [23, 29, 24, 40, 25, 24, 35],
                [14, 25, 18, 34, 29, 38, 44],
            ]
        };

        options = {
            height: 300,
            showArea: true,
            showLine: false,
            showPoint: false,
            fullWidth: true,
            axisX: {
                showGrid: false
            },
            lineSmooth: false,
        };

        new Chartist.Line('#headline-chart', data, options);


        // visits trend charts
        data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            series: [{
                name: 'series-real',
                data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
            }, {
                name: 'series-projection',
                data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
            }]
        };

        options = {
            fullWidth: true,
            lineSmooth: false,
            height: "270px",
            low: 0,
            high: 'auto',
            series: {
                'series-projection': {
                    showArea: true,
                    showPoint: false,
                    showLine: false
                },
            },
            axisX: {
                showGrid: false,

            },
            axisY: {
                showGrid: false,
                onlyInteger: true,
                offset: 0,
            },
            chartPadding: {
                left: 20,
                right: 20
            }
        };

        new Chartist.Line('#visits-trends-chart', data, options);


        // visits chart
        data = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
                [6384, 6342, 5437, 2764, 3958, 5068, 7654]
            ]
        };

        options = {
            height: 300,
            axisX: {
                showGrid: false
            },
        };

        new Chartist.Bar('#visits-chart', data, options);


        // real-time pie chart
        var sysLoad = $('#system-load').easyPieChart({
            size: 130,
            barColor: function(percent) {
                return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
            },
            trackColor: 'rgba(245, 245, 245, 0.8)',
            scaleColor: false,
            lineWidth: 5,
            lineCap: "square",
            animate: 800
        });

        var updateInterval = 3000; // in milliseconds

        setInterval(function() {
            var randomVal;
            randomVal = getRandomInt(0, 100);

            sysLoad.data('easyPieChart').update(randomVal);
            sysLoad.find('.percent').text(randomVal);
        }, updateInterval);

        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

    });
</script>
<script src="{{ asset('admin/vendor/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            items: 1,
            autoplay:true,
            autoplayTimeout:3500,
            autoplaySpeed:1500,
            autoplayHoverPause:true,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
    });
</script>
@yield('footer_script')
</body>

</html>
