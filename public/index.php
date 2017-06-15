<?php
	$versionSlug = 'v1.2';
	$googleMapAPI = 'AIzaSyB95dBtXMULdBz11DXjdQBRw6YPUuU8TlM';
	$introText = 'Rådgiver, designer, utvikler og kursholder. Jeg kan hjelpe deg med å nå dine forretningsmål gjennom design. Jeg jobber som frilanser i Oslo og er åpen for oppdrag.';
?>
<!doctype html>

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Joakim Bording | Senior interaksjonsdesigner</title>
	<meta name='description' content='<?php echo $introText; ?>' />
	<meta name='keywords' content='design, brukeropplevelse, frilanser, front-end' />
	<link rel='canonical' href='http://joakim.bording.no' />
	<meta property='og:title' content='Joakim Bording | Senior interaksjonsdesigner' />
	<meta property='og:description' content='<?php echo $introText; ?>' />
	<meta property='og:type' content='website' />
	<meta property='og:url' content='http://joakim.bording.no' />
	<meta property='og:locale' content='nb_NO' />
	<meta property="og:image" content="http://joakim.bording.no/images/facebook_joakim_bording.png" />
	<meta name='twitter:url' content='http://joakim.bording.no'>

  <link rel="stylesheet" href="/css/screen.css?<?php echo $versionSlug; ?>">

	<script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>
  <script src="js/main.js?<?php echo $versionSlug; ?>"></script>

	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KQJS8BZ');</script>
</head>

<body>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJS8BZ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<main>
	  <div class="card">
			<div class="card__visual">
				<picture class="visual">
					<source media="(min-width: 720px)" srcset="/images/portrait_joakim_bording.jpg 1x">
					<img src="/images/landscape_joakim_bording.jpg" data-object-fit="cover" alt="Portrett av Joakim Bording" class="visual__image">
				</picture>
			</div>
			<div class="card__content">
				<div class="card__text-frame">
					<h1>Joakim Bording</h1>
					<p><?php echo $introText; ?></p>
					<dl class="info-list">
						<div class="info-list__item info-list__item--large">
							<div class="info info--large">
								<dt class="info__title">E-post: </dt>
								<dd class="info__value"><a href="mailto:joakim@bording.no" aria-label="E-post: joakim@bording.no">joakim@bording.no</a></dd>
							</div>
						</div>
						<div class="info-list__item">
							<div class="info">
								<dt class="info__title">Telefon: </dt>
								<dd class="info__value"><a href="tel:91814458" aria-label="Telefon: 918 14 458">918 14 458</a></dd>
							</div>
						</div>
						<div class="info-list__item">
							<div class="info">
								<dt class="info__title">Twitter: </dt>
								<dd class="info__value"><a href="https://twitter.com/spispeas" aria-label="Twitter brukernavn: @spispeas">@spispeas</a></dd>
							</div>
						</div>
						<div class="info-list__item">
							<div class="info">
								<dt class="info__title">LinkedIn: </dt>
								<dd class="info__value"><a href="http://no.linkedin.com/pub/joakim-bording/0/932/6a9/no"  aria-label="LinkedIn profil">Profil</a></dd>
							</div>
						</div>
					</dl>
				</div>
			</div>
	  </div>
		<div class="card card--triple">
			<div class="card__content">
				<div class="card__text-frame">
					<h2>Strategi fra et brukerperspektiv</h2>
					<p>Jeg har gjort over 150 brukertester på tvers av bransjer og målgrupper. Jeg forstår hvordan du kan nå dine mål på brukernes premisser.</p>
				</div>
			</div>
			<div class="card__content">
				<div class="card__text-frame">
					<h2>Design og front-end utvikling</h2>
					<p>Jeg kan realisere ideer. Design og teknologi henger sammen. Jeg har lang erfaring innen webutvikling på et profesjonelt nivå og har min spiss i front-end laget (HTML/CSS/JS).
				</div>
			</div>
			<div class="card__content">
				<div class="card__text-frame">
					<h2>Kurs og foredrag</h2>
					<p>Jeg elsker å forelese. Jeg har tidligere vært fagleder på deltidsstudier i interaksjonsdesign og pratet på konferanser om universell utforming. </p>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card__visual">
				<picture class="visual">
					<source media="(min-width: 720px)" srcset="/images/obos_merkevare.jpg 1x">
					<img src="/images/obos_merkevare.jpg" data-object-fit="cover" alt="obos.no screenshet" class="visual__image">
				</picture>
			</div>
			<div class="card__content">
				<div class="card__text-frame">
					<h2 class="h1"><small>Case: </small>OBOS Designsystem</h2>
					<p>Vi moderniserte OBOS konsernet sin visuelle identitet på digitale flater. Arbeidet ble dokumentert og utformet i en nettbasert merkevarehåndbok. Designsystemet og front-end koden som jeg utviklet for styleguiden har blitt brukt videre av samarbeidspartnere til å redesigne <a href="https://www.obos.no/">obos.no</a> (lanseres snart).</p>
					<p>Jeg hadde ansvar for interaksjonsdesign og front-end utvikling i prosjektet. Jeg hadde den primære kundekontakten med OBOS og redesignet navigasjonsstrukturen til obos.no i løpet av prosjektet.</p>
					<div class="info">
						<span class="info__title">Se resultatet:</span>
						<span class="info__value"><a href="https://merkevare.obos.no/">merkevare.obos.no</a></span>
					</div>
					<p><small>Prosjektet ble gjort våren 2017 i <a href="https://www.netliferesearch.com/">Netlife Research</a> sammen med <a href="https://www.netliferesearch.com/eivind-molvaer">Eivind Molvær</a> og <a href="https://www.linkedin.com/in/anette-mork-8b23a81b/">Anette Mork</a>.</small></p>
				</div>
			</div>
		</div>
		<div class="card card--flip">
			<div class="card__visual">
				<div id="map_canvas" class="visual visual--map"></div>
			</div>
			<div class="card__content">
				<div class="card__text-frame">
					<h2 class="h1">La oss ta en kaffe!</h2>
					<p>Det er mange gode kafeér ikke langt fra kontoret mitt for eksempel?</p>
					<div class="info">
						<span class="info__title">Telefon: </dt>
						<span class="info__value"><a href="tel:91814458" aria-label="Telefon: 918 14 458">918 14 458</a></dd>
					</div>
				</div>
			</div>
	</main>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo $googleMapAPI; ?>&callback=initMap"
 type="text/javascript"></script>
</body>
