=== WordPress Courier ===
Contributors: William P. Davis
Donate link: http://wpdavis.com/courier
Tags: mail, e-mails, newsletters, newsletter, newspaper
Requires at least: 2.7
Tested up to: 2.9
Stable tag: 0.3.6

A better subscription plugin for newspapers.

== Description ==

WordPress Courier allows you to send fully customizable e-mails.

Tags: mail, e-mails, subscribe, newsletters, newsletter, newspaper, magazinel, courier

== Installation ==

Drag the courier folder into your plugins folder (not your mu-plugins folder).

Put the internal folder named courier in the wp-content/themes folder.

Activate the plugin. On activation, two e-mail categories will automatically be created for you -- breaking news and a per-issue e-mail edition. There will be basic templates in the themes folder for those two categories, though they will require a little bit of customization, and I highly recommend creating your own. Please note: you will have to have a theme folder and file for each category, even if you just want to start with a blank e-mail.

Set the e-mail settings, such as the from field and e-mail footer.

Place the [courier] shortcode in a page and you're ready to go.

Read on-importing.txt for step-by-step instructions on how to import your users.

== Changelog ==

= 0.3.3 =
* Adds Courier sidebar widget
* Fixes incompatibility introduced in 0.3 with MU
* Removes exit from the register form

= 0.3 =
* Introduces queueing
* Allows WordPress uses to subscribe inside their accounts
* Allows users to test with their own e-mail before deploying.

= 0.2a =
* Added support for people using WP Mail SMTP

= 0.1 =
* Switched everything from WP_Mailer to Courier
* Renamed "categories" to "editions"
* Moved the themes folder to wp-content/themes and renamed it courier

= 0.1b =
* Added import function
* Added ability to delete categories from admin panel
* Added ability to purge unverified users
* Cleaned up code

== Upgrade Notice ==
= 0.3.3 =
Critical update for MU users; introduces the sidebar widget.

= 0.3 =
Introduces queueing, which dramatically increases stability, and WordPress user integration.

== Frequently Asked Questions ==

Q: Can I import my subscribers from College Publisher and Feedburner?
A: Yes, see on-importing.txt

== Next features ==
First priority: Queuing

* Text edition
* URL shortening, with options for different services and compatibility with Short URL Plugin.
* Send out e-mails from specific categories automatically
* Detailed analytics, including bounces, unsubscribes, clicks, etc.
* HTML edition supports widgets, so you can add most popular, recent comments etc.
* SMS text integration
* Scheduled e-mails

== Screenshots == 
1. The admin panel
	