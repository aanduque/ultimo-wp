<?php
header("Content-type: text/css"); 
/*
 *  User custom styles
 */

define( 'WP_USE_THEMES', false );
require_once('../../../../wp-load.php');
?>

<?php
	$options=get_option('rp_settings');
?>

@import url(http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic);

* {
	filter: none;
}

/* http://meyerweb.com/eric/tools/css/neset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
}

/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}

body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
strong {
	font-weight: bold;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
	box-sizing: border-box !important;
	-moz-box-sizing: border-box !important;
	-webkit-box-sizing: border-box !important;
	-ms-box-sizing: border-box !important;
}


/**  MAIN STYLES  **/

::selection {
	background: #<?php if ($rp_options["rp_SelectionBackgroundColour"] != "") { echo $rp_options["rp_SelectionBackgroundColour"]; } else { echo '46BBD4'; } ?> !important;
	color: #<?php if ($rp_options["rp_SelectionTextColour"] != "") { echo $rp_options["rp_SelectionTextColour"]; } else { echo 'FFFFFF'; } ?> !important;
}
		
::-moz-selection {
	background: #<?php if ($rp_options["rp_SelectionBackgroundColour"] != "") { echo $rp_options["rp_SelectionBackgroundColour"]; } else { echo '46BBD4'; } ?> !important;
	color: #<?php if ($rp_options["rp_SelectionTextColour"] != "") { echo $rp_options["rp_SelectionTextColour"]; } else { echo 'FFFFFF'; } ?> !important;
}

input[type="text"], input[type="email"], input[type="search"], input[type="password"], textarea {
	-webkit-appearance: none !important;
	padding:8px !important;
	font-size: 12px !important;
	box-shadow: inset 0 0 2px rgba(0, 0, 0, .4) !important;
	-webkit-box-shadow: inset 0 0 2px rgba(0, 0, 0, .4) !important;
	-moz-box-shadow: inset 0 0 2px rgba(0, 0, 0, .4) !important;
	border: none !important;
	visibility: visible !important;
	position: relative !important;
	z-index: 100 !important;
	
	border-radius:3px !important;
	-webkit-border-radius:3px !important;
	-moz-border-radius:3px !important;
	box-sizing: border-box !important;
	-webkit-box-sizing: border-box !important;
	-moz-box-sizing: border-box !important;
	-ms-box-sizing: border-box !important;
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	
	
}

input:focus, textarea:focus {
	box-shadow: inset 0 0 4px rgba(0, 0, 0, .6) !important;
	-webkit-box-shadow: inset 0 0 4px rgba(0, 0, 0, .6) !important;
	-moz-box-shadow: inset 0 0 2px rgba(0, 0, 0, .6) !important;
}

.input-text-wrap label, #titlewrap label {
	font-size: 12px !important;
	color:#606060 !important;
	padding: 11px !important;
}

body {
	font-family: 'Lato', sans-serif; !important;
	background: #f7f7f7;
	-webkit-font-smoothing: antialiased !important;
	font-smoothing: antialiased !important;
	-moz-font-smoothing: antialiased !important;
}

a:link, a:active, a:visited {
	text-decoration: none;
	color: #<?php if ($rp_options["rp_LinkColour"] != "") { echo $rp_options["rp_LinkColour"]; } else { echo '46BBD4'; } ?> !important;
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
}

a:hover {
	color: #<?php if ($rp_options["rp_LinkHoverColour"] != "") { echo $rp_options["rp_LinkHoverColour"]; } else { echo '121212'; } ?> !important;
}

h2 .nav-tab, .wrap h2, .subtitle, .login form .input {
	font-family: 'Lato', sans-serif; !important;
}

div ul#wp-admin-bar-root-default {
	position: relative;
	margin-left: 135px !important;
}

ul li#wp-admin-bar-site-name, ul li#wp-admin-bar-site-name:hover {
	text-indent: -9999px !important;
	position: absolute !important;
	left: -135px;
	background: url("../images/logo.png") no-repeat !important;
	height: 21px !important;
	width: 135px !important;
}

#wpwrap {
	top: 30px;
	height: 100%;
	min-height: 100%;
}

#wpbody {
	margin-left: 1px;
	padding-left: 20px;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box !important;
	background: #f7f7f7 !important;
}

#wpadminbar {
	background: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important;
	padding: 15px 25px !important;
	height: 125px !important;
	border-top: 1px solid rgba(255, 255, 255, .2) !important;
	border-bottom: 60px solid #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '17181B'; } ?>;
	position: relative;
	-webkit-box-sizing: border-box !important;
	-moz-box-sizing: border-box !important;
	-ms-box-sizing: border-box !important;
	
	box-shadow: inset 0 -1px 0 rgba(255, 255, 255, .2), 0 3px 0 rgba(0, 0, 0, .1);
	-moz-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, .2), 0 3px 0 rgba(0, 0, 0, .1);
	-webkit-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, .2), 0 3px 0 rgba(0, 0, 0, .1);
}

.wrap {
	margin: 10px 15px 0 0 !important;
}

#adminmenuback, #adminmenuwrap {
	margin-top: 0;
	background: #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '17181B'; } ?> !important;
	background-image: none !important;
}

#adminmenuwrap ul li a, #adminmenu div.wp-menu-image:before, #collapse-button div:after {
	color: #<?php if ($rp_options["rp_SidebarLinkColour"] != "") { echo $rp_options["rp_SidebarLinkColour"]; } else { echo 'FFFFFF'; } ?> !important;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-ms-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

#adminmenuwrap ul > li:hover > a, #adminmenu li:hover div.wp-menu-image:before, #collapse-button li:hover div:after {
	color: #<?php if ($rp_options["rp_SidebarLinkHoverColour"] != "") { echo $rp_options["rp_SidebarLinkHoverColour"]; } else { echo '121212'; } ?> !important;
}

ul#adminmenu li a.wp-menu-open, #adminmenu li a.wp-menu-open div.wp-menu-image:before, #collapse-button li a.wp-menu-open div:after {
	color: #<?php if ($rp_options["rp_SidebarLinkCurrentColour"] != "") { echo $rp_options["rp_SidebarLinkCurrentColour"]; } else { echo 'FFFFFF'; } ?> !important;
}

#wpadminbar ul li a {
	color: #fff !important;
}

#wp-admin-bar-wp-logo {
	display: none;
}


#wp-admin-bar-site-name a {
	font-family: 'Lato', sans-serif;;
	font-size: 22px;
	letter-spacing: -1px;
}

#wp-admin-bar-site-name.hover div {
	display: none !important;
	background: none !important;
}

#wp-admin-bar-site-name a:hover, #wp-admin-bar-site-name:hover,  #wp-admin-bar-site-name a {
	background: none !important;
}

#wpadminbar .ab-top-secondary {
	background: none !important;
}

#wpadminbar .ab-top-secondary a img {
	border-radius: 50% !important;
	-webkit-border-radius: 50% !important;
	-moz-border-radius: 50% !important;
	-o-border-radius: 50% !important;
	
	border: none !important;
	height: 26px !important;
	width: 26px !important;
}

#adminmenu a.menu-top, #adminmenu .wp-submenu .wp-submenu-head {
	border: none !important;
}

.wp-menu-separator {
	display: none !important;
}

#wpcontent {
	margin-top: 62px;
}

#adminmenu .wp-menu-image, #adminmenu .wp-submenu li a {
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-ms-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

#adminmenu .wp-submenu, .folded #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu {
	background-color: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
	border: none !important;
	-webkit-box-shadow: 2px 3px 6px rgba(0,0,0,1);
	box-shadow: 2px 3px 6px rgba(0,0,0,1);
}

.widget, .postbox, .menu-item-settings, .welcome-panel {
	background: #fff !important;
	border: 1px solid #e3e3e3 !important;
	margin: 0 0 25px 0 !important;
	-webkit-box-sizing: border-box !important;
	-moz-box-sizing: border-box !important;
	box-sizing: border-box !important;
	-ms-box-sizing: border-box !important;
	height: auto !important !important;
	border-radius: 5px !important;
	-webkit-border-radius: 5px !important;
	-moz-border-radius: 5px !important;
	box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2) !important;
	-webkit-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2) !important;
	-moz-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2) !important;
}

.widgets-holder-wrap .widget {
	margin-bottom: 10px !important;
}

#screen-meta {
	background-color: #fff !important;
	border-color: #e3e3e3;
	box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2) !important;
	-webkit-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2) !important;
	-moz-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2) !important;
}

.welcome-panel {
	margin-top: 25px !important;
}

.widget .widget-top, .postbox h3, .stuffbox h3 {
	background: #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '17181B'; } ?> !important;
	padding: 15px !important;
	height: 15px !important;
	border-bottom: none !important;
}

h3 span {
	color: #fff !important;
	font-family: 'Lato', sans-serif; !important;
}


#adminmenu li.menu-top {
	position: relative;
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
}

#adminmenu > li.menu-top > a {
	padding: 10px 30px;
	border-top: 1px solid rgba(0, 0, 0, .2) !important;
	font-family: 'Lato', sans-serif; !important;
	font-size: 14px;
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
}

#adminmenu > li.menu-top > a:hover, ul#adminmenu li a.wp-menu-open , #adminmenu .current a.current {
	border-top: 1px solid rgba(255, 255, 255, .2) !important;
	background: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important;
}

#adminmenu > li:hover > a, #adminmenu > li:hover {
	background: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important;
}

#adminmenu li.current div.wp-menu-image:before, #adminmenu li.wp-first-item div.wp-menu-image:before {
	color: #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '17181B'; } ?> !important;
}

#adminmenu li.menu-top:hover, .current, .wp-menu-open, #menu-dashboard {
	background: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?>;
	border-bottom: none !important;
}

#adminmenu > li.menu-top > a:hover .wp-menu-image {
	margin-bottom: 3px;
}

.folded #adminmenu li.wp-has-current-submenu {
	margin-bottom: 0 !important;
}

#adminmenu .wp-submenu {
	border-radius: 0 !important;
}

#wpcontent, #wpfooter {
	margin-left: 204px !important;
}

#adminmenuback, #adminmenu, #adminmenuwrap {
	width: 205px !important;
}

#adminmenuback {
	z-index: 0 !important;
}

#adminmenuback, #adminmenuwrap {
	box-shadow: inset -20px 0 10px -20px rgba(0, 0 , 0, .5);
	-moz-box-shadow: inset -20px 0 10px -20px rgba(0, 0 , 0, .5);
	-webkit-box-shadow: inset -20px 0 10px -20px rgba(0, 0 , 0, .5);
}

#adminmenu .wp-submenu {
	box-shadow: inset 0px 5px 10px 0px rgba(0, 0, 0, 0.43) !important;
	-moz-box-shadow: inset 0px 5px 10px 0px rgba(0, 0, 0, 0.43) !important;
	-webkit-box-shadow: inset 0px 5px 10px 0px rgba(0, 0, 0, 0.43) !important;

	top:0 !important;
	left: 0 !important;
	position: relative !important;
	width: 205px !important;
	margin: 0 !important;
	padding: 0 !important;
	display: none;
}

#adminmenu li.wp-menu-separator {
	display: none !important;
}

#adminmenu .wp-submenu li a {
	padding: 10px 10px 10px 40px !important;
	cursor: pointer;
}

#adminmenu .wp-submenu li {
	border-bottom: 1px solid rgba(0, 0, 0, 0.3) !important;
	cursor: pointer;
}

#adminmenu .wp-submenu li:last-child {
	border-bottom: none !important;
}

#adminmenu .wp-menu-image {
	margin-right: 9px !important;
	-webkit-animation: Iconz 1.5s normal; /* Safari 4+ */
	-moz-animation:    Iconz 1.5s normal; /* Fx 5+ */
	-o-animation:      Iconz 1.5s normal; /* Opera 12+ */
	animation:         Iconz 1.5s normal; /* IE 10+ */
}

#adminmenu .wp-submenu li a:hover, #adminmenu .wp-submenu li a.current {
	background: rgba(0, 0, 0, .2) !important;
	color: #ffffff !important;
}

#adminmenu .wp-submenu li:first-child {
	box-shadow: inset 0 20px 10px -20px #000;
	-moz-box-shadow: inset 0 20px 10px -20px #000;
	-webkit-box-shadow: inset 0 20px 10px -20px #000;
}

#adminmenu .wp-submenu li:nth-child(0), #adminmenu .wp-submenu li:nth-child(1), #adminmenu .wp-submenu li:nth-child(2) {
	border-top: none !important;
}

.wp-menu-arrow {
	display: none !important;
}

.folded #adminmenuback, .folded #adminmenuwrap, .folded #adminmenu, .folded #adminmenu li.menu-top {
	width: 90px !important;
}

.folded #wpcontent, .folded #wpfooter {
	margin-left: 109px !important;
}

.folded #adminmenu .wp-submenu, .folded #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu {
	left: 75px !important;
	top: 0 !important;
	position: absolute !important;
	z-index: 1500;
	padding-left: 15px !important;
	border-radius: 0 5px 5px 0 !important;
	-webkit-border-radius: 0 5px 5px 0 !important;
	-moz-border-radius: 0 5px 5px 0 !important;
	-o-border-radius: 0 5px 5px 0 !important;
	background: none !important;
	box-shadow: none !important;
	-webkit-box-shadow: none !important;
	-moz-box-shadow: none !important;
	-o-box-shadow: none !important;
	overflow: hidden;
}

.wp-color-result:after {
	padding: 4px 6px !important;
	box-shadow: none !important;
	-webkit-box-shadow: none !important;
	-moz-box-shadow: none !important;
}

.wp-color-result {
	height: 30px !important;
	margin: 0 5px 0 0 !important;
	box-shadow: none !important;
	-webkit-box-shadow: none !important;
	-moz-box-shadow: none !important;
}

.folded #adminmenu .wp-submenu .wp-submenu-head {
	color: #fff !important;
	background: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important;
	background: -moz-linear-gradient(top, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%, #0272bd 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?>), color-stop(100%,#0272bd));
	background: -webkit-linear-gradient(top, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%,#0272bd 100%);
	background: -o-linear-gradient(top, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%,#0272bd 100%);
	background: -ms-linear-gradient(top, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%,#0272bd 100%);
	background: linear-gradient(to bottom, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%,#0272bd 100%);
	border-top: 1px solid rgba(255, 255, 255, .2) !important;
	border-bottom: none !important;
	padding: 21px !important;
}

.folded #adminmenu .wp-submenu li {
	background: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
}

.folded #adminmenu .wp-submenu .wp-submenu-head {
	margin-bottom: 0;
}

#collapse-menu {
	color: #ccc !important;
	border-top: none !important;
	padding: 15px 30px  !important;
}

.postbox .inside {
	padding: 0 !important;
	margin: 25px !important;
}

.inside .table {
	margin-top: 25px !important;
}

#collapse-button {
	border: none !important;
}

#the-comment-list .comment-item .avatar {
	border-radius: 50px;
	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	-o-border-radius: 50px;
}

.dashboard-comment-wrap {

}

.contextual-help-tabs .active, .contextual-help-tabs .active a, .contextual-help-tabs .active a:hover {
	background: #fff;
	color: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?>;
	border-top: none !important;
	border-bottom: none !important;
}

.contextual-help-tabs {
	background: #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '17181B'; } ?>;
	border-radius: 0 0 0 5px;
	border: none !important;
}

.contextual-help-tabs a:hover {
	color: #fff !important;
}

.contextual-help-tabs .active a:hover {
	color: #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '17181B'; } ?> !important;
}

#wp-admin-bar-root-default li:hover {
	background: none !important;
}

#dashboard-widgets h3 .postbox-title-action {
	top: 8px !important;
	right: 40px !important;
	padding: 0 !important;	height: 25px !important;
	width: 25px !important;
	border-top: 1px solid #1c1f23;
	border-bottom: 1px solid #4c4f56;
	border-radius: 75px;
	-webkit-border-radius: 75px;
	-moz-border-radius: 75px;
	-o-border-radius: 75px;
	display: block !important;
	background: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
	text-indent: -9999px;
	text-transform: capitalize;
}


#dashboard-widgets h3 .postbox-title-action:hover {
	background: #f7f7f7 !important;
	border: none !important;
}

#dashboard-widgets h3 .postbox-title-action a {
	display: block;
	height: 26px;
	width: 26px;
}

#adminmenu .awaiting-mod, #adminmenu .update-plugins, #sidemenu a .update-plugins, #rightnow .reallynow {
	background: rgba(0, 0, 0, .3) !important;
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
	float: right;
}

.js .meta-box-sortables .postbox {
	posistion: relative;
}

.js .postbox .hndle {
	border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	-webkit-border-radius: 3px 3px 0 0;
	-o-border-radius: 3px 3px 0 0;
}

.js .meta-box-sortables .postbox .handlediv {
	padding: 0 !important;
	height: 25px !important;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	display: block !important;
	background: rgba(0, 0, 0, .4) !important;
	position: absolute;
	top: 10px;
	right: 15px;
}

.js .meta-box-sortables .postbox.closed .handlediv {
	background: rgba(0, 0, 0, .4) !important;
}

.widget-top a.widget-action {
	padding: 0 !important;
	margin: -5px -15px 0 0 !important;;
	height: 25px !important;
	width: 25px !important;
	border-top: 1px solid #1c1f23;
	border-bottom: 1px solid #4c4f56;
	border-radius: 75px;
	-webkit-border-radius: 75px;
	-moz-border-radius: 75px;
	-o-border-radius: 75px;
	display: block !important;
	background: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
}

.dashboard-comment-wrap {
	background: #f7f7f7;
	border: 1px solid #e3e3e3;
	position: relative;
	margin: 0;
	padding: 10px 10px 60px 10px !important;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box !important;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-transition: all .25s ease-out;
	-moz-transition: all .25s ease-out;
	-ms-transition: all .25s ease-out;
	-o-transition: all .25s ease-out;
	transition: all .25s ease-out;
}

.dashboard-comment-wrap .row-actions {
	visibility: visible !important;
	background: #fff;
	border-top: 1px solid #e3e3e3;
	padding: 10px !important;
	display: block;
	width: 100%;
	position: absolute;
	bottom: 0;
	left: 0;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box !important;
	border-radius: 0 0 5px 5px;
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
}

.comment-item {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box !important;
}

.comment-item .avatar {
	-webkit-transition:all .5s ease-out;
	-moz-transition:all .5s ease-out;
	-ms-transition:all .5s ease-out;
	-o-transition:all .5s ease-out;
	transition:all .5s ease-out;
}

.comment-item:hover .avatar {
	-webkit-transform:rotate(360deg);
	-moz-transform:rotate(360deg);
	-ms-transform:rotate(360deg);
	-o-transform:rotate(360deg);
	transform:rotate(360deg);
}

.comment-item .avatar {
	border: 3px solid #fff;
	border-radius: 75px;
	-webkit-border-radius: 75px;
	-moz-border-radius: 75px
	
	box-shadow: 0 0 1px #ccc;
	-webkit-box-shadow: 0 0 1px #ccc;
	-moz-box-shadow: 0 0 2px #ccc;
}

#the-comment-list .comment-item {
	padding: 15px 0 !important;
	border: none !important;
	background: none !important;
}

#wpadminbar .quicklinks > ul > li > a, #wpadminbar .quicklinks > ul > li {
	border-right: none !important;
	border-left: none !important;
}

#wpadminbar .quicklinks li#wp-admin-bar-comments {
	position: absolute !important;
	right: 0px !important;
	top: 62px !important;
	box-shadow: inset 0 0 1px rgba(0, 0, 0, .3) !important;
	-moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, .3) !important;
	-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, .3) !important;
	height: 30px !important;
	width: 60px !important;
	color: #fff !important;
	margin: 0 0 0 5px !important;
	display: block !important;
	border-radius: 3px !important;
	-webkit-border-radius: 3px !important;
	-moz-border-radius: 3px !important;
	background: #<?php if ($rp_options["rp_PrimaryButtonColour"] != "") { echo $rp_options["rp_PrimaryButtonColour"]; } else { echo '00A6C6'; } ?>  !important;
}

#wpadminbar .quicklinks li#wp-admin-bar-comments:hover {
	background: #<?php if ($rp_options["rp_PrimaryButtonHoverColour"] != "") { echo $rp_options["rp_PrimaryButtonHoverColour"]; } else { echo '17181B'; } ?>  !important;
	color: #<?php if ($rp_options["rp_PrimaryButtonTextHoverColour"] != "") { echo $rp_options["rp_PrimaryButtonTextHoverColour"]; } else { echo 'FFFFFF'; } ?>  !important;
}

#wpadminbar .quicklinks li#wp-admin-bar-comments a, #wpadminbar a.ab-item, #wpadminbar>#wp-toolbar span.ab-label, #wpadminbar>#wp-toolbar span.noticon {
	background: none;
	opacity: 1 !important;
	padding-right: 5px;
	color: #<?php if ($rp_options["rp_PrimaryButtonTextColour"] != "") { echo $rp_options["rp_PrimaryButtonTextColour"]; } else { echo 'FFFFFF'; } ?>  !important;
}

#wp-admin-bar-comments>.ab-item .ab-icon {
	padding: 3px;
}

#wpadminbar .quicklinks li#wp-admin-bar-comments:hover, #wpadminbar .quicklinks li#wp-admin-bar-new-content:hover, , #wpadminbar .quicklinks li#wp-admin-bar-new-content.hover {
	background: #<?php if ($rp_options["rp_PrimaryButtonColour"] != "") { echo $rp_options["rp_PrimaryButtonColour"]; } else { echo '00A6C6'; } ?> !important;
}

#wpadminbar .quicklinks li#wp-admin-bar-new-content:hover a {
	background: none !important;
	color: #fff !important;
}

#wpadminbar .quicklinks li#wp-admin-bar-new-content {
	position: absolute !important;
	right: 65px !important;
	top: 62px !important;
	height: 30px !important;
	width: auto !important;
	color: #<?php if ($rp_options["rp_PrimaryButtonTextColour"] != "") { echo $rp_options["rp_PrimaryButtonTextColour"]; } else { echo 'FFFFFF'; } ?> !important;
	margin: 0 0 0 5px !important;
	display: block !important;
	border-radius: 3px !important;
	-webkit-border-radius: 3px !important;
	-moz-border-radius: 3px !important;
	box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.2) !important;
	-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.2) !important;
	-moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.2) !important;
	
	background: #<?php if ($rp_options["rp_PrimaryButtonColour"] != "") { echo $rp_options["rp_PrimaryButtonColour"]; } else { echo '00A6C6'; } ?> !important;
}

#wp-admin-bar-my-account a:hover {
	background: none !important;
}

#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input {
	margin: 0 !important;
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
	background: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
	border: 1px solid rgba(0, 0, 0, .3) !important;
	border-radius: 0 5px 5px 5px;
	-webkit-border-radius: 0 5px 5px 5px;
	-moz-border-radius: 0 5px 5px 5px;
}

#wpadminbar .menupop#wp-admin-bar-my-account .ab-sub-wrapper, #wpadminbar .shortlink-input {
	margin: 0 0 0 -2px !important;
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
	background: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
	border: 1px solid rgba(0, 0, 0, .3) !important;
	border-radius: 5px 5px 5px;
	-webkit-border-radius: 5px 0 5px 5px;
	-moz-border-radius: 5px 0 5px 5px;
}

#wpadminbar .menupop li:hover>.ab-sub-wrapper,#wpadminbar .menupop li.hover>.ab-sub-wrapper{
	margin-left:100%  !important;
	margin-top:-33px !important;
	border-width:1px !important;
}

#wpadminbar ul.ab-submenu li a:hover {
	color: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important;
}

#wpadminbar .hover *:hover li, #wpadminbar .hover *:hover a {
	background: none !important;
}

#wpadminbar .ab-submenu .ab-item {
	color: #fff !important;
}

#wpadminbar .quicklinks .ab-top-secondary > li > a {
	padding: 8px 12px;
}

#wpadminbar .quicklinks .ab-top-secondary > li > a:hover, ul#wp-admin-bar-top-secondary:hover li#wp-admin-bar-my-account a {
	background: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
	border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	-webkit-border-radius: 5px 5px 0 0;
}


ul#wp-admin-bar-top-secondary li#wp-admin-bar-my-account .display-name {
	color: #fff;
	font-weight: bold;
	height: auto !important;
	line-height: 15px;
}

#wp-admin-bar-edit-profile a.ab-item, #wp-admin-bar-logout a.ab-item {
	color: #5daced !important;
}

#wp-admin-bar-edit-profile a.ab-item:hover, #wp-admin-bar-logout a.ab-item:hover {
	color: #fff !important;
}

#wp-admin-bar-edit-profile:hover, #wp-admin-bar-logout:hover {
	background: none !important;
	line-height: 0px !important;
}

#wp-admin-bar-new-content * {
	color: #fff !important;
}

#wp-admin-bar-new-content div {
	right: -1px;
	margin-top: 1px !important;
}

ul#wp-admin-bar-new-content-default {
	padding: 0 !important;
}

ul#wp-admin-bar-new-content-default li {
	padding: 5px 8px !important;
	border-bottom: 1px solid rgba(0, 0, 0, .3);
	border-top: 1px solid rgba(255, 255, 255, .1);
	white-space: no-wrap;
}

ul#wp-admin-bar-new-content-default li:first-child {
	border-top: none !important;
}

ul#wp-admin-bar-new-content-default li:last-child {
	border-bottom: none !important;
}

ul#wp-admin-bar-new-content-default li:hover {
	background: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important; /* Old browsers */ 
	background: -moz-linear-gradient(top, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%, #0272bd 100%) !important; /* FF3.6+ */ 
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?>), color-stop(100%,#0272bd)) !important; /* Chrome,Safari4+ */ 
	background: -webkit-linear-gradient(top, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%,#0272bd 100%) !important; /* Chrome10+,Safari5.1+ */ 
	background: -o-linear-gradient(top, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%,#0272bd 100%) !important; /* Opera 11.10+ */ 
	background: -ms-linear-gradient(top, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%,#0272bd 100%) !important; /* IE10+ */ 
	background: linear-gradient(to bottom, #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> 0%,#0272bd 100%) !important; /* W3C */ 
	border-top: 1px solid rgba(255, 255, 255, .2) !important;
	border-bottom: 1px solid black !important;
}

ul#wp-admin-bar-new-content-default li:first-child:hover {
	border-radius: 5px 0 0 0 !important;
	-webkit-border-radius: 5px 0 0 0 !important;
	-moz-border-radius: 5px 0 0 0 !important;
	
	border-top: none !important;
}

ul#wp-admin-bar-new-content-default li:last-child:hover {
	border-radius: 0 0 5px 5px !important;
	-webkit-border-radius: 0 0 5px 5px !important;
	-moz-border-radius: 0 0 5px 5px !important;
	
	border-bottom: none !important;
}

.drag-drop #drag-drop-area {
	border: 1px solid #e3e3e3 !important;
	box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-webkit-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-moz-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box !important;
	border-radius: 5px !important;
	-webkit-border-radius: 5px !important;
	-moz-border-radius: 5px !important;
	-o-border-radius: 5px !important;
	background: #fff url("../images/dropzone.png") center 50px no-repeat !important;
	height: 300px !important;
}

.drag-drop-inside p {
	display: none !important;
}

.drag-drop-inside .drag-drop-buttons {
	display: block !important;
	margin-top: 200px !important;
}

#post-body-content, .content-wrap {
	border: 1px solid #e3e3e3;
	box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-webkit-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-moz-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box !important;
	border-radius: 5px !important;
	-webkit-border-radius: 5px !important;
	-moz-border-radius: 5px !important;
	-o-border-radius: 5px !important;
	background: #fff;
	padding: 25px !important;
}

#tab_container {
	border: 1px solid #e3e3e3;
	box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-webkit-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-moz-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box !important;
	border-radius: 0 5px 5px 5px !important;
	-webkit-border-radius: 0 5px 5px 5px !important;
	-moz-border-radius: 0 5px 5px 5px !important;
	-o-border-radius: 0 5px 5px 5px !important;
	background: #fff;
	padding: 25px !important;
}

.content-wrap {
	margin-top: 25px;
	position: relative;
}

ul.subsubsub {
	float: none !important;
	background: #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '17181B'; } ?>;
	border-radius: 5px;
	padding: 10px 10px 0 10px;
	margin-bottom: 25px;
}

ul.subsubsub li {
	margin-bottom: 10px !important;
}

p.search-box {
	position: absolute;
	top: 43px;
	right: 35px;
}

.media-modal-content {
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
}

#delete-action a.submitdelete {
	padding: 0 10px 1px !important;
}

#publish {
	padding: 0 10px 1px !important;
	height: 28px !important;
}

#minor-publishing {
	border-bottom: none !important;
}

#minor-publishing-actions, #major-publishing-actions {
	padding: 0 !important;
	border-top: none !important;
	border-bottom: none !important;
}

#misc-publishing-actions {
	padding: 10px 0 !important;
}

a.edit-post-status, a.edit-visibility, a.edit-timestamp {
	float: right;
}

.misc-pub-section {
	padding: 8px 0 !important;
}

#menu_order {
	width: 30px;
}

#current-theme {
	border: 1px solid #e3e3e3;
	box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-webkit-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-moz-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box !important;
	border-radius: 0 0 5px 5px !important;
	-webkit-border-radius: 0 0 5px 5px !important;
	-moz-border-radius: 0 0 5px 5px !important;
	-o-border-radius: 0 0 5px 5px !important;
	background: #fff;
	margin-top: 0 !important;
}

h2 .nav-tab {
	font-weight: 300 !important;
	font-size: 16px !important;
}

h2.nav-tab-wrapper, h3.nav-tab-wrapper {
	padding-left: 0 !important;
}

.nav-tab-active, .nav-tab-active:hover {
	border-color: #e3e3e3 !important;
}

.nav-tab {
	border-color: #e3e3e3 !important;
	background: none !important;
	border-radius: 5px 5px 0 0 !important;
	-webkit-border-radius: 5px 5px 0 0 !important;
	-moz-border-radius: 5px 5px 0 0 !important;
	-o-border-radius: 5px 5px 0 0 !important;
}

h2 .nav-tab-active {
	background: #fff !important;
	font-weight: 400 !important;
	color: #222 !important;
	cursor: normal !important;
	border-bottom: none !important;
}

#current-theme {
	padding: 25px 25px 25px 355px !important;
}

h2.nav-tab-wrapper, h3.nav-tab-wrapper {
	border-bottom: none !important;
	position: relative;
	z-index: 500;x
}

.search-form.filter-form, #col-container, #nav-menus-frame {
	border: 1px solid #e3e3e3;
	box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-webkit-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	-moz-box-shadow: 0 2px 2px rgba(204, 204, 204, 0.2);
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box !important;
	border-radius: 5px !important;
	-webkit-border-radius: 5px !important;
	-moz-border-radius: 5px !important;
	-o-border-radius: 5px !important;
	background: #fff;
	padding: 25px !important;
}

thead {
	border-top: 2px solid #dfdfdf;
}

.widefat td {
	vertical-align: middle !important;
}

.widefat tbody th.check-column {
	padding: 12px 0 0 0 !important;
}


.widefat th.sortable, .widefat th.sorted {
	vertical-align: middle;
}


#adminmenu li .awaiting-mod span, #adminmenu li span.update-plugins span, #sidemenu li a span.update-plugins span {
	padding: 0 7px !important;
	line-height: 18px !important;
}

div.updated a {
	color: #4b6a2c;
}

.widefat thead tr th, .widefat tfoot tr th {
	font-size: 13px !important;
	font-weight: bold;
}

.post-com-count span {
	background: none !important;
	color: #5daced !important;
}

.post-com-count {
	background: none !important;
	padding: 0 !important;
	font-weight: normal !important;
}

ul.subsubsub li a {
	border: none !important;
	padding: 5px 7px !important;
	color: #<?php if ($rp_options["rp_TertiaryButtonTextColour"] != "") { echo $rp_options["rp_TertiaryButtonTextColour"]; } else { echo '7A7A7A'; } ?> !important;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	background: #<?php if ($rp_options["rp_TertiaryButtonColour"] != "") { echo $rp_options["rp_TertiaryButtonColour"]; } else { echo 'F5F5F5'; } ?> !important;
}

ul.subsubsub li a:hover {
	color: #<?php if ($rp_options["rp_TertiaryButtonTextHoverColour"] != "") { echo $rp_options["rp_TertiaryButtonTextHoverColour"]; } else { echo 'FFFFFF'; } ?> !important;
	background: #<?php if ($rp_options["rp_TertiaryButtonHoverColour"] != "") { echo $rp_options["rp_TertiaryButtonHoverColour"]; } else { echo '00A6C6'; } ?> !important;
}

ul.subsubsub li a.current {
	border-radius: 3px !important;
	cursor: pointer !important;
	-webkit-border-radius: 3px !important;
	-moz-border-radius: 3px !important;
	box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3) !important;
	-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3) !important;
	-moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3) !important;
	background: #<?php if ($rp_options["rp_PrimaryButtonColour"] != "") { echo $rp_options["rp_PrimaryButtonColour"]; } else { echo '00A6C6'; } ?> !important;
	color: #<?php if ($rp_options["rp_PrimaryButtonTextColour"] != "") { echo $rp_options["rp_PrimaryButtonTextColour"]; } else { echo 'FFFFFF'; } ?> !important;
}

.plugins .inactive .plugin-title strong {
	font-weight: 700 !important;
}

input[type=checkbox]:checked:before {
	color: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important;
}

.view-switch .current {
	background: none !important;
	opacity: .3;
}

#col-container {
	margin-top: 15px !important;
}

#col-right {
	border: 1px solid #e9e9e9;
	min-height: 360px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	background: #f7f7f7;
	padding: 25px !important;
	box-sizing: border-box;
	-moz-box-sizing: border-box !important;
	-webkit-box-sizing: border-box !important;
	-ms-box-sizing: border-box !important;
}

#col-right .form-wrap {
	margin-top: 25px;
}

.wp-admin.wp-core-ui .button[disabled], .wp-admin.wp-core-ui .button:disabled, .wp-admin.wp-core-ui .button-secondary[disabled], .wp-admin.wp-core-ui .button-secondary:disabled, .wp-core-ui .button-disabled {
	text-shadow: none !important;
	border: 1px solid #ccc !important;
	color: #aaa !important;
	background: none !important;
}

.wp-color-result {
	box-shadow: none !important;
	-webkjti-box-shadow: none !important;
	-moz-box-shadow: none !important;
}

td.posts {
	text-align: left;
}

.widget-liquid-right .widget .widget-top {
	margin: 0 !important;
}


.widget-liquid-right .widget .widget-top h4, #widget-list .widget-top h4 {
	color: #fff !important;
	font-family: 'Lato', sans-serif; !important;
	font-size: 13px !important;
	font-weight: normal;
}

.widget-top .widget-title {
	padding: 0 !important;
}

#widget-list .widget-top .widget-title-action {
	display: none;
}

#widget-list .widget-top {
	border-radius: 4px 4px 0 0 !important;
	-webkit-border-radius: 4px 4px 0 0 !important;
	-moz-border-radius: 4px 4px 0 0 !important;
	margin: 0 !important;
	border: none !important;
	
	box-shadow: none !important;
	-webkit-box-shadow: none !important;
	-moz-box-shadow: none !important;
}

#available-widgets .widget-description {
	padding: 15px !important;
}

#wpbody-content #menu-settings-column {
	margin-left: -320px !important;
}

.menu-edit #post-body-content {
	padding: 0 !important;
	border: none !important;
	box-shadow: none !important;
	-webkit-box-shadow: none !important;
	-moz-box-shadow: none !important;
}

#nav-menu-header .clear {
	display: none;
}

.nav-menus-php .howto span {
	margin-top: 12px !important;
}

.widefat tfoot {
	display: none;
}

.dashboard-comment-wrap .row-actions span.reply, .dashboard-comment-wrap .row-actions span.edit, .dashboard-comment-wrap .row-actions span.spam, .dashboard-comment-wrap .row-actions span.trash, #the-list .row-actions span {
	background: none !important;
	padding: 0 !important;
	border: none !important;
}

.dashboard-comment-wrap .row-actions span.reply a, .dashboard-comment-wrap .row-actions span.edit a, .dashboard-comment-wrap .row-actions span.spam a, .dashboard-comment-wrap .row-actions span.trash a, #the-list .row-actions span a {
	color: #5daced !important;
}

.dashboard-comment-wrap .row-actions span.reply a:hover, .dashboard-comment-wrap .row-actions span.edit a:hover, .dashboard-comment-wrap .row-actions span.spam a:hover, .dashboard-comment-wrap .row-actions span.trash a:hover, #the-list .row-actions span a:hover {
	color: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
}

a .count {
	color: #<?php if ($rp_options["rp_PrimaryButtonTextColour"] != "") { echo $rp_options["rp_PrimaryButtonTextColour"]; } else { echo 'FFFFFF'; } ?> !important;
}

.current .count {
	background: rgba(0, 0, 0, .3) !important;
}

.count {
	background: #cd4433;
	color: #fff;
	padding: 2px 5px;
	width: auto;
	font-size: 10px;
	border-radius: 50px;
	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	margin: 0 0 0 5px;
}


@media only screen and (max-width: 900px) {

	.auto-fold #adminmenuback, .auto-fold #adminmenuwrap, .auto-fold #adminmenu, .auto-fold #adminmenu li.menu-top {
		width: 90px !important;
	}
	
	.auto-fold #wpcontent, .auto-fold #wpfooter {
		margin-left: 109px !important;
	}

}

@media only screen and (max-width: 1200px) {

	#current-theme img {
		width: 240px !important;
		margin-left: -330px !important;
		width: 310px !important; 
	}

}

li:before, li:after {
	visibility: hidden !important;
}

#adminmenu > li.menu-top > a.remove-border {
	border-top: none !important;
}

.search-form.filter-form.table-wrap p.search-box {
	top: 80px;
	right: 35px;
}

td .row-actions {
	margin-bottom: 8px !important;
}

#wp-admin-bar-new-content a, #wp-admin-bar-my-account a {
	background: none !important;
}

span.ab-label {
	float: right;
	margin: 0 !important;
}

.submitdelete {
color: #f00 !important;
border-bottom: none !important;

}

#wpcontent #wpadminbar .ab-top-menu>li.menupop.hover>.ab-item {
	background: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
	border-radius: 2px 2px 0 0;
	-moz-border-radius: 2px 2px 0 0;
	-webkit-border-radius: 2px 2px 0 0;
}

 #wpcontent #wpadminbar #wp-admin-bar-site-name.menupop.hover .ab-item {
	background: none !important;
}

@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px)  {

	span.ab-label {
		float: right;
		margin: 0 !important;
	}

}

#adminmenu li a:hover, #adminmenu li a {
	background: none !important;
}

/** IE 10 **/
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {  
   #wpwrap #wpcontent #wpadminbar {
	height:34px !important;
	}
	
	#wpadminbar .quicklinks {
		margin-right:50px !important;
	}
	
	span.ab-label {
		float: right;
		margin: 0 !important;
	}
}  

/** Retina graphics **/
@media
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (min--moz-device-pixel-ratio: 2),
only screen and (-o-min-device-pixel-ratio: 2/1),
only screen and (min-device-pixel-ratio: 2),
only screen and (min-resolution: 192dpi),
only screen and (min-resolution: 2dppx) { 

	#dashboard-widgets h3 .postbox-title-action {
		background: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '121212'; } ?> !important;
		background-size: 14px auto !important;
	}
	
	#dashboard-widgets h3 .postbox-title-action:hover {
		background: #f7f7f7 !important;
		background-size: 14px auto !important;
	}
	
	
	.js .meta-box-sortables .postbox .handlediv, .js .meta-box-sortables .postbox .handlediv:hover {
		background-size: 15px auto !important;
	}
	
	.js .meta-box-sortables .postbox.closed .handlediv {
		background: rgba(0, 0, 0, .4) !important;
		background-size: 15px auto !important;
	}
	
	.widget-top a.widget-action {
		display: block !important;
		background: rgba(0, 0, 0, .4) !important;
		background-size: 15px auto !important;
	}

}

/** wooCommerce **/

.woocommerce {
	position: relative !important;
	margin-top: 70px !important;
}

.woo-nav-tab-wrapper {
	position: absolute !important;
	top:-44px !important;
	margin-left: 25px !important;
}

.woo-nav-tab-wrapper a {
	font-weight: 400 !important;
}

#woocommerce_extensions {
	margin-top: 80px !important;
}

.icon32-posts-shop_coupon, .icon32-woocommerce-reports, .icon32-posts-shop_order {
	margin: 11px 5px 0 5px !important;
}

#poststuff {
	margin-left: 0 !important;
	overflow: hidden !important;
}

.woocommerce-reports-wrap {
	padding-left: 300px !important;
}

#woocommerce-order-data h3.hndle, #woocommerce-order-data .handlediv {
	display: block !important;
}

.panel-wrap.woocommerce {
	margin-top: 25px !important;
}

#order_data .order_data_column .form-field .date-picker-field {
	width: 7.1em !important;
}

.order_data_column .form-field .minute {
	width: 2.9em !important;
}

.save_order {
	box-shadow: none !important;
}

.save_order:hover {
	color: #fff !important;
}

.settings_page_test-setting-admin .form-table th {
	padding-left: 0px !important;
	padding-top: 18px;
}

.settings_page_test-setting-admin .wrap h3 {
	display: none;
}

.settings_page_test-setting-admin .wrap h2 {
	font-size: 18px;
}

.rp-options-wrap td.options {
	text-align: left;
	width: 200px;
}

.rp-options-wrap tr {
	height: 50px;
}

.rp-options-wrap label {
	margin-left: 15px;
	color: #999;
}

.rp-options-wrap h3 {
	font-weight: 300;
	font-size: 16px;
	border-bottom: 1px solid #e3e3e3;
	padding-bottom: 10px;
	margin-top: 20px;
}

#wpadminbar .quicklinks .menupop ul.ab-sub-secondary {
	background: #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '17181B'; } ?> !important;
}

#wpadminbar .ab-submenu {
	border-top: none !important;
}

#jj, #hh, #mn {
	width: 3em !important;
}

#aa {
	width: 6.4em !important;
}

search-box input[name="s"], #search-plugins input[name="s"], .tagsdiv .newtag {
    padding: 5px !important;
}

.alignright.fyi {
	float: none !important;
}

#plugin-information .fyi {
	margin: 30px 10px 0px !important;
	width: auto !important;
}
#titlediv #title {
	height: auto !important;
}
#adminmenuwrap #adminmenu .menu-top div.wp-menu-image {
	background-position-y: 0px !important;
}
#adminmenu {
	margin: 0 !important;
}

.sticky-menu #adminmenuwrap {
	position: relative !important;
}

.js .sidebar-name .sidebar-name-arrow:before, .js .meta-box-sortables .postbox .handlediv:before {
	padding: 4px 14px !important;
}

#adminmenuback, #adminmenuwrap, #adminmenu {
	background: #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '17181B'; } ?> !important;
}

#wpadminbar .ab-icon:before, #wpadminbar .ab-item:before, #wpadminbar #adminbarsearch:before {
	color: #ffffff !important;
}

.widget-title h4 {
	padding: 0 !important;
}

.widget-top a.widget-action:after {
	padding: 2px !important;
	color: #fff !important;
}

#sidebar-1 .widget-top a.widget-action {
	margin-right: -5px !important;
}

#the-comment-list .comment {
	padding-left: 75px !important;
}

.unapproved .approve, .spam .approve, .trash .approve {
	display: inline-block !important;
	padding: 5px !important;
	
	border-radius: 3px !important;
	-moz-border-radius: 3px !important;
	-webkit-border-radius: 3px !important;
	-o-border-radius: 3px !important;
}

#wpfooter {
	padding-left: 20px !important;
}

a .mceIcon, .mceAction {
	color: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important;
}

.quicktags-toolbar input {
	color: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important;
}

.themes-php .wrap h2 {
	float: none !important;
}

.wp-core-ui .button.button-hero, .wp-core-ui .button-group.button-hero .button {
	height: auto !important;
}

.wp-core-ui .button-primary, a.add-new-h2 {
	background: #<?php if ($rp_options["rp_PrimaryButtonColour"] != "") { echo $rp_options["rp_PrimaryButtonColour"]; } else { echo '00A6C6'; } ?> !important;
	color: #<?php if ($rp_options["rp_PrimaryButtonTextColour"] != "") { echo $rp_options["rp_PrimaryButtonTextColour"]; } else { echo 'FFFFFF'; } ?> !important;
	padding: 17px 10px !important;
	border: none !important;
	line-height: 0 !important;
	box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3) !important;
	-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3) !important;
	-moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3) !important;
	
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
}

.wp-core-ui .button-primary:hover, a.add-new-h2:hover {
	background: #<?php if ($rp_options["rp_PrimaryButtonHoverColour"] != "") { echo $rp_options["rp_PrimaryButtonHoverColour"]; } else { echo '17181B'; } ?> !important;
	color: #<?php if ($rp_options["rp_PrimaryButtonTextHoverColour"] != "") { echo $rp_options["rp_PrimaryButtonTextHoverColour"]; } else { echo 'FFFFFF'; } ?> !important;
}

a.add-new-h2 {
	padding: 10px 10px !important;
}

.wp-core-ui .button-secondary, .wp-core-ui .button {
	background: #<?php if ($rp_options["rp_SecondaryButtonColour"] != "") { echo $rp_options["rp_SecondaryButtonColour"]; } else { echo '787878'; } ?> !important;
	color: #<?php if ($rp_options["rp_SecondaryButtonTextColour"] != "") { echo $rp_options["rp_SecondaryButtonTextColour"]; } else { echo 'FFFFFF'; } ?> !important;
	border: none !important;
	box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3) !important;
	-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3) !important;
	-moz-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3) !important;
	
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
}

.wp-core-ui .button-secondary:hover, .wp-core-ui .button:hover {
	background: #<?php if ($rp_options["rp_SecondaryButtonHoverColour"] != "") { echo $rp_options["rp_SecondaryButtonHoverColour"]; } else { echo '00A6C6'; } ?> !important;
	color: #<?php if ($rp_options["rp_SecondaryButtonTextHoverColour"] != "") { echo $rp_options["rp_SecondaryButtonTextHoverColour"]; } else { echo 'FFFFFF'; } ?> !important;
}


/* Mobile view */

@media screen and (max-width: 782px) {

	#wpcontent, #wpfooter, .auto-fold #wpcontent, .auto-fold #wpfooter {
		margin: 0 !important;
	}
	
	#wpwrap {
		top: 0;
	}
	
	.auto-fold #adminmenu {
		top: 124px !important;
	}
	
	.auto-fold #adminmenuback, .auto-fold #adminmenuwrap, .auto-fold #adminmenu, .auto-fold #adminmenu li.menu-top {
		width: 205px !important;
	}
	
	#wpadminbar .ab-icon {
		font: 30px/1 dashicons !important;
		width: 45px !important;
	}
	
	#wpadminbar .quicklinks > ul > li > a {
		padding: 0px !important;
	}
	
	#wpadminbar .quicklinks li#wp-admin-bar-new-content {
		top: 70px !important;
		right: 80px !important;
		height: 45px !important;
	}
	
	#wpadminbar .quicklinks li#wp-admin-bar-comments {
		right: 20px !important;
		top: 70px !important;
		height: 45px !important;
	}
	
	p.search-box {
		position: relative !important;
		width: auto !important;
		margin: 0 !important;
		top: auto !important;
		right: auto !important;
	}
	
	.wrap {
		margin: 100px 25px 0 0 !important;
	}
	
	.wp-responsive-open #wpadminbar #wp-admin-bar-menu-toggle a {
		background: none !important;
	}
	
}

#TB_window {
	border: 1px solid #ccc !important;
	position: absolute;
	top: 40%;
	z-index: 500000;
	left: 50%;
	background: #fff;
	border-radius: 5px;
}

#footer-left {
	display: none !important;
}

/** KEYFRAMES  **/

@-webkit-keyframes Iconz {
  0%   { opacity: 0; margin-left: -40px }
  100% { opacity: 1; margin-left: 0; }
}
@-moz-keyframes Iconz {
  0%   { opacity: 0; margin-left: -40px }
  100% { opacity: 1; margin-left: 0; }
 }
@-o-keyframes Iconz {
  0%   { opacity: 0; margin-left: -40px }
  100% { opacity: 1; margin-left: 0; }
}
@keyframes Iconz {
  0%   { opacity: 0; margin-left: -40px }
  100% { opacity: 1; margin-left: 0; }
}

inpu[type="checkbox"], input {
	position: relative !important;
	visibility: visible !important;
	z-index:1 !important;
}