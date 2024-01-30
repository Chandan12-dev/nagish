<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Nagish-Dashboard') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
		<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
		<script src="//code.jquery.com/jquery-3.4.1.js"></script>
		
        @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/flowbite.min.js'])
    </head>
    <body class="font-sans antialiased">
			<x-new-site-popup />
        <div class="min-h-screen bg-gray-100">
			<aside id="default-sidebar" class="bg-blue fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 max-w-7xl mx-auto " aria-label="Sidebar">
				@include('layouts.navigation')
			</aside>
			<div class="p-4 sm:ml-64">
				<!-- Page Heading -->
				@if (isset($header))
					<header class="">
						<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex">
							<div class="w-half">
								{{ $header }}
							</div>
							<div class="w-half flex justify-end">
								{{ $search_form }}
							</div>
						</div>
					</header>
				@endif

				<!-- Page Content -->
				<main>
					{{ $slot }}
				</main>
			</div>	
        </div>
    </body>
</html>
