	<footer class="btws-footer">
		<section class="btws-contact">
			<p>All work copyright BY THE WAY COMMUNICATIONS SA / BY THE WAY COMMUNICATIONS FRIBOURG SaRL 2005—2015</p>
		</section>
	</footer>
	<div class="elevator">
		<svg class="sweet-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" height="100px" width="100px">
		    <polygon class="st0" points="49,7.5 29.7,26.7 68.2,26.7 "/>
			<path class="st0" d="M22.4,37.3v53.2h53.2V37.3H22.4z M46.2,83.4H29v-39h17.3V83.4z M69,83.4H51.8v-39H69V83.4z"/>
		</svg>
	</div>

	<?php if (is_home()) { get_template_part( 'content', 'btws-touch' ); } ?>

	<script>

	    // Simple elevator usage.
	    var elementButton = document.querySelector('.elevator svg');
	    var elevator = new Elevator({
	        element: elementButton,
            duration: 5000,
	        mainAudio: '<?php echo bloginfo('template_url'); ?>/music/elevator-music.mp3',
	        endAudio:  '<?php echo bloginfo('template_url'); ?>/music/ding.mp3'
	    });


		jQuery(".btws-the-title").fitText(1, {
	        minFontSize: '60px',
	        maxFontSize: '120px'
		});

		jQuery('#headline-hidden').bigtext();
		// jQuery('.btws-the-team h2').bigtext();
		jQuery("body.home h2").fitText(1, {
	        minFontSize: '40px',
	        maxFontSize: '60px'
		});
		jQuery(".isotope-item h2").fitText(1, {
	        minFontSize: '40px',
	        maxFontSize: '60px'
		});

	</script>
 <?php wp_footer(); ?> 
</body>
</html>          
