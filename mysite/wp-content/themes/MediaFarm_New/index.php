<?php get_header(); ?>
<!-- $post_Query = array(
    'post_content' => '',
    'post_status' => 'publish'
);

$post_Query = new WP_Query(array('post_type' => 'page'));
 -->
<div class="page_contant"> 

    <?php
        $page_data = get_page_by_path('about');
        echo $page_data->post_content;

        $page_data = get_page_by_path('contact');
        echo $page_data->post_content; 
    ?>

</div> 

<?php get_footer(); ?>