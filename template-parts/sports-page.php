<?php
/*
Template Name:Sports page
*/
get_header();
//$category=get_queried_object();
$args=array(
    'category_name'=>'sports',
    'post_per_page'=>-1
);

 $query=new WP_Query($args);
 var_dump($query);
 exit();
//start the wordpress loop
if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();

        the_title('<h2>','</h2>');
        the_content();
    }
}else{
    echo'<p>No posts found.</p>';
}
wp_reset_postdata();
get_footer();
?>