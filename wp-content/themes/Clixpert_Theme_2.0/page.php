<?php get_header(); 

include('shortcode.php');

?>

 <?php 

 $cls = "";

 $pageid = $post->ID;

	if($pageid == 20 || $pageid == 189 || $pageid == 187 || $pageid == 16 || $pageid == 19 || $pageid == 154){ 

	$cls ="contctCls";

	}

	if($pageid == 8){ 

	$cls ="threeLine";

	}

  ?>

    

<section class="innerbanner" <?php if(has_post_thumbnail()) { ?> style="background:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);" <?php } else { ?> style="background-image:url(<?php bloginfo('template_directory')?>/images/innerbanner.png);" <?php } ?>>



<div class="wid">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if($pageid = 189){ ?>
<h1 class="contacthead" ><?php the_title(); ?></h1>

<?php } else { ?>

<h1 class="<?php echo $cls; ?>" ><?php the_title(); ?></h1>

<?php } ?>


<?php if($pageid != 20){ ?>

<div class="reqQt innpgQt">

<a href="/request-a-quote/" title="Request a Quote">Request a Quote</a>

</div>

<?php } ?>





<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>



<?php endwhile; endif; ?>



</div>

</section>    

<section class="innersection">

<div class="wid">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<?php $partners = get_post_meta($post->ID, 'bipautoparts', true ); 

if( !empty ( $partners ) ) 

{

?>

<div class="pageimgs deskGal">	   
<div class="inGalery baguetteBoxOne">

<ul>

        <?php foreach($partners as $key=>$value)

	{

	?> 

	<?php $img_url = wp_get_attachment_image_url( $value['bip-auto-parts-image'],'' ); 	        
			$imgid     = get_attachment_id_from_src( $img_url);
            $imgtitle  = get_post($imgid)->post_title;
            $thumbnail = get_post($imgid);
            $alt       = get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );	

	
?>

	 

 	<li class="imgWrap">
    <a href="<?php echo $img_url; ?>" title="<?php echo $imgtitle; ?>" data-caption="">
    <img src="<?php echo $img_url; ?>" alt="<?php echo $imgtitle; ?>" title="<?php echo $imgtitle; ?>" />
    </a>
    </li>    

     

 	<?php 

	}

 	?>

</ul>

</div>

</div>



<?php

} 

?>





<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>



<?php $partners = get_post_meta($post->ID, 'bipautoparts', true ); 

if( !empty ( $partners ) ) 

{

?>

<div class="pageimgs mobilGal">	   
<div class="inGalery baguetteBoxOne">

<ul>

        <?php foreach($partners as $key=>$value)

	{

	?> 

	<?php $img_url = wp_get_attachment_image_url( $value['bip-auto-parts-image'],'' ); 
	
	        $imgid     = get_attachment_id_from_src( $img_url);
            $imgtitle  = get_post($imgid)->post_title;
            $thumbnail = get_post($imgid);
            $alt       = get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );	

	
	?>

 	<li class="imgWrap">
    <a href="<?php echo $img_url; ?>" title="<?php echo $imgtitle; ?>" data-caption="">
    <img src="<?php echo $img_url; ?>" alt="<?php echo $imgtitle; ?>" title="<?php echo $imgtitle; ?>" />
    </a>
    </li>    


     

 	<?php 

	}

 	?>

</ul>

</div>

</div>



<?php

} 

?>





<?php endwhile; endif; ?>

</div>

</section>   



<!-- end right sidebar -->



<?php get_footer(); ?>

