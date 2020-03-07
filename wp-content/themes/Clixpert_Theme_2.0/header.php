<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php wp_title(''); ?></title>
<meta name="format-detection" content="telephone=no"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory')?>/images/favicon32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory')?>/images/favicon96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory')?>/images/favicon16.png">


<link href="<?php bloginfo('template_directory')?>/style.css" rel="stylesheet" type="text/css">


<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2QCTZ5');</script>
<!-- End Google Tag Manager -->
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106554089-1"></script>
	
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1596030517207977');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1596030517207977&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2QCTZ5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <div class="wid wid-top" style="width: 100%;">
        <div class="logo logo-desktop">
            <a href="<?php echo get_option('home'); ?>" title="<?php bloginfo(); ?>">
                <img src="<?php bloginfo('template_directory')?>/images/BIP_auto_parts_and_repairs_logo-01.png" alt="<?php bloginfo(); ?>" title="<?php bloginfo(); ?>">
            </a>
        </div>
        <div class="locationHed">
            <a href="https://www.google.com/maps/place/61+Westwood+Dr,+Ravenhall+VIC+3023/@-37.763792,144.7502243,17z/data=!3m1!4b1!4m5!3m4!1s0x6ad68acdf930613f:0x98c6b6c92f9ca72e!8m2!3d-37.763792!4d144.752413"
               title="<?php  echo get_option('phone'); ?>"><?php echo "61 Westwood Drive (Ravenhall) Deer Park VIC 3023"; ?></a>
        </div>
        <div class="phoneHed">
            <a href="tel:<?php echo str_replace(array(" ","(",")"),"",get_option('phone')); ?>" title="<?php  echo get_option('phone'); ?>"><?php echo get_option('phone'); ?></a>
        </div>
    </div>
    <div class="wid wid-menu" style="background-color: #ffe000;">
        <div class="logo logo-mobile">
            <a href="<?php echo get_option('home'); ?>" title="<?php bloginfo(); ?>">
                <img src="<?php bloginfo('template_directory')?>/images/BIP_auto_parts_and_repairs_logo-01.png" alt="<?php bloginfo(); ?>" title="<?php bloginfo(); ?>">
            </a>
        </div>
        <div class="menuPhone">
            <div class="menuD">
                <a href="#menu" id="nav-toggle" class="menu-link">
                    <span></span>
                </a>
                <nav id="menu" class="menu">
                    <ul class="level-01">
                        <?php   wp_nav_menu(array('theme_location'=>'header_menu','container'=>'','items_wrap'=>'%3$s'));?>
                    </ul>
                </nav>
            </div>

        </div>
<!--        <div class="reqQt MobQt">-->
<!--            <a href="/request-a-quote/" title="Request a Quote">Request a Quote</a>-->
<!--        </div>-->
    </div>
</header>





