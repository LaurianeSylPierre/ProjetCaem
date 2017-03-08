<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="École de musique à Besançon" />
	<link rel="icon" type="image/png" href="{{ asset('images/caem_favicon.png')}}" />

    <title>
    @yield('pageTitle', 'CAEM - Ecole de musique')
    </title>


    @section('ogtags')
        @include('front.includes.og_tags')
    @show

	@yield('leaflet')

	<!--STYLESHEET-->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!--IMPORT FONTS-->
	<link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
