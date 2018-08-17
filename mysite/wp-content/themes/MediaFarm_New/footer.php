<?php 

?>
		</div>
	</div>
	<script type="text/javascript">
    lastSlideIndex = 1;
    $('#carousel-example-captions').on('slide.bs.carousel', function () {
        currentIndex = $('div.active').index() + 2;
        console.log(currentIndex);
        //$('.num').html(''+currentIndex+'/'+totalItems+'');
        if (currentIndex == 3) {
            $(".cooming_soon_part").hide();
        } else {
            if (currentIndex <= lastSlideIndex) {
                // $(".cooming_soon_part").show();
            }

        }
        lastSlideIndex = currentIndex;
    });
</script>  
<?php wp_footer(); ?>

   <Script>
      $('.carousel').carousel({
            interval: 6000,
            cycle: true,
            pause: "null"
        })
   </Script> 

</body>
</html>