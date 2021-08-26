<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Demo
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
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
		<a class="navbar-brand" href="#">
			<img src="<?= esc_url(get_template_directory_uri() .'/assets/img/brand-logo.png')?>" class="img-brand" alt="brand-logo">
		</a>
		<div class="menu-desktop ml-auto">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link active px-3 dropdown-wrapper" href="#">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-wrapper px-3" href="#">
						Lifestyle
					<i class="fas fa-angle-down"></i>
					</a>
					<div class="dropdown-menu dropdown-hover">
						<a class="dropdown-item dropdown-list" href="#">Lifestyle 1</a>
						<a class="dropdown-item dropdown-list" href="#">Lifestyle 2</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-wrapper px-3" href="#">
						Technology
					<i class="fas fa-angle-down"></i>
					</a>
					<div class="dropdown-menu dropdown-hover">
						<a class="dropdown-item dropdown-list" href="#">Technology 1</a>
						<a class="dropdown-item dropdown-list" href="#">Technology 2</a>
						<a class="dropdown-item dropdown-list" href="#">Technology 3</a>
						<a class="dropdown-item dropdown-list" href="#">Technology 4</a>
						<a class="dropdown-item dropdown-list" href="#">Technology 5</a>
						<a class="dropdown-item dropdown-list" href="#">Technology 6</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-wrapper px-3" href="#">
						Entertainment
					<i class="fas fa-angle-down"></i>
					</a>
					<div class="dropdown-menu dropdown-hover">
						<a class="dropdown-item dropdown-list" href="#">Entertainment 1</a>
						<a class="dropdown-item dropdown-list" href="#">Entertainment 2</a>
						<a class="dropdown-item dropdown-list" href="#">Entertainment 3</a>
						<a class="dropdown-item dropdown-list" href="#">Entertainment 4</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-wrapper px-3" href="#">
						Worldwide
					<i class="fas fa-angle-down"></i>
					</a>
					<div class="dropdown-menu dropdown-hover">
						<a class="dropdown-item dropdown-list" href="#">Worldwide 1</a>
						<a class="dropdown-item dropdown-list" href="#">Worldwide 2</a>
						<a class="dropdown-item dropdown-list" href="#">Worldwide 3</a>
					</div>
				</li>
			</ul>
		</div>
		<button class="navbar-toggler d-lg-none border-0 ml-auto" type="button" data-toggle="collapse" data-target="#collapse-menu" aria-controls="collapse-menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>


		<button type="button" class="search-icon ml-0 mx-lg-5">
				<i class="fa fa-search"></i>
		</button>

		<form class="form-inline my-2 my-lg-0 d-none">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>

		<!-- menu mobile -->
		<div class="collapse navbar-collapse pb-2 menu-mobile" id="collapse-menu">
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link active px-3 collapse-sub-memu" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link collapse-sub-memu px-3" href="#" data-toggle="collapse" data-target="#collapse-lifestyle" aria-controls="collapse-lifestyle" aria-expanded="false" aria-label="Toggle navigation">
						Lifestyle
					<i class="fas fa-angle-down"></i>
					</a>
					<div class="collapse navbar-collapse" id="collapse-lifestyle">
						<a class="dropdown-item sub-menu-list" href="#">Lifestyle 1</a>
						<a class="dropdown-item sub-menu-list" href="#">Lifestyle 2</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link collapse-sub-memu px-3" href="#" data-toggle="collapse" data-target="#collapse-tech" aria-controls="collapse-tech" aria-expanded="false" aria-label="Toggle navigation">
						Technology
					<i class="fas fa-angle-down"></i>
					</a>
					<div class="collapse navbar-collapse" id="collapse-tech">
						<a class="dropdown-item sub-menu-list" href="#">Technology 1</a>
						<a class="dropdown-item sub-menu-list" href="#">Technology 2</a>
						<a class="dropdown-item sub-menu-list" href="#">Technology 3</a>
						<a class="dropdown-item sub-menu-list" href="#">Technology 4</a>
						<a class="dropdown-item sub-menu-list" href="#">Technology 5</a>
						<a class="dropdown-item sub-menu-list" href="#">Technology 6</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link collapse-sub-memu px-3" href="#" data-toggle="collapse" data-target="#collapse-ent" aria-controls="collapse-ent" aria-expanded="false" aria-label="Toggle navigation">
						Entertainment
					<i class="fas fa-angle-down"></i>
					</a>
					<div class="collapse navbar-collapse" id="collapse-ent">
						<a class="dropdown-item sub-menu-list" href="#">Entertainment 1</a>
						<a class="dropdown-item sub-menu-list" href="#">Entertainment 2</a>
						<a class="dropdown-item sub-menu-list" href="#">Entertainment 3</a>
						<a class="dropdown-item sub-menu-list" href="#">Entertainment 4</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link collapse-sub-memu px-3" href="#" data-toggle="collapse" data-target="#collapse-ww" aria-controls="collapse-ww" aria-expanded="false" aria-label="Toggle navigation">
						Worldwide
					<i class="fas fa-angle-down"></i>
					</a>
					<div class="collapse navbar-collapse" id="collapse-ww">
						<a class="dropdown-item sub-menu-list" href="#">Worldwide 1</a>
						<a class="dropdown-item sub-menu-list" href="#">Worldwide 2</a>
						<a class="dropdown-item sub-menu-list" href="#">Worldwide 3</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

