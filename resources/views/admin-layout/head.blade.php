<!DOCTYPE html>


<html lang="en">

<!-- begin::Head -->
<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Bar Dash | Dashboard</title>
	<meta name="description" content="Updates and statistics">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ Session::token() }}"> 

	<!--begin::Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

	<!--end::Fonts -->
	<link href="{{asset('public/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--begin::Page Vendors Styles(used by this page) -->
	<link href="{{asset('public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

	<!--end::Page Vendors Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="{{asset('public/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<link href="{{asset('public/assets/css/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/assets/css/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/assets/css/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/assets/css/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />

	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="{{asset('public/assets/media/logos/favicon.ico')}}" />
</head>