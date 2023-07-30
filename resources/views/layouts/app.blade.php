<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | UMChain</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Montserrat:wght@400;500;600&amp;family=Roboto&amp;display=swap" rel="stylesheet">

        <!-- Scripts -->
		@routes
        @vite(['resources/css/app.css', 'resources/js/app.js'])
		<style>
			[x-cloak] {display: none;}
		</style>
    </head>
    <body class="flex flex-col h-full font-sans antialiased">
		@include('layouts.partials.header')

		@yield('content')
		
		@include('layouts.partials.footer')
		@yield('body_scripts')
    </body>
</html>
