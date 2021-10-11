<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Demo
 */

get_header();
?>
<!-- FB page embed -->
<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0" nonce="DPbQOrlP"></script>
	
	<div class="container px-2">
		<section class="section-top pt-3" id="preview"></section>
		<div class="content pb-5">
			<div class="row">
				<div class="col-lg-8">
				<?php while ( have_posts() ) : the_post(); ?>
					<section class="single-post" id="inner-content">
						<img src="<?= esc_url(the_post_thumbnail_url())?>" class="img-featured-post" alt="">
						<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<div class="breadcrumb mb-0" id="breadcrumbs">','</div>' );
						}
						?>
						<div class="header-title mb-3 border-bottom">
							<h1 class="mt-0 title-post"><?php the_title();?></h1>
							<div class="info-post">
								<div class="post-author">
									<i class="fa fa-user mr-2" aria-hidden="true"></i>
									<?php echo get_the_author(); ?>
								</div>
								<span class="mx-3">|</span>
								<div class="post-date">
									<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
									<?php the_time('d F Y') ?>
								</div>
								<div class="post-view">
									<i class="fa fa-eye mr-2" aria-hidden="true"></i>
									 <?= pvc_get_post_views();?>
								</div>
							</div>
						</div>
						<div class="single-content border-bottom">
							<?php the_content() ?>
						</div>
					</section>
				<?php endwhile;  ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>

	

<?php
get_footer();
