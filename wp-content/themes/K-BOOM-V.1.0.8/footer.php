			</div>
            <!-- end #page here -->
            <!-- begin #footer -->
			<footer id="footer">

                <div id="footer-arrow"></div>
			
				<div class="container clearfix">
					
					<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>

						<?php dynamic_sidebar( 'footer-sidebar' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="one-fourth">
						
							<!-- This content shows up if there are no widgets defined in the backend. -->
			
							<div class="help">
							
								<p>
									<?php _e("Please activate some Widgets.", "site5framework"); ?>

									<?php if(current_user_can('edit_theme_options')) : ?>
									<a href="<?php echo admin_url('widgets.php')?>" class="add-widget"><?php _e("Add Widget", "site5framework"); ?></a>
									<?php endif ?>
								</p>
							
							</div>
						
						</div>

					<?php endif; ?>
					
					
					
				</div> <!-- end #footerWidgets -->
				
				<!-- begin #copyright -->
				<div id="copyrights">
					<div class="container clearfix">

						<?php if(of_get_option('sc_footer_copyright') == '') { ?>
						<?php } else { ?>
						<?php echo of_get_option('sc_footer_copyright')  ?>
						<?php } ?>

				    </div> <!-- end #copyright -->
                </div> <!-- end #container -->
			</footer> <!-- end footer -->



		<!-- scripts are now optimized via Modernizr.load -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js" type="text/javascript"></script>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<?php wp_footer(); // js scripts are inserted using this function ?>
	</body>
</html>