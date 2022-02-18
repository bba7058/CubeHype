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