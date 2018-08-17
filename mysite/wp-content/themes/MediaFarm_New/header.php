<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title(''); echo  bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  
  <div class="all_page_class_mediafarm">
    <div class="home_page_mediafarm">
      <div class="nav">
        <div class="nav-header">
            <div class="nav-title left_part_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo_img.png">
            </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        <input type="checkbox" id="nav-check">
        <div class="nav-links">
          <a class="menu" href="#section1">About</a>
          <a class="menu" href="#section2">Contact</a>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.pagenav.js"></script>
        <script>
          $(document).ready(function ()
          {
              $('a.menu').pageNav({'scroll_shift': $('.menu').outerHeight() + 0});
          });
        </script>
      </div>
       
      <!-- <div class="main_slider">
      
        <?php $slider_interval = get_field( "slider_interval", 'options' ); ?>

        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="<?php echo $slider_interval; ?>">
        <div id="carousel-example-captions" class="carousel carousel-fade" data-ride="carousel" data-interval="<?php echo $slider_interval; ?>">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>

          <?php 
          if (have_rows('slider_images', 'option')): ?>

            <div class="carousel-inner"> 
              <?php
                $flag = 1;

                while (have_rows('slider_images', 'option')): the_row();
                  // vars
                  $home_slider_backgroud = get_sub_field('slider_image', 'option'); 
                  ?>
                  
                    <div class="<?php echo ($flag == 1) ? 'active' : ''; ?> item">
                      <img src="<?php echo $home_slider_backgroud; ?>">
                    </div>

                  <?php 
                  $flag++;
                endwhile; ?>
            </div>
          
            <?php
          endif;
          ?>

          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider_2_img.png">
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider_1_img.png">
          </div>

          <div class="cooming_soon_part">
              <div class="background_coming_soon">
                  <p><span><img src="<?php echo get_template_directory_uri(); ?>/images/brush_icon.png"></span>New website is coming soon!</p>
              </div>  
          </div>

          <a class="carousel-control left" href="#carousel" data-slide="prev"><img src="<?php echo get_template_directory_uri(); ?>/images/new_arow.png" class="leftic" style=""></a>
          <a class="carousel-control right" href="#carousel" data-slide="next"><img src="<?php echo get_template_directory_uri(); ?>/images/new_arow.png" class="rightic"></a>
        </div>

        <div class="bottem_aroow">
          <a class="ct-btn-scroll ct-js-btn-scroll" href="#section1"><img alt="Arrow Down Icon" src="<?php echo get_template_directory_uri(); ?>/images/dawon_arow.png"></a>
          <script>
            $(document).ready(function () {

              $("a.ct-btn-scroll").on('click', function (event) {

                if (this.hash !== "") {

                  event.preventDefault();
                  var hash = this.hash;

                  $('html, body').animate({

                    scrollTop: $(hash).offset().top

                  }, 800, function () {

                    window.location.hash = hash;

                  });
                }

              });
            });
          </script>
        </div> 
      </div> -->
      
      <div class="main_slider">
        <?php $slider_interval = get_field( "slider_interval", 'options' ); ?>

        <div id="carousel-example-captions" class="carousel carousel-fade" data-ride="carousel" data-interval="<?php echo $slider_interval; ?>">
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carousel-example-captions"></li>
            <li data-slide-to="1" data-target="#carousel-example-captions" class=""></li>
            <li data-slide-to="2" data-target="#carousel-example-captions" class=""></li>
          </ol>


          <?php 
          if (have_rows('slider_images', 'option')): ?>

            <div class="carousel-inner"> 

              <?php
              $flag = 1;

              while (have_rows('slider_images', 'option')): the_row();
                // vars
                $home_slider_backgroud = get_sub_field('slider_image', 'option'); 
                ?>
                <div class="<?php echo ($flag == 1) ? 'active' : ''; ?> carousel-item">
                
                  <div class="carousel-caption">
                    <img src="<?php echo $home_slider_backgroud; ?>">
                  </div>
                </div>

                  <?php 
                $flag++;
              endwhile; ?>

            </div>
            <?php
          endif;
          ?>

          <a data-slide="prev" role="button" href="#carousel-example-captions" class="left carousel-control">
            <img src="<?php echo get_template_directory_uri(); ?>/images/new_arow.png" class="leftic" style="">
          </a>
          <a data-slide="next" role="button" href="#carousel-example-captions" class="right carousel-control">
             <img src="<?php echo get_template_directory_uri(); ?>/images/new_arow.png" class="rightic">
          </a>

          <div class="cooming_soon_part">
              <div class="background_coming_soon">
                  <p><span><img src="<?php echo get_template_directory_uri(); ?>/images/brush_icon.png"></span>New website is coming soon!</p>
              </div>  
          </div>
        </div>

        <div class="bottem_aroow">
          <a class="ct-btn-scroll ct-js-btn-scroll" href="#section1"><img alt="Arrow Down Icon" src="<?php echo get_template_directory_uri(); ?>/images/dawon_arow.png"></a>
          <script>
            $(document).ready(function () {

              $("a.ct-btn-scroll").on('click', function (event) {

                if (this.hash !== "") {

                  event.preventDefault();
                  var hash = this.hash;

                  $('html, body').animate({

                    scrollTop: $(hash).offset().top

                  }, 800, function () {

                    window.location.hash = hash;

                  });
                }

              });
            });
          </script>
        </div> 
      </div>

      <!-- <div class="fixd_header_part">  
        <header>
          <div class="header_background_color">
              <div class="container_fuild">
                  <div class="left_part_logo">
                    <img src="images/logo_img.png">
                  </div> 

                  <div class="right_nav_menu_part">
                    <div class="navigetion_menu">
                      
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>                        
                        </button>
                      </div>

                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                          <li><a href="#">About</a></li>
                          <li><a href="#">Contact</a></li>
                        </ul>
                      </div>
                    </div>  
                  </div> 
              </div>  
            </div>
        </header>
      </div> -->
