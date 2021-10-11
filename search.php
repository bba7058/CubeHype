<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Demo
 */

get_header();
?>

	<!-- FB page embed -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0" nonce="DPbQOrlP"></script>
	
	<div class="container px-2">
		<section class="section-top py-3" id="preview">
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<div class="breadcrumb mb-0" id="breadcrumbs">','</div>' );
            }
        ?>
		<h1 class="category-header mb-0"><?= get_query_var('s');?></h1>
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
									?>
										<div class="card mb-3 default-items">
											<div class="row no-gutters">
												<div class="col-4">
													<a href="<?= esc_url(get_permalink()); ?>" class="default-link-img">
														<?= the_post_thumbnail( 'medium',
																array('class' => 'img-default')
															); 
														?>
													</a>	
												</div>
												<div class="col-8">
													<div class="card-body py-1 px-3">
														<div class="inner-body-wrapper">
															<a href="<?= esc_url(get_permalink()); ?>" class="default-link">
																<h3 class="card-title mb-1"><?= get_the_title();?></h3>
															</a>
															<div class="info-post">
																<div class="post-author">
																	<i class="fa fa-user mr-2" aria-hidden="true"></i>
																	<?= get_the_author(); ?>
																</div>
																<span class="mx-3">|</span>
																<div class="post-date">
																	<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
																	<?= get_the_date(); ?>
																</div>
															</div>
															<p class="card-text"><?= get_the_excerpt(); ?></p>
														</div>	
													</div>
												</div>
											</div>
										</div>
										<?php endwhile; ?>
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
