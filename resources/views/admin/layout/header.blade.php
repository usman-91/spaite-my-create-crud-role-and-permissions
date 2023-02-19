<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="description" content="Spruha - Panel laravel">
		<meta name="author" content="Spruko Technologies Private Limited">
	
        <!-- Favicon -->
		<link rel="icon" href="{{ asset('assets/img/brand/favicon.ico') }}" type="image/x-icon"/>

		<!-- Title -->
		<title>Head</title>

		<!-- Bootstrap css-->
		<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="{{ asset('assets/plugins/web-fonts/icons.css') }}" rel="stylesheet"/>
		<link href="{{ asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet"/>

		<!-- Style css-->
		<link href="{{ asset('assets/css/style/style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/skins.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/colors/default.css') }}" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/colors/color.css') }}">

		<!-- Select2 css-->
        <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
		
		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">
		
		<!-- Sidemenu css-->
		<link href="{{ asset('assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">

		<!-- Internal DataTables css-->
		<link href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet" />

		<!-- Switcher css-->
		<link href="{{ asset('assets/switcher/css/switcher.css')}}" rel="stylesheet">
		<link href="{{ asset('assets/switcher/demo.css')}}" rel="stylesheet">
		@yield('header')
	</head>
	<body class="main-body leftmenu">


		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->
	
		<!-- Page -->
		<div class="page">