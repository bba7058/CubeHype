<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package CubeHype
 */

get_header();
?>

	<!-- FB page embed -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0" nonce="DPbQOrlP"></script>
	
	<div class="container-lg">
		<section class="section-top py-3" id="preview">
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<div class="breadcrumb mb-0" id="breadcrumbs">','</div>' );
            }
        ?>
		<h1 class="page-header mb-0"><?= get_query_var('s');?></h1>
		</section>
		<div class="content pb-5">
			<div class="row">
				<div class="col-lg-8">
					<div id="inner-content">
						<section class="section-default pt-2 border-top">
							<?php 
								$s = get_search_query();
								$query_search = new WP_Query( array( 
									's' 			=> $s,
									'post_type'    	=> 'post',
                    				'post_status'  	=> 'publish',
									'posts_per_page' => 10,
					 			));

								$num_page = $query_search->max_num_pages;
							?>
								
							<?php if ( have_posts() ) : ?>
								<div class="row mx-auto" id="search-post" data-max="<?=$num_page?>">
									<?php
										while( $query_search->have_posts() ) : 
											$query_search->the_post();
											get_template_part( 'template-parts/content-default');
										endwhile; 
									?> 
								</div>
								<?php if($num_page > 1) { ?>
									<div class="btn-load">
										<button tyle="button" class="btn btn-more" id="btn-more-post-search">LOAD MORE <i class="fas fa-sync-alt ml-1"></i></button>
									</div>
								<?php } ?>
								<?php
							else : ?>
								<h3>Nothing Found</h3>
							<?php endif;?>
						</section>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
<?php
get_footer();
