<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CubeHype
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-T724MXTBGV"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-T724MXTBGV');
	</script>
</head>

<body>
<?php wp_body_open(); ?>

	<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
		<a class="navbar-brand ml-3" href="<?= esc_url(home_url()); ?>">
			<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/brand-logo.png')?>" class="img-brand" alt="brand-logo">
		</a>
		<div class="menu-desktop ml-auto">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link active px-3 dropdown-wrapper" href="<?= esc_url(home_url()); ?>">Home</a>
				</li>
				
				<?php

					$categories = get_categories(array(
						'orderby' => 'description',
   						'order'   => 'ASC',
						'parent' => 0,
					));

					foreach($categories as $category) { ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-wrapper px-3" href="<?= esc_url(get_category_link($category->cat_ID)); ?>">
								<?= $category->name ?>
							<i class="fas fa-angle-down"></i>
							</a>
							<div class="dropdown-menu dropdown-hover">
								<?php 
									$child_categories = get_categories(
										array( 'parent' => $category->cat_ID )
								); 

								foreach($child_categories as $child_category) {  ?>
									<a class="dropdown-item dropdown-list" href="<?= esc_url(get_category_link($child_category->cat_ID)); ?>">
										<?= $child_category->name ?>
									</a>
								<?php } ?>
							</div>
						</li>
					<?php } ?>
			</ul>
		</div>
		<button class="navbar-toggler d-lg-none border-0 ml-auto" type="button" data-toggle="collapse" data-target="#collapse-menu" aria-controls="collapse-menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<?php get_search_form() ?>

		<form class="form-inline my-2 my-lg-0 d-none">
			
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>

		<!-- menu mobile -->
		<div class="collapse navbar-collapse pb-2 menu-mobile" id="collapse-menu">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link active px-3 collapse-sub-memu" href="<?= esc_url(home_url()); ?>">Home</a>
				</li>
				<?php foreach($categories as $category) { ?>
					<li class="nav-item">
						<a class="nav-link collapse-sub-memu px-3" href="<?= esc_url(get_category_link($category->cat_ID)); ?>" data-toggle="collapse" data-target="#collapse-<?= $category->slug; ?>" aria-controls="collapse-<?= $category->slug; ?>" aria-expanded="false" aria-label="Toggle navigation">
							<?= $category->name ?>
						<i class="fas fa-angle-down"></i>
						</a>
						<div class="collapse navbar-collapse" id="collapse-<?= $category->slug; ?>">
						<?php 
							$child_categories = get_categories(
								array( 'parent' => $category->cat_ID )
							); 

							foreach($child_categories as $child_category) {  ?>
								<a class="dropdown-item sub-menu-list" href="<?= esc_url(get_category_link($child_category->cat_ID)); ?>">
									<?= $child_category->name ?>
								</a>
							<?php } ?>
						</div>
					</li>
				<?php } ?>
			</ul>
		</div>
	</nav>

