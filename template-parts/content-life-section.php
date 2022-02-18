<?php if ( $args['layout'] == 1 ) { ?>
<div class="col-md-6">
    <div class="card border-0 first-item mb-3">
        <a href="<?= esc_url(get_permalink()); ?>" class="card-link-img">
            <?= the_post_thumbnail( 'large',
                    array('class' => 'card-img-top img-lifestyle')
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
                    <?= get_the_date(); ?>
                </div>
            </div>
            <p class="card-text"><?= get_the_excerpt(); ?></p>
        </div>
    </div>
</div>
<?php } elseif($args['layout'] == 2) { ?>

<div class="card mb-3 card-items" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-4">
            <a href="<?= esc_url(get_permalink()); ?>" class="card-link-img">
                <?= the_post_thumbnail( 'medium',
                        array('class' => 'img-life')
                    ); 
                ?>
            </a>	
        </div>
        <div class="col-8">
            <div class="card-body py-1 px-2">
                <a href="<?= esc_url(get_permalink()); ?>" class="card-link">
                    <h3 class="card-title mb-1"><?= get_the_title();?></h3>
                </a>
                <div class="info-post">
                    <div class="post-date">
                        <i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i>
                        <?= get_the_date(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>