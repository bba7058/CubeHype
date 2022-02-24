<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CubeHype
 */

get_header();
?>
	<!-- FB page embed -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0" nonce="DPbQOrlP"></script>
	
	<div class="container-lg">
		<section class="section-preview" id="preview">
			<div class="row h-100">
				<?php
					$lastest_publish_preview = new WP_Query( array( 
						'post_type' => 'post',
						'post_status' => 'publish',
						'orderby' => 'post_date',
						'order' => 'DESC',
						'posts_per_page' => '4',
					));

					if ( $lastest_publish_preview->have_posts() ) : 
						$lastest_publish_preview->the_post();
				?>
					<div class="col-12 col-md-6 preview-left">
						<a href="<?= esc_url(get_permalink()); ?>" class="preview-item">
							<?= the_post_thumbnail( 'large',
									array('class' => 'img-preview')
								); 
							?>
							<div class="preview-header flex-center px-3 py-2">
								<h3 class="title-left mb-0"><?= get_the_title();?></h3>
							</div>
							<?php 
								ribbon_category();
							?>	
						</a>	
					</div>
				<?php endif; ?>
				<div class="col-12 col-md-6 preview-right">
					<div class="row mx-auto preview-right-top">
						<?php
							if ( $lastest_publish_preview->have_posts() ) : 
								$lastest_publish_preview->the_post();
						?>
						<div class="col-12 h-100 px-0 box-right">
							<a href="<?= esc_url(get_permalink()); ?>" class="preview-item">
								<?= the_post_thumbnail( 'large',
										array('class' => 'img-preview')
									); 
								?>
								<div class="preview-header flex-center px-3 py-2">
									<h3 class="title-left mb-0"><?= get_the_title();?></h3>
								</div>
								<?php 
									ribbon_category($category_name);
								?>	
							</a>
						</div>
						<?php endif; ?>
					</div>
					<div class="row mx-auto preview-right-bottom">
						<?php
							if ( $lastest_publish_preview->have_posts() ) : 
								$lastest_publish_preview->the_post();
						?>	
						<div class="col-6 sm-box">
							<a href="<?= esc_url(get_permalink()); ?>" class="preview-item">
								<?= the_post_thumbnail( 'large',
										array('class' => 'img-preview')
									); 
								?>
								<div class="preview-header flex-center px-3 py-2">
									<h3 class="title-left mb-0"><?= get_the_title();?></h3>
								</div>
								<?php 
									ribbon_category($category_name);
								?>	
							</a>
						</div>
						<?php endif; ?>
						<?php
							if ( $lastest_publish_preview->have_posts() ) : 
								$lastest_publish_preview->the_post();
						?>
						<div class="col-6 sm-box-2">
							<a href="<?= esc_url(get_permalink()); ?>" class="preview-item">
								<?= the_post_thumbnail( 'large',
										array('class' => 'img-preview')
									); 
								?>
								<div class="preview-header flex-center px-3 py-2">
									<h3 class="title-left mb-0"><?= get_the_title();?></h3>
								</div>
								<?php 
									ribbon_category($category_name);
								?>	
							</a>
						</div>
						<?php endif; ?>
					</div>		
				</div>
			</div>
		</section>
		<div class="content pb-5">
			<div class="row">
				<div class="col-lg-8">
					<h1 class="header-hide">CubeHype เทคโนโลยี ข่าวบันเทิง ไลฟ์สไตล์ ข่าวเกม ข่าวมือถือ คอมพิวเตอร์ รอบโลก</h1>
					<div id="inner-content">
						<section class="section-tech">
							<div class="header-category">
								<div class="category-title tech">Technology</div>
							</div>
							<?php
								$tech_post = new WP_Query( array( 
									'post_type' => 'post',
									'post_status' => 'publish',
									'category_name' => 'Technology',
									'posts_per_page' => 4,
								));

								$num_page_tech = $tech_post->max_num_pages;

							?>
							<div class="wrapper-content">
								<div class="row animation-loaded" id="load-next-prev-tech" data-max="<?=$num_page_tech?>">
									<?php     
										while( $tech_post->have_posts() ) : 
											$tech_post->the_post();
											get_template_part( 'template-parts/content-tech-section');
										endwhile; ?>
								</div>
							</div>	
							<div class="prev-next-wrap mt-2">
								<button type="button" class="page-prev-btn" id="prev-btn-tech">
									<i class="fas fa-angle-left"></i>
								</button>
								<button type="button" class="page-next-btn" id="next-btn-tech">
									<i class="fas fa-angle-right"></i>
								</button>
							</div>
						</section>
						<section class="section-ent">
							<div class="header-category">
								<div class="category-title ent">Entertainment</div>
							</div>
								<?php
									$ent_post = new WP_Query( array( 
										'post_type' => 'post',
										'post_status' => 'publish',
										'category_name' => 'Entertainment',
										'posts_per_page' => 4,
									));

									$num_page_ent = $ent_post->max_num_pages;

								?>
							<div class="wrapper-content">
								<div class="row mx-auto animation-loaded" id="load-next-prev-ent" data-max="<?=$num_page_ent?>">
									<?php     
										while( $ent_post->have_posts() ) : 
											$ent_post->the_post();
											get_template_part( 'template-parts/content-ent-section');
										endwhile; ?>
								</div>
							</div>	
							<div class="prev-next-wrap mt-5">
								<button type="button" class="page-prev-btn" id="prev-btn-ent">
									<i class="fas fa-angle-left"></i>
								</button>
								<button type="button" class="page-next-btn" id="next-btn-ent">
									<i class="fas fa-angle-right"></i>
								</button>
							</div>
						</section>
						<section class="section-lifestyle">
							<div class="header-category">
								<div class="category-title life">Lifestyle</div>
							</div>
							<?php
								$lifestyle_post = new WP_Query( array( 
									'post_type' => 'post',
									'post_status' => 'publish',
									'category_name' => 'Lifestyle',
									'posts_per_page' => 5,
								));

								$num_page_life = $lifestyle_post->max_num_pages;
							?>
							<div class="wrapper-content">
								<div class="row animation-loaded" id="load-next-prev-life" data-max="<?=$num_page_life?>">
									<?php     							
										if ( $lifestyle_post->have_posts() ) : 
											$lifestyle_post->the_post();
											get_template_part( 'template-parts/content-life-section', null, array('layout' => 1));
										endif;
										echo '<div class="col-md-6">';
										if ( $lifestyle_post->have_posts() ) : 
											while( $lifestyle_post->have_posts() ) : 
												$lifestyle_post->the_post();
												get_template_part( 'template-parts/content-life-section', null, array('layout' => 2));
											endwhile; 
										endif;
										echo '</div>'
									?>
								</div>
							</div>		
							<div class="prev-next-wrap mt-5">
								<button type="button" class="page-prev-btn" id="prev-btn-life">
									<i class="fas fa-angle-left"></i>
								</button>
								<button type="button" class="page-next-btn" id="next-btn-life">
									<i class="fas fa-angle-right"></i>
								</button>
							</div>
						</section>
						<section class="section-ww">
							<div class="header-category">
								<div class="category-title ww">Worldwide</div>
							</div>
							<?php
								$ww_post = new WP_Query( array( 
									'post_type' => 'post',
									'post_status' => 'publish',
									'category_name' => 'Worldwide',
									'posts_per_page' => 6,
								));
								$num_page_ww = $ww_post->max_num_pages;
							?>
							<div class="wrapper-content">
								<div class="row mx-auto animation-loaded" id="load-next-prev-ww" data-max="<?=$num_page_ww?>">
									<?php     
										while( $ww_post->have_posts() ) : 
											$ww_post->the_post();
											get_template_part( 'template-parts/content-ww-section');
										endwhile; ?>
								</div>
							</div>
							<div class="prev-next-wrap mt-5">
								<button type="button" class="page-prev-btn" id="prev-btn-ww">
									<i class="fas fa-angle-left"></i>
								</button>
								<button type="button" class="page-next-btn" id="next-btn-ww">
									<i class="fas fa-angle-right"></i>
								</button>
							</div>
						</section>
						<section class="section-default">
							<div class="header-category">
								<div class="category-title lastest">Latest Post</div>
							</div>
							<?php
								$lastest_post = new WP_Query( array( 
									'post_type' => 'post',
									'post_status' => 'publish',
									'posts_per_page' => 4,
								));

								$num_page = $lastest_post->max_num_pages;

							?>
							<div class="row mx-auto" id="lastest-post" data-max="<?=$num_page?>">
								<?php
									while( $lastest_post->have_posts() ) : 
										$lastest_post->the_post();
										get_template_part( 'template-parts/content-default');
									endwhile; 
								?>
							</div>
							<?php if($num_page > 1) { ?>
								<div class="btn-load">
									<button tyle="button" class="btn btn-more" id="btn-more-post">LOAD MORE <i class="fas fa-sync-alt ml-1"></i></button>
								</div>
							<?php } ?>
						</section>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
<?php
get_footer();
