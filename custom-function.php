<?php


function web_loadmore_ajax_handler(){
 
	$offset = $_POST["offset"];

	$args = array(
        'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 4,
		'offset' => $offset,
     );
 
	$post = new WP_Query( $args );
 
		while($post->have_posts() ): 
			$post->the_post();
			get_template_part( 'template-parts/content-default');
		endwhile;
 

	die; 
}
 
add_action('wp_ajax_loadmore', 'web_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'web_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function loadmore_category(){
 
	$offset = $_POST["offset"];
	$category = $_POST["cat"];

	$args = array(
        'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 9,
		'offset' => $offset,
		'category_name' => $category,
     );
 
	$post = new WP_Query( $args );
 
		$i = 1;
		while($post->have_posts() ): 
			$post->the_post();

			if($i % 3 != 0) {
				get_template_part( 'template-parts/content-category');
				
			}
			elseif ($i % 3 == 0){
				get_template_part( 'template-parts/content-category-big');
			}
			
			$i++;
		endwhile;
 

	die; 
}
 
add_action('wp_ajax_loadmore-category', 'loadmore_category'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore-category', 'loadmore_category'); // wp_ajax_nopriv_{action}


function loadmore_tag(){
 
	$offset = $_POST["offset"];
	$tag = $_POST["tag"];

	$args = array(
        'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 10,
		'offset' => $offset,
		'tag' => $tag,
     );
 
	$post = new WP_Query( $args );
 
		while($post->have_posts() ): 
			$post->the_post();

			get_template_part( 'template-parts/content-default');
			
		endwhile;
	die; 
}
 
add_action('wp_ajax_loadmore-tag', 'loadmore_tag'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore-tag', 'loadmore_tag'); // wp_ajax_nopriv_{action}

function loadmore_search(){
 
	$offset = $_POST["offset"];
	$search = $_POST["s"];

	$args = array(
        'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 10,
		'offset' => $offset,
		's' => $search,
     );
 
	$post = new WP_Query( $args );
		while($post->have_posts() ): 
			$post->the_post();
				get_template_part( 'template-parts/content-default');
		endwhile;
 

	die; 
}
 
add_action('wp_ajax_loadmore-search', 'loadmore_search'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore-search', 'loadmore_search'); // wp_ajax_nopriv_{action}


// Add tag after post content
function tag_after_post_content($content){

		$tags = get_the_tags();
		if($tags){
			$content .= '<div class="post-tag-box">
								<div class="post-tag-label">
									TAGS:
								</div>
								<div class="post-tag-list-wrapper">';

			foreach($tags as $tag) {
				$values .= '<a href="'.get_tag_link($tag->term_id ).'" class="post-tag-list">'.$tag->name.'</a>';
			}
			
			$content_2 = '</div></div>';
			return $content.$values.$content_2;
		}
		return $content;
	
}
add_filter( "the_content", "tag_after_post_content" );

// ribbon category preview in front_page
function ribbon_category() { 
	$category = get_the_category();
	$category_parent_id = $category[0]->category_parent;

	if($category_parent_id != 0 ){
		$category_parent = get_term($category_parent_id, 'category');
		$category_name = $category_parent->name;
	}
	else{
		$category_name = $category[0]->name;
	}

	if($category_name == 'Technology') { 
		echo '<div class="ribbon-top"><span class="tech">'.$category_name.'</span></div>';
	} 	else if ($category_name == 'Lifestyle') {
			echo '<div class="ribbon-top"><span class="lifestyle">'.$category_name.'</span></div>';
	}   else if ($category_name == 'Entertainment') {
			echo '<div class="ribbon-top"><span class="ent">'.$category_name.'</span></div>';
	}  else if ($category_name == 'Worldwide') {
			echo '<div class="ribbon-top"><span class="ww">'.$category_name.'</span></div>';
	} 
} 

// prev next post
function prev_next(){
 
	$offset = $_POST["offset"];
	$category = $_POST["cat"];
	$posts_per_page = $_POST["ppp"];

	$args = array(
        'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => $posts_per_page,
		'offset' => $offset,
		'category_name' => $category,
     );
 
	$post = new WP_Query( $args );
 
	if($category == 'Technology') {
		while($post->have_posts() ): 
			$post->the_post();
			get_template_part( 'template-parts/content-tech-section');
		endwhile;	
	}
	elseif($category == 'Entertainment'){
		while($post->have_posts() ): 
			$post->the_post();
				get_template_part( 'template-parts/content-ent-section');
		endwhile;
	}
	elseif($category == 'Lifestyle'){
		if ( $post->have_posts() ) : 
			$post->the_post();
			get_template_part( 'template-parts/content-life-section', null, array('layout' => 1));
		endif;
		echo '<div class="col-md-6">';
		if ( $post->have_posts() ) : 
			while( $post->have_posts() ) : 
				$post->the_post();
				get_template_part( 'template-parts/content-life-section', null, array('layout' => 2));
			endwhile; 
		endif;
		echo '</div>';
	}
	elseif($category == 'Worldwide'){
		while($post->have_posts() ): 
			$post->the_post();
				get_template_part( 'template-parts/content-ww-section');
		endwhile;
	}
		
	die; 
}
 
add_action('wp_ajax_prev_next', 'prev_next'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_prev_next', 'prev_next'); // wp_ajax_nopriv_{action}

// convert date_time to thai
function thai_month_format(){
    $month_names = array(1=>'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
    return get_the_time('j').' '.$month_names[get_the_time('n')].' '.get_the_time('Y');
}

add_filter('the_time', 'thai_month_format');

/**
 * Add more excerpt Length.
 */
function custom_excerpt_length( $length ) {
	return 350;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



?>