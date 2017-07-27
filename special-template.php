<?php
/*
Template Name: Special Layout
*/
get_header();
if(have_posts()) :
    while (have_posts()) : the_post(); ?>
    
    <article class="post about">

	     <h2><?php the_title();?></h2>
       <!-- info-box -->
           <div class="info-box">
             <h4>Disclaimer Title</h4>
             <p>We are inspired by emerging Asia’s energy, dynamism and unique style of thinking, doing and being. In return, we do our best to inspire others – in art, design and new ways of seeing things. There is always a nod to our Asian roots, but our eyes are very much focused on our Asian future.</p>
           </div><!-- info-box -->
           
               <?php the_content(); ?>
         
       	    
    </article>
<?php
    endwhile;
else:
	echo "<p>No content found</p>";
endif;
get_footer();

?>