<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">


	<!--HEAD-->
	@include('front.includes.head')
	<!----HEAD END----->


	<body>

		<!--HEADER :-->
		@include('front.includes.header')
		<!-----HEADER END------->


		<!--MAIN CONTENT :-->
		@yield('pageContent')
		<!--MAIN CONTENT END-->


		<!-- FOOTER : -->
		@include('front.includes.footer')
		<!-----FOOTER END------->


		<!--SCRIPT :-->
		@include('front.includes.script')
		<!-----SCRIPT END------->

	</body>

</html>
