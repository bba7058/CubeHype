<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Demo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-lg-4">
	<div class="sidebar">
		<div class="sidebar-contact">
			<div class="header-contact">
				<div class="flex-center">
					<div class="header-title">
						ติดตาม Demo ได้ที่
					</div>
					<div class="line-center"></div>
				</div>
			</div>
			<div class="fb-wrapper">
				<div class="fb-page" data-href="https://web.facebook.com/naturebyte" width="305" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-lazy="true">
					<blockquote cite="https://web.facebook.com/naturebyte" class="fb-xfbml-parse-ignore">
						<a href="https://web.facebook.com/naturebyte">
							Nature Byte
						</a>
					</blockquote>
				</div>
			</div>
		</div>
		<div class="popular-wrapper">
			<div class="header-popular">
				<div class="popular-text">
					<i class="fa fa-bolt" aria-hidden="true"></i>
					โพสต์มาแรง
				</div>
			</div>
			<div class="popular-content">
				<div class="popular-box">
					<a href="#" class="popular-link-img">
						<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/emeric-deroubaix-ADznPBBNpP8-unsplash.jpg')?>" class="popular-img first" alt="">
						<div class="number-overlay flex-center">1</div>
					</a>
					<div class="popular-detail">
						<a href="#" class="popular-title-link">
							<h3 class="popular-title first">The Golden Boy เบอร์เกอร์ที่แพงที่สุดในโลกที่มีราคาเฉียด 2 แสนบาท</h3>
						</a>
						<div class="info-post">
							<div class="post-date">
								<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
								3 สิงหาคม 2021
							</div>
						</div>
					</div>	
				</div>
				<div class="popular-box">
					<div class="row mx-auto">
						<div class="col-5 px-1">
							<a href="#" class="popular-link-img">
								<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/anthony-espinosa-pYQSM-p_0_c-unsplash.jpg')?>" class="popular-img" alt="">
								<div class="number-overlay small flex-center">2</div>
							</a>
						</div>
						<div class="col-7 px-1">
							<div class="popular-detail">
								<a href="#" class="popular-title-link">
									<h3 class="popular-title">The Golden Boy เบอร์เกอร์ที่แพงที่สุดในโลกที่มีราคาเฉียด 2 แสนบาท</h3>
								</a>
								<div class="info-post">
									<div class="post-date">
										<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
										3 สิงหาคม 2021
									</div>
								</div>
							</div>
						</div>		
					</div>
				</div>
				<div class="popular-box">
					<div class="row mx-auto">
						<div class="col-5 px-1">
							<a href="#" class="popular-link-img">
								<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/eagan-hsu-hrJs18Q8Hgk-unsplash.jpg')?>" class="popular-img" alt="">
								<div class="number-overlay small flex-center">3</div>
							</a>
						</div>
						<div class="col-7 px-1">
							<div class="popular-detail">
								<a href="#" class="popular-title-link">
									<h3 class="popular-title">The Golden Boy เบอร์เกอร์ที่แพงที่สุดในโลกที่มีราคาเฉียด 2 แสนบาท</h3>
								</a>
								<div class="info-post">
									<div class="post-date">
										<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
										3 สิงหาคม 2021
									</div>
								</div>
							</div>
						</div>		
					</div>
				</div>
				<div class="popular-position">
					<div class="popular-box">
						<div class="row mx-auto">
							<div class="col-5 px-1">
								<a href="#" class="popular-link-img">
									<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/krists-luhaers-AtPWnYNDJnM-unsplash.jpg')?>" class="popular-img" alt="">
									<div class="number-overlay small flex-center">4</div>
								</a>
							</div>
							<div class="col-7 px-1">
								<div class="popular-detail">
									<a href="#" class="popular-title-link">
										<h3 class="popular-title">The Golden Boy เบอร์เกอร์ที่แพงที่สุดในโลกที่มีราคาเฉียด 2 แสนบาท</h3>
									</a>
									<div class="info-post">
										<div class="post-date">
											<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
											3 สิงหาคม 2021
										</div>
									</div>
								</div>
							</div>		
						</div>
					</div>
					<div class="popular-box">
						<div class="row mx-auto">
							<div class="col-5 px-1">
								<a href="#" class="popular-link-img">
									<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/blog/v2osk-YKpBFaS5adA-unsplash (1).jpg')?>" class="popular-img" alt="">
									<div class="number-overlay small flex-center">5</div>
								</a>
							</div>
							<div class="col-7 px-1">
								<div class="popular-detail">
									<a href="#" class="popular-title-link">
										<h3 class="popular-title">The Golden Boy เบอร์เกอร์ที่แพงที่สุดในโลกที่มีราคาเฉียด 2 แสนบาท</h3>
									</a>
									<div class="info-post">
										<div class="post-date">
											<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
											3 สิงหาคม 2021
										</div>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>