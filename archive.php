<?php
get_header();
if(have_posts()) :
	?>
    <h2><?php
        if( is_category()){
            single_cat_title();
        }elseif( is_tag()){
            sinngle_tag_title();
        }elseif( is_author()){
            the_post();
            echo'Author Archives:' .get_the_author();
        }elseif( is_day()){
            echo 'Daily Archive:' .get_the_date();
        }elseif( is_month()){
            echo 'Monthly Archive:' .get_the_date('F Y');
        }elseif( is_year()){
            echo'Yearly Archive:' .get_the_date('Y');
        } else {
            echo'Archives:';
        }
    ?></h2>
    while (have_posts()) : the_post(); ?>
    
    <article class="post">

	    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
	    <?php the_excerpt(); ?>

    </article>
<?php
    endwhile;
else:
	echo "<p>No content found</p>";
endif;
get_footer();

?>