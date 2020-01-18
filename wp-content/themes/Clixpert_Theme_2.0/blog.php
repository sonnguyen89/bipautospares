<?php /* Template Name:Blog */get_header(); ?>
<section class="innerbanner" style="background-image:url(<?php bloginfo('template_directory')?>/images/innerbanner.png);">

<div class="wid">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="contctCls"><?php the_title(); ?></h1>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<?php endwhile; endif; ?>

</div>
</section> 
<section class="innersection">
<div class="wid">
<?php query_posts('post_type=blog & orderby=date & order=DESC'); if(have_posts()):
                  while(have_posts()) : the_post();?>
                   <div class="blog-post">
                     <div class="blog-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
                     <div class="postd">Posted On <?php the_time('F jS, Y') ?></div>
                     <div class="blgcont">
                     <p><?php $a=$post->post_content; $b=substr($a,0,200); echo $b;?></p>
                     </div>
                     <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="rdmr">Read More</a>
                   </div>
            <?php endwhile;endif; wp_reset_query(); ?>
</div>
</section>
<?php get_footer(); ?>
