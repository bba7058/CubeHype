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
				<?php 
				$most_viewed = pvc_get_most_viewed_posts( 
					array(
						'order'	=> 'desc',
						'post_type' => 'post',
					));

				?>
				<div class="popular-box">
					<a href="<?= esc_url(get_permalink($most_viewed[0]-> ID));?>" class="popular-link-img">
						<?= get_the_post_thumbnail($most_viewed[0]-> ID, 'large',
								array('class' => 'popular-img first')
							); 
						?>
						<div class="number-overlay flex-center">1</div>
					</a>
					<div class="popular-detail">
						<a href="<?= esc_url(get_permalink($most_viewed[0]-> ID));?>" class="popular-title-link">
							<h3 class="popular-title first"><?= get_the_title($most_viewed[0]-> ID);?></h3>
						</a>
						<div class="info-post">
							<div class="post-date">
								<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
								<?= get_the_date('',$most_viewed[0]-> ID); ?>
							</div>
						</div>
					</div>	
				</div>
				<div class="popular-box">
					<div class="row mx-auto">
						<div class="col-5 px-1">
							<a href="<?= esc_url(get_permalink($most_viewed[1]-> ID));?>" class="popular-link-img">
							<?= get_the_post_thumbnail($most_viewed[1]-> ID, 'large',
									array('class' => 'popular-img')
								); 
							?>
								<div class="number-overlay small flex-center">2</div>
							</a>
						</div>
						<div class="col-7 px-1">
							<div class="popular-detail">
								<a href="<?= esc_url(get_permalink($most_viewed[1]-> ID));?>" class="popular-title-link">
									<h3 class="popular-title"><?= get_the_title($most_viewed[1]-> ID);?></h3>
								</a>
								<div class="info-post">
									<div class="post-date">
										<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
										<?= get_the_date('',$most_viewed[1]-> ID); ?>
									</div>
								</div>
							</div>
						</div>		
					</div>
				</div>
				<div class="popular-box">
					<div class="row mx-auto">
						<div class="col-5 px-1">
							<a href="<?= esc_url(get_permalink($most_viewed[2]-> ID));?>" class="popular-link-img">
								<?= get_the_post_thumbnail($most_viewed[2]-> ID, 'large',
										array('class' => 'popular-img')
									); 
								?>
								<div class="number-overlay small flex-center">3</div>
							</a>
						</div>
						<div class="col-7 px-1">
							<div class="popular-detail">
								<a href="<?= esc_url(get_permalink($most_viewed[2]-> ID));?>" class="popular-title-link">
									<h3 class="popular-title"><?= get_the_title($most_viewed[2]-> ID);?></h3>
								</a>
								<div class="info-post">
									<div class="post-date">
										<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
										<?= get_the_date('',$most_viewed[2]-> ID); ?>
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
								<a href="<?= esc_url(get_permalink($most_viewed[3]-> ID));?>" class="popular-link-img">
									<?= get_the_post_thumbnail($most_viewed[3]-> ID, 'large',
											array('class' => 'popular-img')
										); 
									?>
									<div class="number-overlay small flex-center">4</div>
								</a>
							</div>
							<div class="col-7 px-1">
								<div class="popular-detail">
									<a href="<?= esc_url(get_permalink($most_viewed[3]-> ID));?>" class="popular-title-link">
										<h3 class="popular-title"><?= get_the_title($most_viewed[3]-> ID);?></h3>
									</a>
									<div class="info-post">
										<div class="post-date">
											<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
											<?= get_the_date('',$most_viewed[3]-> ID); ?>
										</div>
									</div>
								</div>
							</div>		
						</div>
					</div>
					<div class="popular-box">
						<div class="row mx-auto">
							<div class="col-5 px-1">
								<a href="<?= esc_url(get_permalink($most_viewed[4]-> ID));?>" class="popular-link-img">
									<?= get_the_post_thumbnail($most_viewed[4]-> ID, 'large',
											array('class' => 'popular-img')
										); 
									?>
									<div class="number-overlay small flex-center">5</div>
								</a>
							</div>
							<div class="col-7 px-1">
								<div class="popular-detail">
									<a href="<?= esc_url(get_permalink($most_viewed[4]-> ID));?>" class="popular-title-link">
										<h3 class="popular-title"><?= get_the_title($most_viewed[4]-> ID);?></h3>
									</a>
									<div class="info-post">
										<div class="post-date">
											<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
											<?= get_the_date('',$most_viewed[4]-> ID); ?>
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