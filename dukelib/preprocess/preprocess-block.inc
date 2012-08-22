<?php

function dukelib_alpha_preprocess_block(&$vars) {
	if ($vars['block']->module == 'dukelib_ui' && $vars['block']->delta == 'cc_license') {
		$vars['content_attributes_array']['id'] = 'copyright-share';
	}
	if ($vars['block']->delta == 'duke-footer-links' || $vars['block']->delta == 'menu-duke-footer-links') {
		$vars['content_attributes_array']['id'] = 'footerLinksB';
		$vars['content_attributes_array']['class'][] = 'omega';
		$vars['content_attributes_array']['class'][] = 'alpha';
	}
	if (in_array($vars['block']->subject, array('How Do I...', 'How Do I'))) {
		$vars['content_attributes_array']['id'] = 'menuHowDoI';
	}
	if ($vars['block']->title == 'News, Events & Exhibits') {
		$vars['content_attributes_array']['class'][] = 'myCarouselNews';

		drupal_add_js(drupal_get_path('theme', 'dukelib') . '/js/jcarousellite_1_0_1.js', 'file');
		drupal_add_js(drupal_get_path('theme', 'dukelib') . '/js/jquery.easing.1.3.min.js', 'file');
		drupal_add_js(drupal_get_path('theme', 'dukelib') . '/js/jquery.easing.compatibility.min.js', 'file');
		drupal_add_css(drupal_get_path('theme', 'dukelib') . '/css/carousel.css');
	}
	/*
	if ($vars['block']->module == 'aggregator' && $vars['block']->delta == 'feed-1') {
        $vars['classes_array'][] = 'myCarouselNews';
    	// add CSS for carousel
		// add JS for carousel
	}
	*/
    if ($vars['block']->module == 'hours') {
        drupal_add_css(drupal_get_path('module', 'hours') . '/css/hours.css');
    }
}
