<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

	<div id="footer">
		<span class="floatLeft">
			<a href="mailto:hello@soerenschwert.de" title="Email me at hello@soerenschwert.de">Sören Schwert</a> | Widum 17 | 49504 Lotte
		</span>
		<span class="floatRight">
			Visit my friends' and my web- and printdesign studio on
			<a href="http://tryceps.de" target="_blank" title="Link to http://tryceps.de">
				tryceps.de</a>
		</span>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php Site::out_url( 'theme' ); ?>/fancybox/jquery.fancybox.pack.js?v=2.1.0"></script>
	<script type="text/javascript">
		if(!factor)
			var factor = 1;
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

		if( activateCommentsForm )
			$('#comment-public').addClass('activated');

		$('#comment-public textarea, #comment-public input')
			.focus( function() {
				$('#comment-public').addClass('activated');
			})
			.blur( function() {
				if( $('#comment_content').val() === '' )
					$('#comment-public').removeClass('activated');
			});

		$('.fancybox').fancybox({
			padding: 0,
			openEffect: 'elastic',
			openSpeed: 150,
			closeEffect: 'elastic',
			closeSpeed: 150,
			closeClick: true
		});
	</script>
	<?php $theme->footer(); ?>
</body>
</html>
