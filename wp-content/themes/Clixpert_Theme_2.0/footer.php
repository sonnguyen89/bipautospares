<footer>
<div class="wid">
<div class="foot">
<div class="footHed">Menu</div>
<ul>
<?php   wp_nav_menu(array('theme_location'=>'information_menu','container'=>'','items_wrap'=>'%3$s'));?>
</ul>
</div>

<div class="foot">
<div class="footHed">Contact Us</div>
<p><strong>Address</strong></p>
<span><?php echo get_option('address'); ?></span>
<p><strong>Phone</strong></p>
<span><a href="tel:<?php echo str_replace(array(" ","(",")"),"",get_option('phone')); ?>" title="<?php echo get_option('phone'); ?>"><?php echo get_option('phone'); ?></a></span>
<p>ABN: 61 634 082 625</p>
</div>

<div class="foot">
<div class="footHed">Location</div>
<div class="gmapimg"><?php echo get_option('gmapfoot'); ?></div>
</div>
<div class="foot">
<div class="footHed"><a href="<?php echo get_page_link(19); ?>" title="Reviews">Reviews</a></div>
<ul id="reviews" class="content-slider">
<?php query_posts('post_type=Reviews');?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<li>
<p><a href="<?php echo get_page_link(19); ?>" title="Reviews"><?php $a=$post->post_content; $b=substr($a,0,200); echo $b;?></a></p>
<span><?php the_title();?></span>
</li>
<?php  endwhile; ?><?php endif;  ?>
<?php wp_reset_query();?>
</ul>
</div>
<div class="socilmedia">
<ul>
<li><a href="<?php echo get_option('fb_url'); ?>" target="_blank" title="Facebook"></a></li>
<li><a href="<?php echo get_option('twt_url'); ?>" target="_blank" title="Twitter"></a></li>
<li><a href="<?php echo get_option('insta_url'); ?>" target="_blank" title="Instagram"></a></li>
</ul>

<div class="cpyryt">
COPYRIGHT <?php echo date('Y'); ?> ALL RIGHTS RESERVED. <a href="https://www.clixpert.com.au" title="WEBSITE BY AN AWARD WINNING AGENCY - CLIXPERT " target="_blank" rel="nofollow">WEBSITE BY AN AWARD WINNING AGENCY - CLIXPERT</a>
</div>

</div>


</div>
</footer>
<?php wp_footer() ?>

<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/toggle-nav.js"></script>



</body>
</html>

 
