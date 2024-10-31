=== RSS CORS Enable ===
Contributors: nofrillsplugins
Tags: rss, cors, feeds, rss feed cors, cors header rss
Requires at least: 5.5
Tested up to: 6.5.4
Requires PHP: 5.6
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin adds the necessary CORS (Cross-Origin Resource Sharing) header to your WordPress RSS feed, allowing it to be accessed from any origin.

== Description ==

RSS CORS Enable is a simple yet powerful plugin designed to solve the common problem of accessing WordPress RSS feeds from different origins. By default, accessing WordPress RSS feeds via JavaScript from a domain different than the one where WordPress is hosted can result in Cross-Origin Resource Sharing (CORS) errors. This plugin addresses this issue by adding an `Access-Control-Allow-Origin: *` header to your WordPress RSS feed, making it accessible from any origin.

== Installation ==

1. Upload the `rss-cors-enable` directory to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it! The plugin works out of the box, no configuration is needed.

== Frequently Asked Questions ==

= Can I restrict the RSS feed to be available for specific domains instead of all? =

Yes, although the default behaviour is to allow all origins (`Access-Control-Allow-Origin: *`), you can modify the plugin code to specify specific domains. Replace the `*` in the `header("Access-Control-Allow-Origin: *");` line with the domain you wish to allow. When you do this, it might be wiped away when upgrading the plugin.

= Does this plugin add CORS headers to other parts of my website than the RSS feed? =

No, it shouldn't, as far as we've tested. This plugin is specifically designed to modify only the WordPress RSS feed responses. Other parts of your WordPress site or API will not be affected.

== Changelog ==

= 1.0 =
* Initial release. Adds CORS header to WordPress RSS feeds.

== Upgrade Notice ==

= 1.0 =
This is the first releas.
