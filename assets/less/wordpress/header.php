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

#wpadminbar {
	background: #<?php if ($rp_options["rp_SecondaryColour"] != "") { echo $rp_options["rp_SecondaryColour"]; } else { echo '00A6C6'; } ?> !important;
	height: 50px !important;
}

#wpadminbar a.ab-item, #wpadminbar > #wp-toolbar span.ab-label, #wpadminbar > #wp-toolbar span.noticon {
	color: #<?php if ($rp_options["rp_SidebarLinkColour"] != "") { echo $rp_options["rp_SidebarLinkColour"]; } else { echo 'FFFFFF'; } ?> !important;
}

#wpadminbar .ab-top-menu > li > .ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus, #wpadminbar .ab-top-menu > li:hover > .ab-item, #wpadminbar .ab-top-menu > li.hover > .ab-item {
	background: #<?php if ($rp_options["rp_PrimaryColour"] != "") { echo $rp_options["rp_PrimaryColour"]; } else { echo '00A6C6'; } ?> !important;
	color: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '00A6C6'; } ?> !important;
}

#wpadminbar ul li:hover .ab-icon:before, #wpadminbar ul li a:hover .ab-icon:before {
	color: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '00A6C6'; } ?> !important;
}

#wp-admin-bar-wp-logo {
	display: none;
}

#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input {
	background: #<?php if ($rp_options["rp_TertiaryColour"] != "") { echo $rp_options["rp_TertiaryColour"]; } else { echo '00A6C6'; } ?> !important;
	color: #<?php if ($rp_options["rp_SidebarLinkColour"] != "") { echo $rp_options["rp_SidebarLinkColour"]; } else { echo 'FFFFFF'; } ?> !important;
}

#wpadminbar .quicklinks > ul > li > a {
	padding: 9px 15px !important;
}

#wpadminbar #wp-admin-bar-search .ab-item {
	padding: 9px !important;
}