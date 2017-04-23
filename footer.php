	<!--Close wrapper-->
</div>

	<div id="footer">

		<div id="inner-footer">

			<div id="widget-box">

				<?php if ( dynamic_sidebar('home_right_1') ) : else : endif; ?>

			<!-- close widget-box-->		
			</div>

					<div id="thumb-box">
						<?php
							require_once('flickr.php');
							$Flickr = new Flickr;
							$data = $Flickr->search('movies');
							foreach($data['photos']['photo'] as $photo) {
							// the image URL becomes somthing like
							// http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}.jpg
							echo '<a target="_blank" href="https://www.flickr.com/photos/59589689@N03/' . $photo["id"] . '">';
							echo '<div class="images" ><span><img class="opacity" src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg"></span></div>';
							echo '</a>';
							}

						?>
						<!-- close thumb-box -->

		<!-- close inner-footer-->
		</div>

	<!-- close footer-->
	</div>



<?php wp_footer(); ?>
</body>
</html>
