<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="/favicon.ico" />
<title>CZabalet</title>
<!-- External Libraries -->
<link rel="stylesheet" type="text/css"
	href="https://fonts.googleapis.com/css?family=Montserrat:400,600|Raleway:400,600&display=swap">
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
	href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
	href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css" />
<!-- Local Dependencies -->
<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144214905-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-144214905-1');
</script>
<meta name="csrf-token" content="{{ csrf_token() }}">