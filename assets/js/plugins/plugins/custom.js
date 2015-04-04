// jQuery.noConflict();
// jQuery(document).ready(function() {
  	
// 	jQuery(".wrap form:has(div)").addClass("table-wrap");
	
// 	// Content wrap for media pages
// 	jQuery(".upload-php .wrap").children().not("#icon-upload, h2").wrapAll("<div class='content-wrap' />");
	
// 	// Content wrap for pages
// 	jQuery(".edit-php .wrap").children().not("#icon-edit-pages, #icon-edit, h2").wrapAll("<div class='content-wrap' />");
	
// 	// Content wrap for comments pages
// 	jQuery(".edit-comments-php .wrap").children().not("#icon-edit-comments, h2").wrapAll("<div class='content-wrap' />");
	
// 	// Content wrap for users pages
// 	jQuery(".users-php .wrap, .user-new-php .wrap, .profile-php .wrap").children().not("#icon-users, h2").wrapAll("<div class='content-wrap' />");
	
// 	// Content wrap for tools pages
// 	jQuery(".tools-php .wrap, .import-php .wrap, .export-php .wrap").children().not("#icon-tools, h2").wrapAll("<div class='content-wrap' />");
	
// 	// Content wrap for settings pages
// 	jQuery(".options-general-php .wrap, .options-reading-php .wrap, .options-writing-php .wrap, .options-discussion-php .wrap, .options-media-php .wrap, .options-permalink-php .wrap").children().not("#icon-options-general, h2").wrapAll("<div class='content-wrap' />");
	
// 	// Content wrap for plugins pages
// 	jQuery(".plugin-install-php .wrap, .plugins-php .wrap, .plugin-editor-php .wrap").children().not("#icon-plugins, h2").wrapAll("<div class='content-wrap' />");
	
// 	// Content wrap for appearance pages
// 	jQuery(".appearance_page_custom-header .wrap, .appearance_page_custom-background .wrap, .theme-editor-php .wrap").children().not("#icon-themes, h2").wrapAll("<div class='content-wrap' />");
	
// 	// Content wrap for update page
// 	jQuery(".update-core-php .wrap").children().not("#icon-tools, h2").wrapAll("<div class='content-wrap' />");
	
// 	// Content wrap for theme page
// 	jQuery(".theme-install-php .wrap").children().not("#icon-themes, h2").wrapAll("<div class='content-wrap' style='margin-top:0' />");
	
// 	// Content wrap for wooCommerce
// 	jQuery(".wrap.woocommerce").children().not(".icon-woocommerce, h2").wrapAll("<div class='content-wrap' />");
	
	
	
// 	// Remove (brackets) from notifications
//     /*if(jQuery('span.count').length){
// 		v = jQuery("span.count").html().replace(/\(|\)/g, "");
// 		jQuery("span.count").html(v);
// 	}else{
// 		//
// 	}*/
// 	if(jQuery('span.count').length){
// 		jQuery("span.count:contains(')')").each(function () {
// 		    jQuery(this).html(jQuery(this).html().replace(")", "<span class='transparent'></span>"));
// 		});
		
// 		jQuery("span.count:contains('(')").each(function () {
// 		    jQuery(this).html(jQuery(this).html().replace("(", "<span class='transparent'></span>"));
// 		});
// 	}else{
// 		//
// 	}
    
//     // Navigation animation
//     jQuery("ul#adminmenu > li.wp-has-submenu > a").click(function(e){
// 		jQuery(this).siblings("ul").slideToggle(300);
// 		jQuery(this).siblings("ul").siblings().addClass("remove-border");
// 		// Remove Open
// 		jQuery('ul#adminmenu').find('.outcanvas-open').removeClass('outcanvas-open');
// 		jQuery(this).addClass('outcanvas-open').parent().siblings("li").find("ul").slideUp(300);
// 	    return false;  
// 	});
	
// });
