<?php 
/*

* Template Name: Demo
*/
get_header();

$my_acf_checkbox_field_arr = get_field('discontinued');

$args = array(
	'post_type'		=> 'post',
	'meta_query' => array(
		array(
			'key'     => 'discontinued',
			'value'   => 'Yes',
			'compare' => 'LIKE',
		),
	),
);


$the_query = new WP_Query( $args );
if( $the_query->have_posts() ):
 while( $the_query->have_posts() ) : $the_query->the_post();
 	
 	$id = get_the_ID();
 	$title = get_the_title($id);
 	$permalink = get_permalink($id);
 	echo '<a href="'.$permalink.'">'.$title.'</a>';
 	echo the_content();
 
 /*	print_r($id);
exit;*/
 endwhile;
 endif;

 wp_reset_query();

get_footer();