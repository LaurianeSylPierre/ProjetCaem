<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">


	<!--HEAD-->
	@include('front.includes.head')
	<!----HEAD END---->


	<body>
		<!--MAIN CONTENT :-->
		@yield('pageContent')
		<!--------MAIN CONTENT END---------->
	</body>

</html>
