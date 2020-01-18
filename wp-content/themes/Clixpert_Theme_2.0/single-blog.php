<?php get_header(); ?>

    
<section class="innerbanner" style="background-image:url(<?php bloginfo('template_directory')?>/images/innerbanner.png);">

<div class="wid">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>





<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<?php endwhile; endif; ?>

</div>
</section>    
<section class="innersection">
<div class="wid">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

</div>


<?php endwhile; endif; ?>
</div>
</section> 
<?php get_footer(); ?>  
