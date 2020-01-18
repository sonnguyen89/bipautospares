<?php 
add_action('admin_menu', 'waz_create_menu');
function waz_create_menu() {

	//create new top-level menu
	add_menu_page('Theme Settings', 'ThemeOptions', 'administrator', __FILE__, 'waz_settings_page',get_stylesheet_directory_uri('stylesheet_directory')."/images/icon.png",1);

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}
function register_mysettings() {
	//register our settings
	register_setting( 'waz-settings-group', 'fb_url' );
	register_setting( 'waz-settings-group', 'twt_url' );
	register_setting( 'waz-settings-group', 'insta_url' );
register_setting( 'waz-settings-group', 'address' );
register_setting( 'waz-settings-group', 'map' );
register_setting( 'waz-settings-group', 'gmapfoot' );
register_setting( 'waz-settings-group', 'phone' );
register_setting( 'waz-settings-group', 'fax' );
register_setting( 'waz-settings-group', 'email' );
register_setting( 'waz-settings-group', 'sitecash' );
	
}
function waz_settings_page() {
?>
<div class="wrap">
<h2><b style="color:#F00;">Theme Option</b></h2>
<form method="post" action="options.php">
    <?php settings_fields( 'waz-settings-group' ); ?>
   <?php /*?> <?php do_settings( 'waz-settings-group' ); ?><?php */?>
   <table>
    <tr valign="top">
    
        <th scope="row" style="color:#f7941e;">FaceBook URL::</th>
        <td><input type="text" name="fb_url" value="<?php echo get_option('fb_url'); ?>"  style="width:350px;" /></td>
    </tr>
<tr valign="top">
    
        <th scope="row" style="color:#f7941e;">Twitter URL::</th>
        <td><input type="text" name="twt_url" value="<?php echo get_option('twt_url'); ?>"  style="width:350px;" /></td>
    </tr>
<tr valign="top">
    
        <th scope="row" style="color:#f7941e;">Istagram URL::</th>
        <td><input type="text" name="insta_url" value="<?php echo get_option('insta_url'); ?>"  style="width:350px;" /></td>
    </tr>
<tr valign="top">
    
        <th scope="row" style="color:#f7941e;">Price::</th>
        <td><input type="text" name="sitecash" value="<?php echo get_option('sitecash'); ?>"  style="width:350px;" /></td>
    </tr>
<tr valign="top">
    
        <th scope="row" style="color:#f7941e;">Email::</th>
        <td><input type="text" name="email" value="<?php echo get_option('email'); ?>"  style="width:350px;" /></td>
    </tr>
    <tr valign="top">
    
        <th scope="row" style="color:#f7941e;">Map::</th>
        <td><textarea name="map" style="height:170px; width:350px;"><?php echo get_option('map'); ?></textarea></td> 
    </tr>
    
    <tr valign="top">
    
        <th scope="row" style="color:#f7941e;">Google Map Image::</th>
        <td><textarea name="gmapfoot" style="height:170px; width:350px;"><?php echo get_option('gmapfoot'); ?></textarea></td> 
    </tr>
    
<tr valign="top">
    
        <th scope="row" style="color:#f7941e;">Address::</th>
        <td><textarea name="address" style="height:170px; width:350px;"><?php echo get_option('address'); ?></textarea></td> 
    </tr>
     <tr valign="top">
    
        <th scope="row" style="color:#f7941e;">Fax::</th>
        <td><input type="text" name="fax" value="<?php echo get_option('fax'); ?>"  style="width:350px;" /></td>
    </tr>
       <th scope="row" style="color:#f7941e;">Phone::</th>
        <td><input type="text" name="phone" value="<?php echo get_option('phone'); ?>"  style="width:350px;" /></td>
     </tr>
     </tr>
     
     </tr>
         </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>
<?php } ?>
