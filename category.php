<?php
/**
 * The template for displaying Category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Demo
 */

get_header();
?>
    	<!-- FB page embed -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0" nonce="DPbQOrlP"></script>
	
	<div class="container px-2">
		<section class="section-top pt-3" id="preview">
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<div class="breadcrumb mb-0" id="breadcrumbs">','</div>' );
            }
            ?>
        <h1 class="category-header">FOOD</h1>
			<div class="row mx-auto">
				<div class="col-12 col-md-6 wrapper-left">
					<a href="#" class="link-wrapper">
						<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/roman-melnychuk-I2EGcmAAcAk-unsplash.jpg')?>" class="img-top" alt="25 Amazing Facts You Didn’t Know About Animals">
						<div class="top-header px-3 py-2">
                            <div class="category-post">
                                <div class="category-post-item">Food</div>
                            </div>
							<h3 class="top-title mb-0">ลือ! OnePlus 9 RT จะอัปเกรดมาใช้กล้อง Sony IMX766 ความละเอียด 48 ล้านพิกเซล</h3>
                            <div class="top-date">13 สิงหาคม 2021</div>
						</div>
					</a>	
				</div>
				<div class="col-12 col-md-6 wrapper-right">
                    <a href="#" class="link-wrapper">
                        <img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/matt-wang-JkdchN8zPMo-unsplash.jpg')?>" class="img-top" alt="25 Amazing Facts You Didn’t Know About Animals">
                        <div class="top-header px-3 py-2">
                            <div class="category-post">
                                <div class="category-post-item">Excercise</div>
                            </div>
                            <h3 class="top-title mb-0">River City Girls 2 เพิ่มตัวละคร Marian และ Provie</h3>
                            <div class="top-date">13 สิงหาคม 2021</div>
                        </div>
                    </a>
				</div>
			</div>
		</section>
		<div class="content pb-5">
			<div class="row">
				<div class="col-lg-8">
					<section class="category-content">
						<div class="row">
							<div class="col-6">
								<div class="card border-0 category-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-category" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/julian-o-hayon-Bs-zngH79Ds-unsplash.jpg')?>" alt="">
									</a>
                                    <div class="card-body px-0">
                                        <div class="category-type">ข่าววงการเกม</div>
                                        <a href="#" class="card-link">
                                            <h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
                                        </a>
                                        <div class="info-post">
                                            <div class="post-author">
                                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                                Admin
                                            </div>
                                            <span class="mx-3">|</span>
                                            <div class="post-date">
                                                <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                                                3 สิงหาคม 2021
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="col-6">
								<div class="card border-0 category-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-category" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/levon-vardanyan-_EpaiWp5yC8-unsplash.jpg')?>" alt="">
									</a>
                                    <div class="card-body px-0">
                                        <div class="category-type">ข่าววงการเกม</div>
                                        <a href="#" class="card-link">
                                            <h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
                                        </a>
                                        <div class="info-post">
                                            <div class="post-author">
                                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                                Admin
                                            </div>
                                            <span class="mx-3">|</span>
                                            <div class="post-date">
                                                <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                                                3 สิงหาคม 2021
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="col-12">
								<div class="card border-0 category-item big mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-category" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/jingwei-ke-E7w_Ti4BSSs-unsplash.jpg')?>" alt="">
									</a>
                                    <div class="card-body px-0">
                                        <div class="category-type">ข่าววงการเกม</div>
                                        <a href="#" class="card-link">
                                            <h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
                                        </a>
                                        <div class="info-post">
                                            <div class="post-author">
                                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                                Admin
                                            </div>
                                            <span class="mx-3">|</span>
                                            <div class="post-date">
                                                <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                                                3 สิงหาคม 2021
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="col-6">
								<div class="card border-0 category-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-category" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/nrd-a2JMcWOtNAs-unsplash.jpg')?>" alt="">
									</a>
                                    <div class="card-body px-0">
                                        <div class="category-type">สัตว์</div>
                                        <a href="#" class="card-link">
                                            <h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
                                        </a>
                                        <div class="info-post">
                                            <div class="post-author">
                                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                                Admin
                                            </div>
                                            <span class="mx-3">|</span>
                                            <div class="post-date">
                                                <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                                                3 สิงหาคม 2021
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="col-6">
								<div class="card border-0 category-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-category" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/amirali-mirhashemian-sc5sTPMrVfk-unsplash.jpg')?>" alt="">
									</a>
                                    <div class="card-body px-0">
                                        <div class="category-type">อาหาร</div>
                                        <a href="#" class="card-link">
                                            <h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
                                        </a>
                                        <div class="info-post">
                                            <div class="post-author">
                                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                                Admin
                                            </div>
                                            <span class="mx-3">|</span>
                                            <div class="post-date">
                                                <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                                                3 สิงหาคม 2021
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="col-12">
								<div class="card border-0 category-item big mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-category" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/clever-visuals-lGCVWSOui5U-unsplash.jpg')?>" alt="">
									</a>
                                    <div class="card-body px-0">
                                        <div class="category-type">ข่าววงการเกม</div>
                                        <a href="#" class="card-link">
                                            <h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
                                        </a>
                                        <div class="info-post">
                                            <div class="post-author">
                                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                                Admin
                                            </div>
                                            <span class="mx-3">|</span>
                                            <div class="post-date">
                                                <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                                                3 สิงหาคม 2021
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="col-6">
								<div class="card border-0 category-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-category" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/eagan-hsu-hrJs18Q8Hgk-unsplash.jpg')?>" alt="">
									</a>
                                    <div class="card-body px-0">
                                        <div class="category-type">ข่าววงการเกม</div>
                                        <a href="#" class="card-link">
                                            <h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
                                        </a>
                                        <div class="info-post">
                                            <div class="post-author">
                                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                                Admin
                                            </div>
                                            <span class="mx-3">|</span>
                                            <div class="post-date">
                                                <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                                                3 สิงหาคม 2021
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="col-6">
								<div class="card border-0 category-item mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-category" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/myke-simon-atsUqIm3wxo-unsplash.jpg')?>" alt="">
									</a>
                                    <div class="card-body px-0">
                                        <div class="category-type">ข่าววงการเกม</div>
                                        <a href="#" class="card-link">
                                            <h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
                                        </a>
                                        <div class="info-post">
                                            <div class="post-author">
                                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                                Admin
                                            </div>
                                            <span class="mx-3">|</span>
                                            <div class="post-date">
                                                <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                                                3 สิงหาคม 2021
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
                            <div class="col-12">
								<div class="card border-0 category-item big mb-3">
									<a href="#" class="card-link-img">
										<img class="card-img-top img-category" src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/j-a-neshan-paul-Qm8q-VUjLqs-unsplash.jpg')?>" alt="">
									</a>
                                    <div class="card-body px-0">
                                        <div class="category-type">ข่าวต่างประเทศ</div>
                                        <a href="#" class="card-link">
                                            <h3 class="card-title mb-1">หนุ่มใช้ AirTag จนเจอสกูตเตอร์ที่โดนขโมยไป</h3>
                                        </a>
                                        <div class="info-post">
                                            <div class="post-author">
                                                <i class="fa fa-user mr-2" aria-hidden="true"></i>
                                                Admin
                                            </div>
                                            <span class="mx-3">|</span>
                                            <div class="post-date">
                                                <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                                                3 สิงหาคม 2021
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</section>
                    <div class="btn-load">
                        <button tyle="button" class="btn btn-more">LOAD MORE <i class="fas fa-sync-alt ml-1"></i></button>
                    </div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	

<?php
get_sidebar();
get_footer();
