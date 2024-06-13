<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Личный кабинет | UMFit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Montserrat:wght@400;500;600&amp;family=Roboto&amp;display=swap" rel="stylesheet">

		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">

        <!-- Scripts -->
		@vite(['resources/css/quiz.css', 'resources/js/app.js'])
		@routes

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-4NK35XS5EE"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-4NK35XS5EE');
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
