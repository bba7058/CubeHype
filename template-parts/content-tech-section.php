<div class="col-6">
    <div class="card border-0 tech-item mb-3">
        <a href="<?= esc_url(get_permalink()); ?>" class="card-link-img">
            <?= the_post_thumbnail( 'large',
                    array('class' => 'card-img-top img-tech')
                ); 
            ?>
        </a>
            <div class="card-body px-0">
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
            <p class="card-text"><?= get_the_excerpt(); ?></p>
        </div>
    </div>
</div>