<div class="col-6 col-md-4 px-1">
    <div class="card border-0 ww-wrapper">
        <a href="<?= esc_url(get_permalink()); ?>" class="ww-link-img">
            <?= the_post_thumbnail( 'medium',
                    array('class' => 'img-ww')
                ); 
            ?>
        </a>
        <div class="card-body ww-body">
            <a href="<?= esc_url(get_permalink()); ?>" class="ww-title-link">
                <h3 class="card-title"><?= get_the_title();?></h3>
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