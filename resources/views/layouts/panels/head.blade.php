	<!--begin::Head-->
	<head>
        <meta charset="utf-8" />
        <title>{{ config('app.name') }} | @yield('title', 'Home')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="{{ asset('metronic/fonts/poppins.css') }}" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{ asset('metronic/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('metronic/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{ asset('metronic/css/themes/layout/header/base/light.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/css/themes/layout/header/menu/dark.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/css/themes/layout/brand/light.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('metronic/css/themes/layout/aside/light.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="{{ asset('metronic/media/logos/favicon.ico') }}" />
		<!--end::Layout Themes-->
		@yield('styles')
		@livewireStyles
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
	</head>
	<!--end::Head-->