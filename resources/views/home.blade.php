<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Title | UMFit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Montserrat:wght@400;500;600&amp;family=Roboto&amp;display=swap" rel="stylesheet">

        <!-- Scripts -->
		@vite(['resources/css/app.css', 'resources/js/app.js'])
		@routes

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-SGDCSBFMM6"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-SGDCSBFMM6');
		</script>
    </head>
    <body class="h-[100%]">
		<div id="app" class="h-[100%]"></div>

		<script>
			let queryParams = new URLSearchParams(window.location.search);

			if(queryParams.has('ref')) {
				let ref = queryParams.get('ref');
				
				localStorage.setItem('referral', ref);
			}
		</script>
    </body>
</html>
