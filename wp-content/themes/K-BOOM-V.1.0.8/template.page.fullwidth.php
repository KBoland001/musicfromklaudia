<?php 
/*
 * Template Name: Page Fullwidth
 */
get_header(); ?>

            <div id="white-background">
                <!-- content -->
                <div id="content" class="container clearfix" style="padding-bottom: 20px;">

                <div class="container">
                    <div class="page-title-heading">
                        <h2><?php the_title(); ?><?php if ( !get_post_meta($post->ID, 'snbpd_pagedesc', true)== '') { ?> / <?php }?> <span><?php echo get_post_meta($post->ID, 'snbpd_pagedesc', true); ?></span></h2>
                    </div>
                </div>
                <div class="title-border"></div>

                <div class="container-block">
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
							<div class="page-body clearfix"> 
								<?php the_content(); ?>
							</div> <!-- end article section -->
						
						<?php endwhile; ?>		
					</article>

					<?php else : ?>
						
					<article id="post-not-found">
						<header>
							<h1><?php _e("Not Found", "site5framework"); ?></h1>
						</header>
						<section class="post_content">
							<p><?php _e("Sorry, but the requested resource was not found on this site.", "site5framework"); ?></p>
						</section>
						<footer>
						</footer>
					</article>
					
					<?php endif; ?>
				</div>
			    </div> <!-- end content -->
            </div><!-- end #white-background -->
<?php get_footer(); ?>