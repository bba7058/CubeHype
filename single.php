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
					<section class="single-post">
						<img src="<?= esc_url(the_post_thumbnail_url())?>" class="img-featured-post" alt="">
						<div class="breadcrumb mb-0">
							<a href="#" class="breadcrumb-items single">Home</a>
							<a href="#" class="breadcrumb-items single">Lifestyle</a>
							<a href="#" class="breadcrumb-items single">Food</a>
						</div>
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
						<div class="single-content border-bottom pb-3">
							<?php the_content() ?>
							<div class="post-tag-box">
								<div class="post-tag-label">
									TAGS:
								</div>
								<div class="post-tag-list-wrapper">
									<a href="#" class="post-tag-list">
										Burger
									</a>
									<a href="#" class="post-tag-list">
										Panda
									</a>
									<a href="#" class="post-tag-list">
										Facebook
									</a>
									<a href="#" class="post-tag-list">
										Travel
									</a>
									<a href="#" class="post-tag-list">
										Food
									</a>
								</div>
							</div>
						</div>
						<div class="social-share border-bottom">
							<a href="#" class="social-list flex-center facebook">
								<i class="fab fa-facebook-f mr-2" aria-hidden="true"></i>
								FACEBOOK
							</a>
							<a href="#" class="social-list flex-center twitter">
								<i class="fab fa-twitter mr-2" aria-hidden="true"></i>
								TWITTER
							</a>
							<a href="#" class="social-list flex-center line">
								<i class="fab fa-line mr-2" aria-hidden="true"></i>
								LINE
							</a>
						</div>
						<div class="related-wrapper">
							<div class="related-header">
								<div class="header-title">
									เรื่องราวอื่นๆ ที่น่าสนใจ
								</div>
								<div class="line-right"></div>	
							</div>
							<div class="row mx-0">
								<div class="col-6 col-md-4 px-1">
									<div class="card border-0 related-box">
										<a href="#" class="related-link-img">
											<img class="img-related" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/clem-onojeghuo-RozQ_5_4RNs-unsplash.jpg')?>" alt="">
										</a>
										<div class="card-body related-body">
											<div class="related-category">อาหาร</div>
											<a href="#" class="related-title-link">
												<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
											</a>
										</div>
									</div>
								</div>
								<div class="col-6 col-md-4 px-1">
									<div class="card border-0 related-box">
										<a href="#" class="related-link-img">
											<img class="img-related" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/jezael-melgoza-43rUwqdoD1g-unsplash.jpg')?>" alt="">
										</a>
										<div class="card-body related-body">
											<div class="related-category">อาหาร</div>
											<a href="#" class="related-title-link">
												<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
											</a>
										</div>
									</div>
								</div>
								<div class="col-6 col-md-4 px-1">
									<div class="card border-0 related-box">
										<a href="#" class="related-link-img">
											<img class="img-related" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/myke-simon-atsUqIm3wxo-unsplash.jpg')?>" alt="">
										</a>
										<div class="card-body related-body">
											<div class="related-category">อาหาร</div>
											<a href="#" class="related-title-link">
												<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
											</a>
										</div>
									</div>
								</div>
								<div class="col-6 col-md-4 px-1">
									<div class="card border-0 related-box">
										<a href="#" class="related-link-img">
											<img class="img-related" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/samuel-wong-4R1wcvJb40c-unsplash.jpg')?>" alt="">
										</a>
										<div class="card-body related-body">
											<div class="related-category">อาหาร</div>
											<a href="#" class="related-title-link">
												<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
											</a>
										</div>
									</div>
								</div>
								<div class="col-6 col-md-4 px-1">
									<div class="card border-0 related-box">
										<a href="#" class="related-link-img">
											<img class="img-related" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/gabriel-voltz-xCr7cmReH3Y-unsplash.jpg')?>" alt="">
										</a>
										<div class="card-body related-body">
											<div class="related-category">อาหาร</div>
											<a href="#" class="related-title-link">
												<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
											</a>
										</div>
									</div>
								</div>
								<div class="col-6 col-md-4 px-1">
									<div class="card border-0 related-box">
										<a href="#" class="related-link-img">
											<img class="img-related" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/jingwei-ke-E7w_Ti4BSSs-unsplash.jpg')?>" alt="">
										</a>
										<div class="card-body related-body">
											<div class="related-category">อาหาร</div>
											<a href="#" class="related-title-link">
												<h3 class="card-title">20 รายละเอียดเล็ก ๆ ในหนังดิสนีย์ ที่คนส่วนมากไม่เคยสังเกตเห็น</h3>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php endwhile;  ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>

	

<?php
get_footer();
