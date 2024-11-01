<?php
/*
Plugin Name: WP Payeezy Donate
Version: 1.4
Plugin URI: https://wordpress.org/plugins/wp-payeezy-pay/
Description: This plugin has been merged with <a href="https://wordpress.org/plugins/wp-payeezy-pay/" target="_blank">WP Payeezy Payment Page</a>. Please download it and install it.
Author: Richard Rottman
Author URI: http://www.richard-rottman.com/
*/

function wppayeezydonationform() {

$x_login = get_option('x_login') ;
$transaction_key = get_option('transaction_key') ;
$x_recurring_billing_id = get_option('x_recurring_billing_id') ;
$x_user1 = get_option('x_user1') ;
$x_user2 = get_option('x_user2') ;
$x_user3 = get_option('x_user3') ;
$x_po_num = get_option('x_po_num');
$x_reference_3 = get_option('x_reference_3');
$mode = get_option ('mode') ;

$donate_file = plugins_url('wp-payeezy-donate/donate.php');
ob_start();
?>
<div id="wp_payeezy_donation_form">
<form action="<?php echo $donate_file;?>" method="post">
<input name="x_login" value="<?php echo $x_login;?>" type="hidden" > 
<input name="transaction_key" value="<?php echo $transaction_key;?>" type="hidden" >
<input name="x_recurring_billing_id" value="<?php echo $x_recurring_billing_id;?>" type="hidden" >
<input name="mode" value="<?php echo $mode;?>" type="hidden" >
<?php
echo '<p><label>First Name</label><input name="x_first_name" value="" type="text"></p>'; 
echo '<p><label>Last Name</label><input name="x_last_name" value="" type="text"></p>'; 
echo '<p><label>Email</label><input name="x_email" value="" type="text"></p>';
echo '<p><label>Phone</label><input name="x_phone" value="" type="text"></p>';
echo '<p><label>Comment</label><input name="x_invoice_num" value="" type="text"></p>';
if (!empty($x_po_num)) {
    echo '<p><label>';
	echo $x_po_num;
	echo '</label>';
	echo '<input name="x_po_num" value="" type="text" required>';
	echo '</p>';
}
else {
	echo '<input name="x_po_num" value="" type="hidden" required>';
	}
	
	if (!empty($x_reference_3)) {
    echo '<p><label>';
	echo $x_reference_3;
	echo '</label>';
	echo '<input name="x_reference_3" value="" type="text" required>';
	echo '</p>';
}
else {
	echo '<input name="x_reference_3" value="" type="hidden">';
	}
	
	
if (!empty($x_user1)) {
    echo '<p><label>';
	echo $x_user1;
	echo '</label>';
	echo '<input name="x_user1" value="" type="text" required>';
	echo '</p>';
}
else {
	echo '<input name="x_user1" value="" type="hidden">';
	}

if (!empty($x_user2)) {
    echo '<p><label>';
	echo $x_user2;
	echo '</label>';
	echo '<input name="x_user2" value="" type="text" required>';
	echo '</p>';
}
else {
	echo '<input name="x_user2" value="" type="hidden">';
	}

if (!empty($x_user3)) {
    echo '<p><label>';
	echo $x_user3;
	echo '</label>';
	echo '<input name="x_user3" value="" type="text">';
	echo '</p>';
}
else {
	echo '<input name="x_user3" value="" type="hidden">';
	}
echo '<label>Donation Amount</label><br>';
echo '<input type="radio" name="x_amount1" value="10.00"> $10<br>';
echo '<input type="radio" name="x_amount1" value="25.00"> $25<br>';
echo '<input type="radio" name="x_amount1" value="50.00"> $50<br>';
echo '<input type="radio" name="x_amount1" value="75.00"> $75<br>';
echo '<input type="radio" name="x_amount1" value="100.00"> $100<br>';
echo '<input type="radio" name="x_amount1" value="0.00"> Other $ <input id= "other" type="text" name="x_amount2" value="" size="6"><br>';
echo '<br>';
echo '<br>';
echo '<p><input type="checkbox" name="recurring" value="TRUE">&nbsp;Automatically repeat this donation once a month, beginning in 30 days.</p>';
echo '<br>';
echo '<p><input type="submit" value="Donate Now"></p>';
echo '</form>';
echo '</div>';
return ob_get_clean();
}


// create custom plugin settings menu
add_action('admin_menu', 'wppayeezydonate_create_menu');

function wppayeezydonate_create_menu() {

	//create new top-level menu
	add_menu_page('WP Payeezy Donate Settings', 'WP Payeezy Donate', 'administrator', __FILE__, 'wppayeezydonate_settings_page' );

	//call register settings function
	add_action( 'admin_init', 'register_wppayeezydonate_settings' );
}

add_shortcode('wp_payeezy_donation_form', 'wppayeezydonationform');

function register_wppayeezydonate_settings() {
	//register our settings
	register_setting( 'wppayeezydonate-group', 'x_login' );
	register_setting( 'wppayeezydonate-group', 'transaction_key' );
	register_setting( 'wppayeezydonate-group', 'x_recurring_billing_id' );
	register_setting( 'wppayeezydonate-group', 'mode' );
	register_setting( 'wppayeezydonate-group', 'x_user1' );
	register_setting( 'wppayeezydonate-group', 'x_user2' );
	register_setting( 'wppayeezydonate-group', 'x_user3' );
	register_setting( 'wppayeezydonate-group', 'x_po_num' );
	register_setting( 'wppayeezydonate-group', 'x_reference_3' );
	}

function wppayeezydonate_settings_page() {
?>
<div class="wrap">
<h2>WP Payeezy Donate</h2>
<div style="background: none repeat scroll 0 0 #FFFFFF;border: 5px solid #666;width:500px;color: #3F2502;margin: 10px 0;padding: 30px;text-shadow: 1px 1px #FFFFFF;">		
 	Hi!<br>
<br>
I merged this plugin with my other plugin, WP Payeezy Payment Page. When you get a chance, please download and install it. It does everything this plugin does, and even more.<br>
<br>
I merged the two plugins because it will make it easier for me to maintain and support one plugin instead of two. If I can be of any help switching to WP Payeezy Payment Page, please let me know, I'll be happy to assist.<br>
<br>
Thanks,<br>
Richard Rottman<br>
<p><a href="mailto:rlrottman@gmail.com">rlrottman@gmail.com</a> </p>
<h3><a href="https://wordpress.org/plugins/wp-payeezy-pay/" target="_blank">Download WP Payeezy Payment Page Now</a></h3>
 </div>

<h3>Required Settings</h3>
<form method="post" action="options.php">
    <?php settings_fields( 'wppayeezydonate-group' ); ?>
    <?php do_settings_sections( 'wppayeezydonate-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Payment Page ID</th>
        <td><input type="text" name="x_login" value="<?php echo esc_attr( get_option('x_login') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Transaction Key</th>
        <td><input type="text" name="transaction_key" value="<?php echo esc_attr( get_option('transaction_key') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Recurring Billing ID</th>
        <td><input type="text" name="x_recurring_billing_id" value="<?php echo esc_attr( get_option('x_recurring_billing_id') ); ?>" /></td>
        </tr>
		
		<tr valign="top">
        <th scope="row">Mode</th>
        <td><select name="mode"/>
				<option value="live" <?php if( get_option('mode') == "live" ): echo 'selected'; endif;?> >Live</option>
				<option value="demo" <?php if( get_option('mode') == "demo" ): echo 'selected'; endif;?> >Demo</option>
			</select></td>
		</tr>
</table>
		<hr>

<h3>Optional Payment Form Fields</h3>		
	 <table class="form-table">
		<tr valign="top">
		<em>If you would like to use any of these fields, assign a name to them<br>and they will appear on your payment form. Do not assign a name,<br>and they will not show on your form.</em> 
		</tr>
				
		<tr valign="top">
        <th scope="row">x_po_num</th>
        <td><input type="text" name="x_po_num" value="<?php echo esc_attr( get_option('x_po_num') ); ?>" /></td>
		</tr>
		
		<tr valign="top">
        <th scope="row">x_reference_3</th>
        <td><input type="text" name="x_reference_3" value="<?php echo esc_attr( get_option('x_reference_3') ); ?>" /></td>
		</tr>
		
		<tr valign="top">
        <th scope="row">User Defined 1</th>
		<td><input type="text" name="x_user1" value="<?php echo esc_attr( get_option('x_user1') ); ?>" /></td>
		</tr>
		
		<tr valign="top">
        <th scope="row">User Defined 2</th>
        <td><input type="text" name="x_user2" value="<?php echo esc_attr( get_option('x_user2') ); ?>" /></td>
		</tr>
		
		<tr valign="top">
        <th scope="row">User Defined 3</th>
        <td><input type="text" name="x_user3" value="<?php echo esc_attr( get_option('x_user3') ); ?>" /></td>
		</tr>
		
		<hr>
		
	</table>
	    
    <?php submit_button(); ?>

</form>
<div style="background: none repeat scroll 0 0 #FFFFFF;border: 5px solid #666;width:500px;color: #3F2502;margin: 10px 0;padding: 30px;text-shadow: 1px 1px #FFFFFF;">		
<p>To add the Payeezy donation form to a Page or a Post, add the following <a href="https://codex.wordpress.org/Shortcode" target="_blank">shortcode</a> in the Page or Post's content:</p>
<p><pre> [wp_payeezy_donation_form] </pre></p>
</div>

</div>
<?php } ?>