<?php
get_header();
?>
<div >
   <?php
  	$slide=new WP_Query(array(
	'post_type'=>'slider'
	));
	while($slide-> have_posts()){
		$slide->  the_post();
	}
   ?> 
   
   <section id="slider">
    <div class="slider-container">
      <div id="sliderCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="slider-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

 
          <div class="carousel-item active" style="background-image: url(<?php  echo get_the_post_thumbnail_url(get_the_id());  ?>);" >
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><?php echo get_the_title();?></h2>
                <p class="animate__animated animate__fadeInUp"><?php echo get_the_content();?></p>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#sliderCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#sliderCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End slider -->





<div>
<?php
get_footer();
?>