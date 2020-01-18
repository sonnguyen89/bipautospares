<?php /* Template Name: Gallery */get_header(); ?>
<section class="innerbanner" <?php if(has_post_thumbnail()) { ?> style="background:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);" <?php } else { ?> style="background-image:url(<?php bloginfo('template_directory')?>/images/innerbanner.png);" <?php } ?>>

<div class="wid">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="contctCls"><?php the_title(); ?></h1>

<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<?php endwhile; endif; ?>

</div>
</section>    
<section class="photogal">
<div class="wid">
<div class="fetrhed"><span>Photo </span>gallery</div>


<div class="inGalery baguetteBoxOne">

    <ul>
    <?php 
		$imgGal = get_post_meta(154, 'gallery_images', true ); 
		if($imgGal!="") {
		foreach($imgGal as $key=>$value){
            $img_url       = wp_get_attachment_image_url( $value['galimage'],'gallery_images' );
			$thumb_img_url = wp_get_attachment_image_url( $value['galimage'],'galthumb'); 

            $imgid     = get_attachment_id_from_src( $img_url);
            $imgtitle  = get_post($imgid)->post_title;
            $thumbnail = get_post($imgid);
            $alt       = get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );		
    ?>
    
 	<li class="imgWrap">
    <a href="<?php echo $img_url; ?>" title="<?php echo $imgtitle; ?>" data-caption="">
    <img src="<?php echo $thumb_img_url; ?>" alt="<?php echo $imgtitle; ?>" title="<?php echo $imgtitle; ?>" />
    </a>
    </li>    
    
    <?php } } ?>
    </ul>



</div>


</div>
</section>
<?php get_footer(); ?>
