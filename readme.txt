=== WP Payeezy Donate ===
Contributors: RickRottman
Tags: First Data, Payeezy, Global Gateway e4, Donations, Payments, Hosted Checkout, Payment Page, Recurring, E-Commerce
Requires at least: 3.0.1
Tested up to: 4.3
Stable tag: 1.40
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily connects a WordPress website to a First Data Payeezy Payment Page for accepting Credit Card donations. Easy to configure. No SSL required.
 

== Description ==

Note: This plugin has been replaced with [WP Payeezy Payment Page](https://wordpress.org/plugins/wp-payeezy-pay/). It does everything this one does, plus lots more. Please download it instead of this. I don't plan on updating this plugin, but I will update [WP Payeezy Payment Page](https://wordpress.org/plugins/wp-payeezy-pay/) as needed. 

Plugin creates a shortcode that when placed in the Page or a Post, generates a donation form for a Payeezy Payment Page. The published form includes:

* First Name
* Last Name
* Email Address
* Phone Number
* Comment
* Invoice Number (Optional and can be renamed to something else)
* PO Number (Optional and can be renamed to something else)
* Reference 3 (Optional and can be renamed to something else)
* User Defined 1, User Defined 2, and User Defined 3 (All optional and all can be renamed) 
* The amount to donate. User making the donation can either pick a predefined amount to donate or enter a custom amount.
* User can also choose to make their donation monthly, on an automatic recurring basis, by checking a box. 

Once they have entered their choices, they click the "Donate Now" button. They are then redirected to the secure Payeezy payment form where they finish entering their information including credit card number, expiration date, and security code. The user then clicks "Pay with your credit card" and the payment is made. Once the transaction is complete, the user is provided a receipt. They can then click a button and be redirected back to the original website. 

== Installation ==

**From your WordPress dashboard**

1. Visit 'Plugins > Add New'.

2. Search for 'WP Payeezy Donate'.

3. Activate WP Payeezy Donate from your Plugins page.

**From WordPress.org**

1. Download WP Payeezy Donate.

2. Upload the 'WP Payeezy Donate' directory to your '/wp-content/plugins/' directory, using your favorite method (ftp, sftp, scp, etc...).

3. Activate WP Payeezy Donate from your Plugins page. 

**Once Activated**

1. Visit 'Menu > WP Payeezy Donate > and enter the Payment Page ID, Transaction Key, and the Recurring Billing ID. All these values are obtained in Payeezy. Note: The Recurring Plan on Payeezy needs to have its Frequency set to Monthly. 

2. Chose the Mode you wish to use, Live for a production account, one that actually processes credit cards, or Demo for a non-production testing account.

3. Press 'Save Settings'.


**Once Configured**

1. To add a donation form to a Post or a Page, simply add the '[wp_payeezy_donation_form]' shortcode to content. 

2. Publish the Post or Page. 

3. That's it! 


== Frequently Asked Questions ==

= Is this plugin an official First Data Payeezy product? =

No. This plugin is independent of First Data Payeezy, but was built using their [sample code](https://support.payeezy.com/hc/en-us/articles/204011429-Sample-Code-for-Creating-a-Pay-Button-to-use-with-a-Hosted-Payment-Page). 

= Can I style the donation form? =

Yes. [Here is a copy of the css I use](http://bentcorner.com/my-plugins/wp-payeezy-donate/style.txt), feel free to modify as you see fit.

= How can I use this plugin to accept payments, not donations? =

It's geared for taking donations. If you'd like assistance with a payment form for your organization or business, [feel free to contact me.](http://bentcorner.com/wp-payeezy-donate/) 

== Screenshots ==

1. WP Payeezy Donate Settings.
2. The shortcode `[wp_payeezy_donation_form]` added to a post.
3. The published donation form ready to be used by someone wishing to make a donation. 
4. Where to get the values for Payment Page ID and Transaction Key within Payeezy, Payment Pages > The Payment Page > Security. 
5. Where to get the value for Recurring Billing ID within Payeezy, Recurring > The Recurring Plan. 

== Changelog ==

= 1.0 =
* Initial release.

= 1.1 =
* Changed "Comment" to output as Reference Number in Payeezy. Now the comment will display on the receipt and show on the front page of Transactions. 
* Added Phone Number.
* Corrected a missing paragraph closing tag. 

= 1.2 =
* Corrected a typo that caused a problem processing the phone number. 

= 1.35 =
* Added Invoice Number, PO Number, Reference 3, User Defined 1, User Defined 2, and User Defined 3. 

== Upgrade Notice ==

= 1.1 =
Added Phone to the donation form's entry fields. Also changed the way the Comment is handled for better functionality. 

= 1.2 =
* Phone field wasn't working because of a typo. 

= 1.35 =
* Added Invoice Number, PO Number, Reference 3, User Defined 1, User Defined 2, and User Defined 3. 