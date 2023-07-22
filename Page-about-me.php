<?php
get_header();
?>
<div >
   <?php
  	$slide=new WP_Query(array(
	'post_type'=>'page'
	));
	while($slide-> have_posts()){
		$slide->  the_post();
	}
   ?> 
   <div class="slide-item" >
	
       <p>
        <?php
        echo get_the_content();
        ?>
       </p>
   <div>


<div>
<?php
get_footer();
?>