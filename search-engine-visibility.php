<?php
/*
Plugin Name: Search Engine Visibility
Description: Change the color of the admin bar when site is set to discourage search engines from indexing
Author: Jaz White
Version: 1.0
Author URI: jazanne.com
*/

function seo_css(){

	$css ='
	<style>
	/* Admin Bar */
	#wpadminbar {
	  color: #fff;
	  background: #800000;
	}

	#wpadminbar .ab-item,
	#wpadminbar a.ab-item,
	#wpadminbar > #wp-toolbar span.ab-label,
	#wpadminbar > #wp-toolbar span.noticon {
	  color: #fff;
	}

	#wpadminbar .ab-submenu .ab-item, #wpadminbar .quicklinks .menupop ul li a, #wpadminbar .quicklinks .menupop ul li a strong, #wpadminbar .quicklinks .menupop.hover ul li a, #wpadminbar.nojs .quicklinks .menupop:hover ul li a {
		color: rgba(255, 255, 255, 0.7);
	}

	#wpadminbar .ab-icon,
	#wpadminbar .ab-icon:before,
	#wpadminbar .ab-item:before,
	#wpadminbar .ab-item:after {
	  color: rgba(255, 255, 255, 0.7);
	}

	#wpadminbar:not(.mobile) .ab-top-menu > li:hover > .ab-item,
	#wpadminbar:not(.mobile) .ab-top-menu > li > .ab-item:focus,
	#wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus,
	#wpadminbar.nojs .ab-top-menu > li.menupop:hover > .ab-item,
	#wpadminbar .ab-top-menu > li.menupop.hover > .ab-item {
	  color: #ce0000;
	  background: #800000;
	}

	#wpadminbar:not(.mobile) > #wp-toolbar li:hover span.ab-label,
	#wpadminbar:not(.mobile) > #wp-toolbar li.hover span.ab-label,
	#wpadminbar:not(.mobile) > #wp-toolbar a:focus span.ab-label {
	  color: #ce0000;
	}

	#wpadminbar:not(.mobile) li:hover .ab-icon:before,
	#wpadminbar:not(.mobile) li:hover .ab-item:before,
	#wpadminbar:not(.mobile) li:hover .ab-item:after,
	#wpadminbar:not(.mobile) li:hover #adminbarsearch:before {
	  color: #ce0000;
	}

	/* Admin Bar: submenu */
	#wpadminbar .menupop .ab-sub-wrapper {
	  background: #800000;
	}

	#wpadminbar .quicklinks .menupop ul.ab-sub-secondary,
	#wpadminbar .quicklinks .menupop ul.ab-sub-secondary .ab-submenu {
	  background: #800000;
	}

	#wpadminbar .ab-submenu .ab-item,
	#wpadminbar .quicklinks .menupop ul li a,
	#wpadminbar .quicklinks .menupop.hover ul li a,
	#wpadminbar.nojs .quicklinks .menupop:hover ul li a {
	  /*color: #ce0000;*/
	}

	#wpadminbar .quicklinks li .blavatar,
	#wpadminbar .menupop .menupop > .ab-item:before {
	  color: #e5f8ff;
	}

	#wpadminbar .quicklinks .menupop ul li a:hover,
	#wpadminbar .quicklinks .menupop ul li a:focus,
	#wpadminbar .quicklinks .menupop ul li a:hover strong,
	#wpadminbar .quicklinks .menupop ul li a:focus strong,
	#wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover > a,
	#wpadminbar .quicklinks .menupop.hover ul li a:hover,
	#wpadminbar .quicklinks .menupop.hover ul li a:focus,
	#wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover,
	#wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus,
	#wpadminbar li:hover .ab-icon:before,
	#wpadminbar li:hover .ab-item:before,
	#wpadminbar li a:focus .ab-icon:before,
	#wpadminbar li .ab-item:focus:before,
	#wpadminbar li .ab-item:focus .ab-icon:before,
	#wpadminbar li.hover .ab-icon:before,
	#wpadminbar li.hover .ab-item:before,
	#wpadminbar li:hover #adminbarsearch:before,
	#wpadminbar li #adminbarsearch.adminbar-focused:before {
	  color: #ce0000;
	}

	#wpadminbar .quicklinks li a:hover .blavatar,
	#wpadminbar .quicklinks li a:focus .blavatar,
	#wpadminbar .quicklinks .ab-sub-wrapper .menupop.hover > a .blavatar,
	#wpadminbar .menupop .menupop > .ab-item:hover:before,
	#wpadminbar.mobile .quicklinks .ab-icon:before,
	#wpadminbar.mobile .quicklinks .ab-item:before {
	  color: #ce0000;
	}

	#wpadminbar.mobile .quicklinks .hover .ab-icon:before,
	#wpadminbar.mobile .quicklinks .hover .ab-item:before {
	  color: #ce0000;
	}

	/* Admin Bar: my account */
	#wpadminbar .quicklinks li#wp-admin-bar-my-account.with-avatar > a img {
	  border-color: #6eb9d4;
	  background-color: #6eb9d4;
	}

	#wpadminbar #wp-admin-bar-user-info .display-name {
	  color: #fff;
	}

	#wpadminbar #wp-admin-bar-user-info a:hover .display-name {
	  color: #ce0000;
	}

	#wpadminbar #wp-admin-bar-user-info .username {
	  color: #fff;
	}
	</style>
	';

	return $css;
}

function add_seo_css() {
	if (!get_option('blog_public')){
		echo seo_css();
	}
}

add_action( 'admin_bar_menu', 'add_seo_css' );

?>
