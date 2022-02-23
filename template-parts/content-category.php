     <div class="col-6">
        <div class="card border-0 category-item mb-3">
            <a href="<?= esc_url(get_permalink()); ?>" class="card-link-img">
            <?= the_post_thumbnail( 'large',
                    array('class' => 'card-img-top img-category')
                ); 
            ?>
            </a>
            <div class="card-body px-0">
                  <?php 
                        $primary_term_id = yoast_get_primary_term_id('category');
                        $postTerm = get_term( $primary_term_id );
                        if ( $postTerm && ! is_wp_error( $postTerm ) ) { 
                    ?>
                        <a href="<?= esc_url( get_term_link( $postTerm->term_id ) )?>" class="category-type"><?= $postTerm->name;?></a>
                    <?php } 
                        elseif(is_wp_error( $postTerm )) {
                        $get_cat = get_the_category();
                    ?>
                        <a href="<?=  esc_url( get_term_link( $get_cat[0]->term_id ) )?>" class="category-type"><?= $get_cat[0]->name;?></a>
                    <?php } ?>
                    
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
                        <?= thai_month_format(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>