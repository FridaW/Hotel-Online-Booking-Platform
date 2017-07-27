<?php
get_header();
if(have_posts()) :
    while (have_posts()) : the_post(); ?>
    
    <article class="post about">
	
       <!-- title-container -->
       <div class="column-container clearfix">
           <!-- title-column -->
           <div class="title-column">
               <h2><?php the_title(); ?></h2>
           </div>
           <!-- text-column -->
           <div class="text-column">
               <?php the_content(); ?>
           </div>
       </div>
       <!-- title-container -->
       	    
    </article>
<?php
    endwhile;
else:
	echo "<p>No content found</p>";
endif;
get_footer();

?>