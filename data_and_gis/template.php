<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function data_and_gis_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  data_and_gis_preprocess_html($variables, $hook);
  data_and_gis_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function data_and_gis_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 * 
 * Detect when a 'collections page' node is the focus of the rendering process:
 * When that condition is true, add the appropriate js and css files, 
 * as well as a <LINK> element to load in the google spreadsheet
 * referenced by 'field_json_feed_url'
 */
function data_and_gis_preprocess_page(&$variables, $hook) {
	$page = page_manager_get_current_page();
	kpr($page);
	// TODO -- add debugging when needed
	if (isset($variables['node']->type) && $variables['node']->type == 'collections_page') {
		$values = field_get_items('node', $variables['node'], 'field_json_feed_url');
		$field_json_feed_url = isset($values) ? 
			$values[0]['value'] : 
			'';
		$variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
		$js_path = 'http://api.simile-widgets.org/exhibit/2.2.0/exhibit-api.js';
		$inline = <<<EOL
			<script type="text/javascript" src="{$js_path}?autoCreate=false"></script>
EOL;
		drupal_add_html_head(
			array(
				'#type' => 'markup',
				'#markup' => $inline,
			),
			'exhibit-api'
		);
		drupal_add_js(drupal_get_path('theme', 'data_and_gis') . '/js/jquery_url.js');
		drupal_add_js(drupal_get_path('theme', 'data_and_gis') . '/js/simile/exhibit/lens.js');
		drupal_add_js(drupal_get_path('theme', 'data_and_gis') . '/js/init-exhibit.js');
		drupal_add_css(drupal_get_path('theme', 'data_and_gis') . '/css/datagis.css');
		drupal_add_css(drupal_get_path('theme', 'data_and_gis') . '/css/simile-datagis.css');
		drupal_add_css('http://library.duke.edu/css/main/data/horizontal-nav.css', 'external');

		// TODO add a js file that attaches on-load behavior
		drupal_add_html_head(
			array(
				'#tag' => 'link',
				'#attributes' => array(
					'converter' => 'googleSpreadsheets',
					'href' => $field_json_feed_url,
					'rel' => 'exhibit/data',
					'type' => 'application/jsonp',
				),
				'#weight' => '99999',
			),
			'google_spreadsheet_converter'
		);
	}
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* Delete this line to expose the function
function data_and_gis_preprocess_node(&$variables, $hook) {
	watchdog('preprocess_node', 'made it');
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // data_and_gis_preprocess_node_page() or data_and_gis_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function data_and_gis_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function data_and_gis_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function data_and_gis_preprocess_block(&$variables, $hook) {
	if ($variables['block']->delta == '1') {	// adjust when the delta value for the 'hours' block is known/changed
		// with this line below, we can effectively apply styling to the target block based on
		// 'data_gis_block-hours'.
		$variables['classes_array'][] = 'data_gis_block-hours';
	}
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}


/**
 * Implements template_breadcrumbs
 * 
 * Modify breadcrumb trail
 *
 * @param $variables
 *   An array of variables to pass to the theme.
 */
function data_and_gis_breadcrumb($variables) {
	
	$breadcrumb = $variables['breadcrumb'];
		
		if (!empty($breadcrumb)) {
			
			if ($breadcrumb[0]=='<a href="/">Home</a>') {
				$breadcrumb[0]='<a href="http://library.duke.edu">Duke Libraries</a> &gt; <a href="/">Data and GIS Services</a>';
			}
			
			// Adding the title of the current page to the breadcrumb.
			$breadcrumb[] = drupal_get_title();
		
			// Provide a navigational heading to give context for breadcrumb links to
			// screen-reader users. Make the heading invisible with .element-invisible.
			$output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
			$output .= '<div class="breadcrumb">' . implode(' &gt; ', $breadcrumb) . '</div>';
			
		return $output;
	}
}

/**
 * Implements template_preprocess_panels_pane()
 *
 * @param $variables
 *   An array of variables to pass to the theme
 */
function data_and_gis_preprocess_panels_pane(&$variables) {
	if ($variables['pane']->type == 'block') {
		// Now that it has been determined that a 'block' type has 
		// been detected, let' see if this is the "about menu", 
		// and if so, attempt to apply an 'active' class on the 
		// appropriate menu
		if ($variables['pane']->subtype == 'menu-menu-about-us-menu') {
			// TODO - create a function specifically for this task
			// FOR NOW -- code it here
		
			// determine the current path (or destination)
			$current_path = drupal_get_destination();
			$current_path = $current_path['destination'];
			
			foreach ($variables['content'] as $key => $val) {
				if (substr($key, 0, 1) == '#') {
					// ignore Drupal-style keys
					continue;
				}
				// locate the 'active-trail' location in the class array
				$where_is = array_search('active-trail', $variables['content'][$key]['#attributes']['class']);
				
				if ($variables['content'][$key]['#href'] == $current_path) {
					if ($where_is === FALSE) {
						$variables['content'][$key]['#attributes']['class'][] = 'active-trail';
					}
				} else {
					if ($where_is !== FALSE) {
						// remove the 'active-trail' css name from the class list
						array_splice($variables['content'][$key]['#attributes']['class'], $where_is, 1);
					}
				}
			}
		}
	}
}
