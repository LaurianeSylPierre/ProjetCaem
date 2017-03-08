{{----CALLING THE DEFAULT LAYOUT--}}
@extends('front.layouts.default')
{{--------------------------------}}




{{---HEAD TITLE :---}}
@section('pageTitle')
CAEM - Mentions légales
@endsection
{{------------------}}




{{--HEAD OGTAGS :--}}
@section('ogtags')
    @include('front.includes.og_tags', ['title' => 'CAEM Besançon École de musique - Mentions légales'])
		{{-- you can precise title, type, url, image, description--}}
@stop
{{------------------}}




{{--MAIN CONTENT :--}}
@section('pageContent')
<main class="container mainMentions">


	<h1>Mentions légales</h1>
	<ul>
		<li><a href="#1-Informations-legales">1. Informations légales</a></li>
		<li><a href="#2-Limitation-de-responsabilite">2. Limitation de responsabilité</a></li>
		<li><a href="#3-Informatique-et-Liberte">3. Informatique et Liberté</a></li>
		<li><a href="#4-Cookies">4. Cookies</a></li>
		<li><a href="#5-Propriete-intellectuelle">5. Propriété intellectuelle</a></li>
	</ul>


	<section id="1-Informations-legales">

		<h2>1. Informations légales</h2>

		<p>Conformément aux dispositions des articles 6-III et 19 de la loi pour la Confiance dans l’Économie Numérique, nous vous informons que :</p>

		<ul>
			<li>Le présent site web est édité par l'association CAEM Besançon, dont le siège est situé :
				<ul>
					<li>13 A avenue Ile-de-France / 25000 Besançon - France</li>
					<li>Tél. : +33 [0]3.81.51.21.36</li>
				</ul>
			</li>
			<li>Le directeur de la publication du site web ’caem-besancon.fr’ est le président de l'association CAEM Besançon, Yves Tannier</li>
			<li>Le prestataire assurant bénévolement la réalisation et le suivi technique du site est :
				<ul>
					<li>Yves Tannier [<a href="http://www.tanlab.fr">tanlab.fr</a>]</li>
					<li>13 Rue du Polygone - 25000 Besançon - France</li>
					<li>Tél. : +33 [0]6 63 78 73 11</li>
				</ul>
			</li>
			<li>Le prestataire assurant le stockage direct et permanent est :
				<ul>
					<li>Excellency / <a href="http://www.alwaysdata.com">Alwaysdata</a></li>
					<li>21 Rue d'Hauteville</li>
					<li>75010 Paris, France</li>
				</ul>
			</li>
		</ul>

	</section>




	<section id="2-Limitation-de-responsabilite">

		<h2>2. Limitation de responsabilité</h2>

		<p>L’utilisateur reconnaît avoir pris connaissance des présentes conditions d’utilisation et s’engage à les respecter.</p>

		<p>L’utilisateur du site internet ’caem-besancon.fr’ reconnaît disposer de la compétence et des moyens nécessaires pour accéder et utiliser ce site.</p>

		<p>L’utilisateur du site internet ’caem-besancon.fr’ reconnaît avoir vérifié que la configuration informatique utilisée ne contient aucun virus et qu’elle est en parfait état de fonctionnement.</p>

		<p>L'association CAEM Besançon mettent tout en œuvre pour offrir aux utilisateurs des informations et/ou des outils disponibles et vérifiés mais ne sauraient être tenues pour responsables des erreurs, d’une absence de disponibilité des fonctionnalités et/ou de la présence de virus sur son site.</p>

		<p>Les informations fournies par L'association CAEM Besançon sont à titre indicatif et ne sauraient dispenser l’utilisateur d’une analyse complémentaire et personnalisée.</p>

		<p>L'association CAEM Besançon ne sauraient garantir l’exactitude, la complétude, l’actualité des informations diffusées sur son site. En conséquence, l’utilisateur reconnaît utiliser ces informations sous sa responsabilité exclusive.</p>

	</section>




	<section id="3-Informatique-et-Liberte">

		<h2>3. Informatique et Liberté</h2>

		<p>Les traitements automatisés de données nominatives réalisés à partir du site web ’caem-besancon.fr’ ont été traités en conformité avec les exigences de la loi n°78-17 du 6 janvier 1978 modifiée, relative à l’informatique, aux fichiers et aux libertés.</p>

		<p>L’utilisateur est notamment informé que conformément à l’article 32 de la loi n°78-17 du 6 janvier 1978 modifiée, relative à l’informatique, aux fichiers et aux libertés, les informations qu’il communique par le biais des formulaires présents sur le site sont nécessaires pour répondre à sa demande et sont destinées à L'association CAEM Besançon, en tant que responsable du traitement à des fins de gestion administrative et commerciale.</p>

		<p>L’utilisateur est informé qu’il dispose d’un droit d’accès, d’interrogation et de rectification qui lui permet, le cas échéant, de faire rectifier, compléter, mettre à jour, verrouiller ou effacer les données personnelles le concernant qui sont inexactes, incomplètes, équivoques, périmées ou dont la collecte, l’utilisation, la communication ou la conservation est interdite.</p>

		<p>L’utilisateur dispose également d’un droit d’opposition au traitement de ses données pour des motifs légitimes ainsi qu’un droit d’opposition à ce que ces données soient utilisées à des fins de prospection commerciale.</p>

		<p>L’ensemble de ces droits s’exerce auprès de L'association CAEM Besançon par courrier accompagné d’une copie d’un titre d’identité comportant une signature à adresser à :</p>

		<ul>
			<li>CAEM Besançon</li>
			<li>13 A avenue Ile-de-France</li>
			<li>25000 Besançon - France</li>
		</ul>

	</section>




	<section id="4-Cookies">

		<h2>4. Cookies</h2>

		<p>L’utilisateur est informé que lors de ses visites sur le site, un <a href="http://fr.wikipedia.org/wiki/Cookie_%28informatique%29">cookie</a> peut s’installer automatiquement sur son logiciel de navigation.</p>

		<p>Le cookie est un bloc de données qui ne permet pas d’identifier les utilisateurs mais sert à enregistrer des informations relatives à la navigation de celui-ci sur le site.</p>

		<p>Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de la refuser de la manière décrite à l’adresse suivante : <a href="http://www.cnil.fr/" rel="external">www.cnil.fr</a>.</p>

		<p>L’utilisateur dispose de l’ensemble des droits susvisés s’agissant des données à caractère personnel communiquées par le biais des cookies dans les conditions indiquées ci-dessus.</p>

		<p>Les utilisateurs du site internet ’caem-besancon.fr’ sont tenus de respecter les dispositions de la loi n°78-17 du 6 janvier 1978 modifiée, relative à l’informatique, aux fichiers et aux libertés, dont la violation est passible de sanctions pénales.</p>

		<p>Ils doivent notamment s’abstenir, s’agissant des informations à caractère personnel auxquelles ils accèdent ou pourraient accéder, de toute collecte, de toute utilisation détournée d’une manière générale, de tout acte susceptible de porter atteinte à la vie privée ou à la réputation des personnes.</p>

	</section>




	<section id="5-Propriete-intellectuelle">

		<h2 >5. Propriété intellectuelle</h2>

		<p>Sauf mention contraire, la structure générale ainsi que les logiciels, textes, images animées ou non, son savoir-faire et tous les autres éléments composant le site sont la propriété exclusive de l'association CAEM Besançon.</p>

		<p>Toute représentation totale ou partielle de ce site par quelle que personne que ce soit, sans l’autorisation expresse de l'association CAEM Besançon est interdite et constituerait une contrefaçon sanctionnée par les articles L. 335-2 et suivants du Code de la propriété intellectuelle.</p>

		<p>Il en est de même des bases de données figurant, le cas échéant sur le site web qui sont protégées par les dispositions de la loi du 1er juillet 1998 portant transposition dans le Code de la propriété intellectuelle de la directive du 11 mars 1996 relative à la protection juridique des bases de données, et dont l'association CAEM Besançon est producteur.</p>

		<p>L'association CAEM Besançon ne sauraient être responsable de l’accès par les utilisateurs via les liens hypertextes mis en place dans le cadre du site internet en direction d’autres ressources présentes sur le réseau.</p>

		<p>Tout litige en relation avec l’utilisation du site ’caem-besancon.fr’ est soumis au droit français. L’utilisateur reconnaît la compétence exclusive des tribunaux compétents.</p>

	</section>


</main>
@endsection
{{------------------}}
