<?php /* Template Name:Reviews */get_header(); ?>
<section class="innerbanner" <?php if(has_post_thumbnail()) { ?> style="background:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);" <?php } else { ?> style="background-image:url(<?php bloginfo('template_directory')?>/images/innerbanner.png);" <?php } ?>>

<div class="wid">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="contctCls">Reviews</h1>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<?php endwhile; endif; ?>

</div>
</section> 
<section class="innersection">
<div class="wid">
<?php  query_posts('post_type=reviews & order=DESC');if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="blog-post">
<?php the_content(); ?>
<?php the_title(); ?>
</div>

<?php endwhile; endif; ?>
</div>
</section> 
<?php get_footer(); ?>
