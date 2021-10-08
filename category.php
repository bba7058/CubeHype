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
        <h1 class="category-header"><?=single_cat_title()?></h1>
            <?php     
                $post_top_category = new WP_Query( array( 
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'category_name'  => single_cat_title('', false),
                    'posts_per_page' => 2,
                ));
            ?>
			<div class="row mx-auto">
                <?php 
                    while( $post_top_category->have_posts() ) : 
                    $post_top_category->the_post();
                ?>
				<div class="col-12 col-md-6 wrapper-left">
					<a href="<?= esc_url(get_permalink()); ?>" class="link-wrapper">
                    <?= the_post_thumbnail( 'large',
                            array('class' => 'img-top')
                        ); 
                    ?>
						<div class="top-header px-3 py-3">
                            <div class="category-post">
                                <div class="category-post-item"><?=single_cat_title()?></div>
                            </div>
							<h3 class="top-title mb-0"><?= get_the_title();?></h3>
                            <div class="top-date"><?= get_the_date(); ?></div>
						</div>
					</a>	
				</div>
                <?php endwhile; ?>
			</div>
		</section>
		<div class="content pb-5">
			<div class="row">
				<div class="col-lg-8">
                    <div id="inner-content">
                        <section class="category-content">
                            <?php     
                                $post_category = new WP_Query( array( 
                                    'post_type'      => 'post',
                                    'post_status'    => 'publish',
                                    'category_name'  => single_cat_title('', false),
                                    'posts_per_page' => 9,
                                    'offset' => 2,
                                ));
                            ?>
                                <div class="row">
                                <?php 
                                    $i = 1;
                                    while( $post_category->have_posts() ) : 
                                    $post_category->the_post();

                                    if($i % 3 != 0) {
                                        get_template_part( 'template-parts/content-category');
                                        
                                    }
                                    elseif ($i % 3 == 0){
                                        get_template_part( 'template-parts/content-category-big');
                                    }
                                    
                                    $i++;
                            
                            endwhile; ?>
                            </div>
                        </section>
                        <div class="btn-load">
                            <button tyle="button" class="btn btn-more" id="btn-more-post">LOAD MORE <i class="fas fa-sync-alt ml-1"></i></button>
                        </div>
                    </div>   
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	

<?php
get_sidebar();
get_footer();
