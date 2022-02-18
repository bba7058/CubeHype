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
	
	<div class="container px-2">
		<section class="section-preview" id="preview">
			<div class="row h-100 mx-auto">
				<?php
					$lastest_offest_0 = new WP_Query( array( 
						'post_type' => 'post',
						'post_status' => 'publish',
						'offset' => 0,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'posts_per_page' => '1',
					));

					if ( $lastest_offest_0->have_posts() ) : 
						$lastest_offest_0->the_post();
				?>

					<div class="col-12 col-lg-6 preview-left">
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

				<div class="col-12 col-lg-6 preview-right">
					<div class="row mx-auto preview-right-top">
						<?php
							$lastest_offest_1 = new WP_Query( array( 
								'post_type' => 'post',
								'post_status' => 'publish',
								'offset' => 1,
								'orderby' => 'post_date',
								'order' => 'DESC',
								'posts_per_page' => '1',
							));

							if ( $lastest_offest_1->have_posts() ) : 
								$lastest_offest_1->the_post();
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
							$lastest_offest_2 = new WP_Query( array( 
								'post_type' => 'post',
								'post_status' => 'publish',
								'offset' => 2,
								'orderby' => 'post_date',
								'order' => 'DESC',
								'posts_per_page' => '1',
							));

							if ( $lastest_offest_2->have_posts() ) : 
								$lastest_offest_2->the_post();
						?>	
						<div class="col-sm-6 sm-box">
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
							$lastest_offest_3 = new WP_Query( array( 
								'post_type' => 'post',
								'post_status' => 'publish',
								'offset' => 3,
								'orderby' => 'post_date',
								'order' => 'DESC',
							));

							if ( $lastest_offest_3->have_posts() ) : 
								$lastest_offest_3->the_post();
						?>
						<div class="col-sm-6 sm-box-2">
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
									?>
										<div class="col-6">
											<div class="card border-0 tech-item mb-3">
												<a href="<?= esc_url(get_permalink()); ?>" class="card-link-img">
													<?= the_post_thumbnail( 'large',
															array('class' => 'card-img-top img-tech')
														); 
													?>
												</a>
													<div class="card-body px-0">
													<a href="<?= esc_url(get_permalink()); ?>" class="card-link">
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
									<?php endwhile; ?>
								</div>
							</div>	
							<div class="prev-next-wrap mt-3">
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
									?>
									<div class="col-6 ent-wrapper">
										<a href="<?= esc_url(get_permalink()); ?>" class="ent-list">
											<?= the_post_thumbnail( 'large',
													array('class' => 'img-cover')
												); 
											?>
											<div class="text-overlay flex-center">
												<div class="text-wrapper">
													<div class="flex-center flex-column flex-sm-row mb-2">
														<div class="ent-info mr-1">
															<?php 
																$primary_term_id = yoast_get_primary_term_id('category');
																$postTerm = get_term( $primary_term_id );
																if ( $postTerm && ! is_wp_error( $postTerm ) ) { 
															?>
																<span class="cate"><?= $postTerm->name;?></span>
															
															<?php } 
																elseif(is_wp_error( $postTerm )) {
																$get_cat = get_the_category();
															?>
																<span class="cate"><?= $get_cat[0]->name; ?></span>
															<?php } ?>
																<span>|</span>
														</div>
														<span class="ent-date"><?= get_the_date('d/m/y'); ?></span>		
													</div>
													<h3 class="ent-title"><?= get_the_title();?></h3>
												</div>
											</div>		
										</a>
									</div>
									<?php endwhile; ?>
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
									?>
									<div class="col-md-6">
										<div class="card border-0 first-item mb-3">
											<a href="<?= esc_url(get_permalink()); ?>" class="card-link-img">
												<?= the_post_thumbnail( 'large',
														array('class' => 'card-img-top img-lifestyle')
													); 
												?>
											</a>
												<div class="card-body px-0">
												<a href="<?= esc_url(get_permalink()); ?>" class="card-link">
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
									<?php 
										endif;
									?>
									<div class="col-md-6">
										<?php    
											if ( $lifestyle_post->have_posts() ) : 
											while( $lifestyle_post->have_posts() ) : 
												$lifestyle_post->the_post();
										?>
										<div class="card mb-3 card-items" style="max-width: 540px;">
											<div class="row no-gutters">
												<div class="col-4">
													<a href="<?= esc_url(get_permalink()); ?>" class="card-link-img">
														<?= the_post_thumbnail( 'medium',
																array('class' => 'img-life')
															); 
														?>
													</a>	
												</div>
												<div class="col-8">
													<div class="card-body py-1 px-2">
														<a href="<?= esc_url(get_permalink()); ?>" class="card-link">
															<h3 class="card-title mb-1"><?= get_the_title();?></h3>
														</a>
														<div class="info-post">
															<div class="post-date">
																<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
																<?= get_the_date(); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php 
											endwhile; 
											endif; 
										?>
									</div>
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
									?>
										<div class="col-6 col-md-4 px-1">
											<div class="card border-0 ww-wrapper">
												<a href="<?= esc_url(get_permalink()); ?>" class="ww-link-img">
													<?= the_post_thumbnail( 'medium',
															array('class' => 'img-ww')
														); 
													?>
												</a>
												<div class="card-body ww-body">
													<a href="<?= esc_url(get_permalink()); ?>" class="ww-title-link">
														<h3 class="card-title"><?= get_the_title();?></h3>
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
												</div>
											</div>
										</div>
										<?php endwhile; ?>
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
