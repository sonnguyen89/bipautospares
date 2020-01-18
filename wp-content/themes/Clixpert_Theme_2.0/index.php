<?php /* Template Name: Home */get_header(); ?>

<div class="staticbanner">
<div class="bancption">
<?php 
	 $bantitle = get_post_meta($post->ID, 'bip-banner-section-title', true );
	$bandesc = get_post_meta($post->ID, 'bip-banner-section-description', true );
?>

<h1 class="banhed"><?php echo $bantitle; ?></h1>
<?php echo $bandesc; ?>
</div>
<div class="reqQt homQt">
<a href="/request-a-quote/" title="Request a Quote">Request a Quote</a>
</div>

</div>
<!--================ FEATURE ============= -->
<section class="feATURE">
<div class="wid">
<div class="fetrhed"><span>Featured</span> Parts</div>
<ul>
<?php $partners = get_post_meta($post->ID, 'bipautoparts', true ); 
if( !empty ( $partners ) ) {
      foreach($partners as $key=>$value){
 $img_url = wp_get_attachment_image_url( $value['bip-auto-parts-image'],'bipautoparts' );
 $title = $value['bip-auto-parts-title'];
 $subcontent = $value['bip-auto-parts-sub-content'];
 ?>
<li>
<img src="<?php echo $img_url; ?>" alt="<?php echo strip_tags($title); ?>" title="<?php echo strip_tags($title); ?>">
<div class="fetcnt">
<p><?php echo $title; ?></p>
</div>
</li>
<?php } } ?>
</ul>
</div>
</section>
<!--================ PARALX BANNER =============-->

<section class="prlx">
<div class="wid">
<?php if (have_posts()) : while (have_posts()) : the_post();?>        
		<div class="bipptshed"><?php the_title(); ?></div>
        <?php 
		the_content();
endwhile; endif; wp_reset_query(); ?>

</div>
</section>

<!--================ BRANDS =============-->
<!-- ================ PHOTO GALLERY ============= -->

<section class="photogal">
<div class="wid">
<div class="fetrhed"><span>Photo </span>gallery</div>
<div class="inGalery baguetteBoxOne">

    <ul>
    <?php 
		$imgGal = get_post_meta(154, 'gallery_images', true ); 
		if($imgGal!="") {
		$i=0;
		foreach($imgGal as $key=>$value){
			if($i<12){
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
    
    <?php  $i++; }  } } ?>
    </ul>



</div>
</div>
</section>
<?php get_footer(); ?>