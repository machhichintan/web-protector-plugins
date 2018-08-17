<?php get_header();

  $post_Query = array(
    'post_content' => '',
    'post_status' => 'publish'
  );
  $post_Query = new WP_Query(array('post_type'=>'page')); 
?>
  <div class="page_contant">
    <?php 
      $page_data = get_page_by_path('about');
      echo $page_data->post_content;

      $page_data = get_page_by_path('contact');
      echo $page_data->post_content; 
    ?>
  </div> 
  <script type="text/javascript">
    //lastSlideIndex = 1;
    $('#carousel').on('slide.bs.carousel', function() {
        currentIndex = $('div.active').index() + 1;
        //console.log(currentIndex);
        //$('.num').html(''+currentIndex+'/'+totalItems+'');
        if(currentIndex == 3){
          $(".cooming_soon_part").hide();
        }
      //lastSlideIndex = currentIndex;
    });
  </script>
<?php get_footer(); ?>