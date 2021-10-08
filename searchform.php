    <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-box">
        <button type="button" class="search-icon ml-0">
            <i class="fa fa-search"></i>
        </button>
        <input class="form-control input-search" type="text" name="s" placeholder="ค้นหา..." value="<?php echo get_search_query(); ?>">
    </form>