
<div class="related-wrapper border-top">
    <div class="related-header">
        <h3 class="header-title">
            เรื่องราวอื่นๆ ที่น่าสนใจ
        </h3>
        <div class="line-right"></div>	
    </div>
    <?php if (have_posts()):?>
        <div class="row mx-0">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-6 col-md-4 px-1">
                    <div class="card border-0 related-box">
                        <a href="<?= esc_url(get_permalink()); ?>" class="related-link-img">
                        <?php the_post_thumbnail( $dimensions['size'], 
                                array( 'class' => 'img-related' ) ); ?>
                        </a>
                        <div class="card-body related-body">
                            <?php 
                                $primary_term_id = yoast_get_primary_term_id('category');
                                $postTerm = get_term( $primary_term_id );
                                if ( $postTerm && ! is_wp_error( $postTerm ) ) { 
                            ?>
                                <div class="related-category"><?= $postTerm->name;?></div>
                            <?php } 
                                elseif(is_wp_error( $postTerm )) {
                                $get_cat = get_the_category();
                            ?>
                                <div class="related-category"><?= $get_cat[0]->name; ?></div>
                            <?php } ?>
                            
                            <a href="<?= esc_url(get_permalink()); ?>" class="related-title-link">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>    
    <?php endif; ?>
</div>