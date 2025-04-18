<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Parcel Picker') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Mix Scripts and Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}" >
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet"  href="{{ asset('theme/css/ready.css') }}">
	<link rel="stylesheet" href="{{asset('theme/css/demo.css')}}">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Scripts -->
</head>
<body>
    <div id="app">
        
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.html" class="logo">
					Parcel Picker
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="{{ asset('img/profile.jpg')}}" alt="user-img" width="36" class="img-circle"><span >{{ Auth::user()->name }}</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="{{ asset('img/profile.jpg')}}" alt="user"></div>
										<div class="u-text">											
											<h4> {{ Auth::user()->name }}</h4>
											<p class="text-muted">{{ Auth::user()->email }}</p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                       <i class="fa fa-power-off"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>								
									
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="{{ asset('img/profile.jpg')}}">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									 {{ Auth::user()->name }}
									<span class="user-level">{{ Auth::user()->role }}</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="#">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>								
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="la la-table"></i>
								<p>Pick Form</p>								
							</a>
						</li>
												
					</ul>
				</div>
			</div>
			<div class="main-panel">
                <main class="py-4">
                    @yield('content')
                </main>				
				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul class="nav">
								
							</ul>
						</nav>
						<div class="copyright ml-auto">
							2025, made with <i class="la la-heart heart text-danger"></i> by Hasibul Mondal</a>
						</div>				
					</div>
				</footer>
			</div>
		</div>
	</div>	
</div>
</body>
<script src="{{ asset('theme/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('theme/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('theme/js/core/popper.min.js') }}"></script>
<script src="{{ asset('theme/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('theme/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('theme/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('theme/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('theme/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('theme/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('theme/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('theme/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('theme/js/ready.min.js') }}"></script>
<script src="{{ asset('theme/js/demo.js') }}"></script>
</html>