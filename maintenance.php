<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>everything web | soerenschwert.de</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:500|Open+Sans:300italic,400italic,600italic,300,400,600|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link href="http://soerenschwert.de/user/themes/easyontheeyes/easyontheeyes.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-33380231-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body>
	<div id="header">
		<h1 id="pageTitle">
			everything web</h1>
	</div>
	<div class="posts">
		<div class="postContent content">
			<h1>Hey folks!</h1>
			<p>
				Here a new journal about <i>the web and everything</i> is developing. Currently I'm trying to figure out how to theme the blogging-engine <a href="http://habariproject.org" title="Link to the Habari project homepage">Habari</a> correctly. This will be done shortly, though :D</p>
			<strong>Your's sincerely, Sören</strong>
		</div>
	</div>
	<div id="footer">
		<span class="floatLeft">
			<a href="mailto:hello@soerenschwert.de" title="Email me at hello@soerenschwert.de">Sören Schwert</a> | Widum 17 | 49504 Lotte
		</span>
		<span class="floatRight">
			Visit my friends' and my web- and printdesign studio on
			<a href="http://tryceps.de" target="_blank" title="Link to http://tryceps.de">
				tryceps.de</a>.
		</span>
	</div>
</body>
<script type="text/javascript">
	if(!factor)
		var factor = 0.49;
	fitText = function( elementId, kompressor ) {
		// Setup
		$this = document.getElementById( elementId );
		var compressor = kompressor || 1;

		// Resizes item based on the object width divided by the compressor * 10
		$this.style.fontSize = $this.offsetWidth / (compressor * 10) + 'px';
	}
	// Call once
	fitText('pageTitle', factor);

	// Call on resize. Opera debounces their resize by default.
	window.onresize = function() {
		fitText('pageTitle', factor);
	};
</script>
</html>
