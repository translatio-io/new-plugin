=== Translatio ===
Contributors: yushao
Donate link: https://github.com/translatio-io/translatio
Tags: translation, localization, multilingual, woocommerce, language
Requires at least: 5.0
Tested up to: 6.0.2
Stable tag: 1.9.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Make your website multilingual ready with ease using live translation or support for a full translation cycle, with machine translation integration.

== Description ==

Translatio is an open source tool for internationalization and localization of WordPress based websites. Translatio provides two translation workflows:

* Live Translation workflow
* Full Professional Translation workflow

Live translation workflow provides instant translation using the Google Translate engine. Configure the extra languages you want to support through the interface and save.

Full Professional workflow provides more control and higher translation quality. The workflow involves extracting the text for translation, translating and integrating this back into WordPress. Translatio stores your translations locally in WordPress for proof reading, editing and final publication. You can also intergrate a machine translation application of your choice to prepare your contents, then leverage a fully featured translation editor of your choice.

Translatio provides multiple ways to handle different development phases of the WordPress websites with intuitive and easy to use interfaces, some features include:

* Live Translation powered by Google Translate
* Support for Taxonomies translation, including Categories and Tags
* Support for WooCommerce 
* Translations kept locally in your personal WordPress instance for proof reading, editing and publishing
* Support for Search Engeine Optimizaion/SEO URL
* Support for the new block Gutenberg editor and classic editor
* Support for Google Translate integration with editing capability
* Language switcher placement options:
  * Draggable floating meanu
  * Sidebar widget
  * Along with title or description
  * With any page or post
* Language switcher can bet setup to use the language name or country flags
* Detect browser language setting
* Support browser cookie
* Premium service available
* Live support community

== Installation ==

1. Install and Activate "Translatio" from the WordPress Plugin directory
1. Setup the plugin from Translatio -> Translatio Setup

More information at [Translatio Plugin for Wordpress Getting Started & FAQ](https://github.com/translatio-io/translatio)

== Frequently Asked Questions ==

= There is no translation after I complete Translatio setup 

Make sure you have enabled translation in the Translatio Setup page:

<kbd>![Translatio Enable Translation](https://github.com/translatio-io/translatio/blob/main/doc/tmy-enabletranslation.png "Translatio Enable Translation")</kbd>

= Translatio shows connection error code 7 in WordPress

On CentOS/Feodra Linux system, the error is due to the SELinux setting which blocks the network connection. You can use the following command to change the SELinux setting: setsebool httpd_can_network_connect on


== Screenshots ==

1. Main Menu
2. Setup Page
3. Live Translation
4. Start Translate Posts
5. Finish Translation
6. Language Switcher Locations
7. Translations Page
8. 3 Usage Modes
9. Setup Translatio External Editor
10. Translatio External Editor Screen
11. Translatio Switcher Block
12. Translatio Switcher Widget

== Changelog ==

= 1.9.0 =
* email translation

= 1.8.9 =
* Wooocmmerce product names in order confirmation translation
* translatio-globalization i18n domain, POT, Chinese translations

= 1.8.0 =
* Wooocmmerce improvements

= 1.7.0 =
* Taxonomies Translation

= 1.6.5 =
* SEO compatible URL

= 1.6.0 =
* tested with woocommerce

= 1.5.0 =
* added bulk action for Page and Post and other UI improvement

= 1.4.0 =
* "g11n_translation" listing page add columns

= 1.3.0 =
* Live Translation

= 1.2.0 =
* Miscellaneous Improvement.

= 1.1.0 =
* Miscellaneous Improvement.
* Machine translation integration

= 1.0.0 =
* Initial Release.

== Upgrade Notice ==

= 1.9.0 =
* email translation

= 1.8.0 =
* Wooocmmerce improvements

= 1.7.0 =
* Taxonomies Translation

= 1.6.5 =
* SEO compatible URL

= 1.6.0 =
* tested with woocommerce

= 1.5.0 =
* added bulk action for Page and Post and other UI improvement

= 1.4.0 =
* "g11n_translation" listing page add columns

= 1.3.0 =
* Live Translation is added. It is powered by Google Translate

= 1.2.0 =
* Miscellaneous Improvement.

= 1.1.0 =
* Miscellaneous Improvement.
* Machine translation integration
