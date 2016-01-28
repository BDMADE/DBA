/* Style Changer */

jQuery(document).ready(function(){

	/* Color Scheme */
	jQuery('#stlChanger .hdrCols a').click(function(){
		jQuery('#stlChanger .hdrCols a').removeClass('current');
		jQuery(this).addClass('current');
		
		color1 = jQuery(this).find('.color_1').attr('title');
		color2 = jQuery(this).find('.color_2').attr('title');
		
		function hexToRgb(hex) {
			var bigint = parseInt(hex, 16);
			var r = (bigint >> 16) & 255;
			var g = (bigint >> 8) & 255;
			var b = bigint & 255;

			return r + "," + g + "," + b;
		}
		
		color1_rgb = hexToRgb(color1);
		
		jQuery('#cFontStyleWColor1').text(
			'.services_inner .services_rollover {background:rgba(' + color1_rgb + ', .90);' + 
			'} ' +
			'.tog:hover .cmsms_plus,' +
			'.tog.current .cmsms_plus,' +
			'ul.s_filter_list li a.current,' +
			'ul.s_filter_list li a:hover,' +
			'.cmsms_post_format_img,' +
			'ul.page-numbers span,' +
			'#cmsms_latest_bottom_tweets,' +
			'.related_posts li.current a,' +
			'.related_posts li.current a:hover,' + 
			'.tabs.active li.current a,' +
			'.tabs.active li.current a:hover,' + 
			'.tabs li.current a,' +
			'.tour li.current a,' +
			'.tour.active li.current a,' +
			'#bottom .button_small:hover,' +
			'#bottom .widget_custom_popular_services_entries header,' + 
			'#bottom .widget_custom_latest_services_entries header,' +
			'.bottom_inner .cmsms_content_prev_slide:hover,' +
			'.bottom_inner .cmsms_content_next_slide:hover,' +
			'#navigation > li.current-menu-item:before,' +
			'#navigation > li.current-menu-parent:before,' +
			'#navigation > li.current-menu-ancestor:before,' +
			'.ls-lawbusiness .ls-nav-stop:hover:before,' +
			'.ls-lawbusiness .ls-nav-stop:hover:after,' +
			'.ls-lawbusiness .ls-nav-stop.ls-nav-stop-active:before,' +
			'.ls-lawbusiness .ls-nav-stop.ls-nav-stop-active:after,' +
			'.ls-lawbusiness .ls-bottom-slidebuttons a:hover,' +
			'.ls-lawbusiness .ls-bottom-slidebuttons a.ls-nav-active,' +
			'.bottom_inner .widget_custom_recent_testimonials_entries .cmsms_content_prev_slide:hover,' +
			'.bottom_inner .widget_custom_recent_testimonials_entries .cmsms_content_next_slide:hover,' +
			'.bottom_inner .widget_custom_latest_services_entries .cmsms_content_prev_slide:hover,' +
			'.bottom_inner .widget_custom_latest_services_entries .cmsms_content_next_slide:hover,' +
			'.bottom_inner .widget_custom_popular_services_entries .cmsms_content_prev_slide:hover,' + 
			'.bottom_inner .widget_custom_popular_services_entries .cmsms_content_next_slide:hover,' +
			'.cmsms_content_prev_slide:hover,' +
			'.cmsms_content_next_slide:hover,' +
			'.ie8 .services_inner .services_rollover,' +
			'.post_inner > .published > .cmsms_post_day,' +
			'.button,' +
			'.button_small,' +
			'.button_medium,' +
			'.button_large,' +
			'span.dropcap,' +
			'.title_icon,' +
			'.responsive_nav:hover span,' +
			'.responsive_nav:hover span:before,' +
			'.responsive_nav:hover span:after,' +
			'.responsive_nav.active span,' +
			'.responsive_nav.active span:before,' +
			'.responsive_nav.active span:after,' +
			'.cmsms_content_slider_parent ul.cmsms_slides_nav li.active a,' +
			'.cmsms_content_slider_parent ul.cmsms_slides_nav li a:hover,' +
			'.cmsms_timeline article:hover .cmsms_post_format_img,' +
			'.ls-law business .ls-bottom-slidebuttons a.ls-nav-active,' +
			'.ls-law business .ls-bottom-slidebuttons a:hover,' +
			'.ls-law business .ls-nav-prev:hover:before,' +
			'.ls-law business .ls-nav-next:hover:before,' +
			'.cmsms_pricing_table.current .cmsms_price_outer,' +
			'.post_type_shortcode .cmsms_content_prev_slide:hover,' +
			'.post_type_shortcode .cmsms_content_next_slide:hover,' +
			'.post_type_shortcode .cmsms_content_prev_slide:hover:active:before,' +
			'.post_type_shortcode .cmsms_content_next_slide:hover:active:before,' +
			'.cmsms_content_prev_slide:hover,' +
			'.cmsms_content_next_slide:hover,' +
			'.cmsms_content_prev_slide:hover:active,' +
			'.cmsms_content_next_slide:hover:active,' +
			'.cmsms_content_prev_slide:hover:active:before,' +
			'.cmsms_content_next_slide:hover:active:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active:before,' +
			'.widget_custom_recent_testimonials_entries .cmsms_content_prev_slide:hover,' +
			'.widget_custom_recent_testimonials_entries .cmsms_content_next_slide:hover,' +
			'.widget_custom_latest_services_entries .cmsms_content_prev_slide:hover,' +
			'.widget_custom_latest_services_entries .cmsms_content_next_slide:hover,' +
			'.widget_custom_popular_services_entries .cmsms_content_prev_slide:hover,' +
			'.widget_custom_popular_services_entries .cmsms_content_next_slide:hover,' +
			'.widget_custom_recent_testimonials_entries .cmsms_content_prev_slide:hover:active:before,' +
			'.widget_custom_recent_testimonials_entries .cmsms_content_next_slide:hover:active:before,' +
			'.widget_custom_latest_services_entries .cmsms_content_prev_slide:hover:active:before,' +
			'.widget_custom_latest_services_entries .cmsms_content_next_slide:hover:active:before,' +
			'.widget_custom_popular_services_entries .cmsms_content_prev_slide:hover:active:before,' +
			'.widget_custom_popular_services_entries .cmsms_content_next_slide:hover:active:before,' +
			'.comment-reply-link,' +
			'#cancel-comment-reply-link,' +
			'#submit,' +
			'input[type="submit"] {background-color:#' + color1 + ';}' + 
			'.social_icons li:hover a {background-color:#' + color1 + '!important;}' + 
			'input[type="text"]:focus,' +
			'textarea:focus,' +
			'input[type="password"]:focus,' +
			'input[type="email"]:focus,' +
			'select:focus,' +
			'.related_posts li.current,' +
			'.related_posts li.current:hover,' +
			'.tabs.active li.current,' +
			'.tour li.current,' +
			'.tour li.current a,' +
			'.tour li.current:hover,' +
			'.tour li.current a:hover,' +
			'ul.s_filter_list li a.current,' +
			'ul.s_filter_list li a:hover,' +
			'.payment_methods li input[type="radio"]:checked+label:before,' +
			'#bottom .cmsms-form-builder .check_parent input[type="radio"]:checked+label:before,' +
			'.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="radio"]:checked + span.wpcf7-list-item-label:before,' +
			'.cmsms-form-builder .check_parent input[type="radio"]:checked+label:before,' +
			'.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="checkbox"]:checked + span.wpcf7-list-item-label:before,' +
			'.checkout #shiptobilling input[type="checkbox"]:checked+label:before,' +
			'.cmsms-form-builder .check_parent input[type="checkbox"]:checked+label:before,' +
			'#bottom .widget_custom_flickr_entries .flickr_badge_image a:hover {border-color:#' + color1 + ';}' + 
			'code,' +
			'#navigation > li > ul,' +
			'.cmsms_content_prev_slide:hover:active:after,' +
			'.cmsms_content_prev_slide:hover:active span:before,' +
			'.cmsms_content_prev_slide:hover:active span:after,' +
			'.cmsms_content_next_slide:hover:active:after,' +
			'.cmsms_content_next_slide:hover:active span:before,' +
			'.cmsms_content_next_slide:hover:active span:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide span:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide span:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide span:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide span:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active span:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active span:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active span:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active span:after {border-top-color:#' + color1 + ';}' +
			'.cmsms_content_prev_slide:hover:active:after,' +
			'.cmsms_content_prev_slide:hover:active span:before,' +
			'.cmsms_content_prev_slide:hover:active span:after,' +
			'.cmsms_content_next_slide:hover:active:after,' +
			'.cmsms_content_next_slide:hover:active span:before,' +
			'.cmsms_content_next_slide:hover:active span:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide span:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide span:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide span:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide span:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active span:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_prev_slide:hover:active span:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active:after,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active span:before,' +
			'#cmsms_latest_bottom_tweets .cmsms_content_next_slide:hover:active span:after,' +
			'#navigation li > a,' +
			'#navigation li.current_page_ancestor > a,' +
			'#navigation li.current-menu-ancestor > a,' +
			'#navigation li.current_page_item > a,' +
			'#navigation > li.current_page_item > a,' +
			'#navigation > li.current_page_ancestor > a,' +
			'#navigation > li.current-menu-ancestor > a,' +
			'#navigation > li.current_page_item > a:hover,' +
			'#navigation > li.current_page_ancestor > a:hover,' +
			'#navigation > li.current-menu-ancestor > a:hover,' +
			'#navigation li li:hover > a:hover,' +
			'#navigation ul li:hover > a {border-bottom-color:#' + color1 + ';}' +
			'.ls-law business .ls-nav-start:hover,' +
			'.ls-law business .ls-nav-stop:hover {border-left-color:#' + color1 + ';border-right-color:#' + color1 + ';}' +
			'.ls-lawbusiness .ls-nav-start:hover:before,' +
			'.ls-lawbusiness .ls-nav-start.ls-nav-start-active:before {border-left-color:#' + color1 + '!important;}' +
			'a,' +
			'h1 a:hover,' +
			'h2 a:hover,' +
			'h3 a:hover,' +
			'h4 a:hover,' +
			'h5 a:hover,' +
			'h6 a:hover,' +
			'.tl_author,' +
			'#navigation > li > a:hover,' +
			'#navigation > li.current_page_ancestor > a,' +
			'#navigation > li.current-menu-ancestor > a,' +
			'#navigation > li.current-menu-ancestor > a:hover,' +
			'.service_navi a:hover,' +
			'.cmsms_comments:hover:before,' +
			'.cmsmsLike:hover span:after,' +
			'.jp-playlist li.jp-playlist-current div a,' +
			'.jp-playlist li div a:hover,' +
			'q:before,' +
			'blockquote:before,' +
			'.cmsms_timeline .entry-title,' +
			'.cmsms_timeline .entry-title a,' +
			'.cmsmsLike:hover span:before,' +
			'.cmsmsLike.active span:before,' +
			'.widget .tl-content:before,' +
			'#wp-calendar #today,' +
			'.pricing_footer span,' +
			'label .required,' +
			'.error h1,' +
			'.color_3,' + 
			'.widget_author_wrap:before,' +
			'#bottom .widget_custom_twitter_entries .tweet_time a:before,' +
			'#bottom .wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="checkbox"] + span.wpcf7-list-item-label:after,' +
			'.cmsms_our_team_wrap .entry-header .person_subtitle,' +
			'.service_title a:hover,' +
			'.star-rating span:before,' +
			'.pp_inline #commentform .stars span a:before,' +
			'.widget .product_list_widget li > a:hover,' +
			 '#footer a:hover,' +
			 '.bottom_inner a:hover {color:#' + color1 + ';}'
		);

		color2_rgb = hexToRgb(color2);
		
		jQuery('#cFontStyleWColor2').text(
			'.wrap_person:hover .cmsms_team_rollover,' +
			'.wrap_person.cmsms_mobile_hover .cmsms_team_rollover {background:rgba(' + color2_rgb + ', .70);' + 
			'} ' +
			'#bottom,' +
			'.footer_outer_wrap,' +
			'.custom_header,' +
			'.button:hover,' +
			'.button_small:hover,' +
			'.button.current,' +
			'.button_medium:hover,' +
			'.button_large:hover,' +
			'.comment-reply-link:hover,' +
			'#cancel-comment-reply-link:hover,' +
			'#submit:hover,' +
			'input[type="submit"]:hover,' +
			'.cmsms_info .published,' +
			'.tabs.active li a:hover,' +
			'.related_posts li a:hover,' +
			'.tabs li a:hover,' +
			'.tour li a:hover,' +
			'.cmsms_plus,' +
			'.button_medium current,' +
			'.button_medium.current.reversed,' +
			'.service_navi .square_prev,' +
			'.service_navi .square_next,' +
			'.cmsms_timeline .cmsms_post_format_img,' +
			'.post_inner > .published > .cmsms_post_month,' +
			'.cmsms_content_slider_parent ul.cmsms_slides_nav li a,' +
			'.post_type_shortcode .cmsms_content_prev_slide:hover:active,' +
			'.post_type_shortcode .cmsms_content_next_slide:hover:active,' +
			'.widget_custom_recent_testimonials_entries .cmsms_content_prev_slide,' +
			'.widget_custom_recent_testimonials_entries .cmsms_content_next_slide,' +
			'.widget_custom_latest_services_entries .cmsms_content_prev_slide,' +
			'.widget_custom_latest_services_entries .cmsms_content_next_slide,' +
			'.widget_custom_popular_services_entries .cmsms_content_prev_slide,' +
			'.widget_custom_popular_services_entries .cmsms_content_next_slide,' +
			'.widget_custom_recent_testimonials_entries .cmsms_content_prev_slide:hover:active,' +
			'.widget_custom_recent_testimonials_entries .cmsms_content_next_slide:hover:active,' +
			'.widget_custom_latest_services_entries .cmsms_content_prev_slide:hover:active,' +
			'.widget_custom_latest_services_entries .cmsms_content_next_slide:hover:active,' +
			'.widget_custom_popular_services_entries .cmsms_content_prev_slide:hover:active,' +
			'.widget_custom_popular_services_entries .cmsms_content_next_slide:hover:active,' +
			'.cmsms-form-builder .check_parent input[type="radio"]+label:after,' +
			'.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type="radio"] + span.wpcf7-list-item-label:after,' +
			'.post_type_shortcode .cmsms_content_prev_slide,' +
			'.post_type_shortcode .cmsms_content_next_slide,' +
			'#bottom .widget_custom_popular_services_entries header,' +
			'#bottom .widget_custom_latest_services_entries header {background-color:#' + color2  + ';}'
		);
		
		return false;
	});

	jQuery('#stlChanger #bgColor').parent('a').ColorPicker({
		onChange:function(hsb, hex, rgb){
			jQuery('#stlChanger').find('#bgColor').css({backgroundColor:'#' + hex});
			jQuery('body').css({backgroundColor:'#' + hex});
		},
		onSubmit:function(hsb, hex, rgb, el){
			jQuery('#stlChanger .stCols span').removeClass('current');
			jQuery(el).find('#bgColor').css({backgroundColor:'#' + hex});
			jQuery(el).find('#bgColor').attr({title:hex});
			jQuery(el).ColorPickerHide();
		},
		onBeforeShow:function(){
			jQuery(this).ColorPickerSetColor(jQuery('#stlChanger').find('#bgColor').attr('title'));
		}
	});
	
	jQuery('#stlChanger .stCols span').click(function(){
		var bgCol = jQuery(this).attr('title');
		jQuery('#stlChanger .stCols span').removeClass('current');
		jQuery(this).addClass('current');
		jQuery('#stlChanger #bgColor').css({backgroundColor:'#'+bgCol});
		jQuery('#stlChanger #bgColor').attr({title:bgCol});
		jQuery('body').css({backgroundColor:'#'+bgCol});
	});

	jQuery('#stlChanger .stBgs a').click(function(){
		var bgBgCol = jQuery(this).attr('href');
		jQuery('#stlChanger .stBgs a').removeClass('current');
		jQuery(this).addClass('current');
		jQuery('body').css({backgroundImage:'url(' + bgBgCol + ')'});
		jQuery('body').css({backgroundRepeat:'repeat', backgroundPosition:'0 0', backgroundAttachment:'scroll'});
		return false;
	});
	
	jQuery('#stlChanger a#fullwidth').click(function(){
		jQuery('#stlChanger a#boxed').removeClass('current');
		jQuery(this).addClass('current');
		jQuery('#page').removeClass('cmsms_boxed');
		jQuery(this).closest('.stBlock').next('.bg_visibile').slideUp('fast');
		jQuery('body').removeAttr('style');
		return false;
	});
	jQuery('#stlChanger a#boxed').click(function(){
		jQuery('#stlChanger a#fullwidth').removeClass('current');
		jQuery(this).addClass('current');
		jQuery('#page').addClass('cmsms_boxed');
		jQuery('body').css({backgroundImage:'url(http://claster.cmsmasters.net/wp-content/themes/claster/img/bgs/bg_1.png )'});
		jQuery('body').css({backgroundRepeat:'repeat', backgroundColor:'#e6eaed', backgroundPosition:'0 0', backgroundAttachment:'scroll'});
		jQuery(this).closest('.stBlock').next('.bg_visibile').slideDown('fast');
		return false;
	});
	
	jQuery('#styleReset').click(function(){
		jQuery('#styleLoader').fadeIn(1000, function(){
			jQuery('#styleLoader').fadeOut(1000);
			window.location.reload();
		});
		return false;
	});
	
	jQuery('.chBut').click(function(){
		if (jQuery(this).hasClass('closed')){
			jQuery(this).next('.chBody').css({display:'block'}).parent().animate({left:0}, 500, function(){
				jQuery(this).find('.chBut').removeClass('closed');
			});
		} else {
			jQuery(this).parent().animate({left:'-150px'}, 500, function(){
				jQuery(this).find('.chBut').next('.chBody').css({display:'none'});
				jQuery(this).find('.chBut').addClass('closed');
			});
		}
		return false;
	});
	
	jQuery('.chBut').parent().delay(1000).animate({left:'-150px'}, 500, function(){
		jQuery(this).find('.chBut').next('.chBody').css({display:'none'});
		jQuery(this).find('.chBut').addClass('closed');
	});
	
});
