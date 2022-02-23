
    <div class="card mb-3 default-items">
        <div class="row no-gutters">
            <div class="col-4">
                <a href="<?= esc_url(get_permalink()); ?>" class="default-link-img">
                    <?= the_post_thumbnail( 'medium',
                            array('class' => 'img-default')
                        ); 
                    ?>
                </a>	
            </div>
            <div class="col-8">
                <div class="card-body py-1 px-3">
                    <div class="inner-body-wrapper">
                        <a href="<?= esc_url(get_permalink()); ?>" class="default-link">
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
                        <p class="card-text"><?= get_the_excerpt(); ?></p>
                    </div>	
                </div>
            </div>
        </div>
    </div>
