<header id="header">

	<div class="container-fluid">

		<div class="row" id="contact-connection">


			<div class="col-md-10 col-xs-12">

				<span class="hidden-xs">Suivez-nous sur</span>

				<a href="https://www.facebook.com/caem.besancon">
					<img src="{{ asset('images/facebook_logo.svg')}}" />
				</a>

				<a href="https://www.twitter.com/caembesancon">
					<img src="{{ asset('images/twitter_logo.svg')}}" />
				</a>

				<a href="https://www.youtube.com/channel/UC0ixrwCaOvNLfnfDv8ShaOA">
					<img src="{{ asset('images/youtube_logo.svg')}}" />
				</a>

				<a href="/contact">
					<img class="visible-xs" src="{{ asset('images/contact_logo.svg')}}" />
				</a>

				<span class="hidden-xs">
				  ou <a href="/contact">contactez-nous</a> directement.
				</span>

			</div>

		</div>

	</div>




	<div id="header-img" class="text-center hidden-sm hidden-xs" style="background: url({{asset('images/headerbg/trame_header.png')}}), url({{url('images_header/1920x500/header.jpg')}}) no-repeat;
		background-size: auto, cover;">
		<a href="/"><img src="{{ asset('images/logo_CAEM.svg')}}" alt="logo CAEM"></a>
	</div>

	<div id="header-img2" class="text-center visible-sm visible-xs">
		<a href="/"><img src="{{ asset('images/logo_sanstexte_CAEM.svg')}}" alt="logo CAEM"></a>
	</div>


	<nav class="navbar navbar-default navbar-caem">

		<div class="visible-xs visible-sm">
			<div id="EDM">
				<h2>Ecole de musique</h2>
			</div>
		</div>

		<div class="container">


			<div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>


			<div class="collapse navbar-collapse" id="myNavbar">

				<ul class="nav navbar-nav">
					<li {{{ (Request::is('/') ? 'class=active' : '') }}}><a href="/">Accueil</a></li>
					<li {{{ (Request::is('parcours') ? 'class=active' : '') }}}><a href="/parcours">Mon parcours musical</a></li>
					<li {{{ (Request::is('tarifs') ? 'class=active' : '') }}}><a href="/tarifs">Tarifs &amp; Inscriptions</a></li>
					<li {{{ (Request::is('evenements') ? 'class=active' : '') }}}><a href="/evenements">Évenements</a></li>
					<li {{{ (Request::is('equipe') ? 'class=active' : '') }}}><a href="/equipe">L'équipe</a></li>
				</ul>

			</div>


		</div>

	</nav>



</header>
