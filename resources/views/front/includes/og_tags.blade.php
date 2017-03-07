	<!-- OPEN GRAPH -->
	<meta property="og:title" content="{{ $title or 'CAEM - Ecole de musique' }}" />
	<meta property="og:type" content="{{ $type or 'website' }}" />
	<meta property="og:url" content="{{ isset($url) ? $url : str_replace('http://', 'https://', Request::url()) }}" />
	<meta property="og:image" content="{{ $image or asset('images/caem_OG_twitterCard.jpg') }}" />
	<meta property="og:description" content="{{ $description or 'Le Carrefour d\'Animation et d\'Expression Musicales est une association née en 1992 proposant des activités musicales pour tous.Spécialisé dans les musiques actuelles, le CAEM est une école pour apprendre, pratiquer la musique en groupe et se perfectionner.' }}" />

	<!--  TWITTER CARD-->
	<meta property="twitter:summary" content="summary" />
	<meta property="twitter:site" content="@CaemBesancon" />
	<meta property="twitter:title" content="{{ $title or 'CAEM - Ecole de musique' }}" />
	<meta property="twitter:description" content="{{ $description or 'Le Carrefour d\'Animation et d\'Expression Musicales est une association née en 1992 proposant des activités musicales pour tous.Spécialisé dans les musiques actuelles, le CAEM est une école pour apprendre, pratiquer la musique en groupe et se perfectionner.' }}" />
	<meta property="twitter:image" content="{{ $image or asset('images/caem_OG_twitterCard.jpg') }}" />
	<meta property="twitter:url" content="{{ isset($url) ? $url : str_replace('http://', 'https://', Request::url()) }}" />