<?php

/**
 * @file
 * data_and_gis's theme implementation to display a single Drupal page.i
 * This template is specific for a "Collections" page
 * in which it will include HTML markup needed by the SIMILE Exhibit widget
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<div id="page">

  <header id="header" role="banner">


	<!--- START Library Masthead --->
	
	<div id="masthead">
	<a class="skipLink" href="#contentBox">Skip to Main Content</a>
	
		<div id="dlLogo">
		<a href="http://library.duke.edu/" onclick="pageTracker._trackEvent('masthead', 'libraryLogo');"><img alt="Duke University Libraries" height="59" src="http://library.duke.edu/imgs/blue-note/logo2.gif" width="167"></a>
		</div> <!-- /dlLogo -->
		
		<div id="bannerRight">
		
			<div id="googleDiv">
			<p id="bannerSearchImage"><img alt="Web Site Search" height="12" hspace="0" src="http://library.duke.edu/imgs/blue-note/search_text.gif" vspace="0" width="134"></p>
			
			<div id="googleSearchBox">
			<!-- Google CSE Search Box Begins -->
			<form action="http://library.duke.edu/search/search-results.html" id="cse-search-box">
				<input name="cx" type="hidden" value="012356957315223414689:wgz7mpl3c9a">
				<input name="cof" type="hidden" value="FORID:11">
				<input alt="Enter search terms" name="q" size="18" type="text">
				<input align="middle" alt="Go" id="btnG" name="btnG" src="http://library.duke.edu/imgs/blue-note/go.gif" type="image" onclick="pageTracker._trackEvent('masthead', 'googleSearchBox');">
			</form>
			</div>
			<!-- Google CSE Search Box Ends -->
			
			<p id="bannerLinks"><a href="http://library.duke.edu/about/hours/" onclick="pageTracker._trackEvent('masthead', 'hourslink');">Hours</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/about/libraries/index.html" onclick="pageTracker._trackEvent('masthead', 'directionslink');">Directions</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/about/" onclick="pageTracker._trackEvent('masthead', 'aboutlink');">About</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/about/contact.html" onclick="pageTracker._trackEvent('masthead', 'stafflink');">Staff</a></p>
			</div> <!-- /googleDiv -->
		
		</div> <!-- /bannerRight -->
		
		<div id="askUsButton">
		<a href="http://library.duke.edu/libraries/askus.html" onclick="pageTracker._trackEvent('masthead', 'askButton');"><img alt="Ask us now" height="26" src="http://library.duke.edu/imgs/blue-note/ask_interior.gif" title="Ask us now" width="88"></a>
		</div>
	
	</div>
	
	<div id="mastheadShadow">&nbsp;</div>

	
	<!--- END Library Masthead --->
	
	<?php print $breadcrumb; ?>
	
	<?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
	<?php endif; ?>
	
	
    <?php print render($page['header']); ?>

  </header>

  <div id="main">

    <div id="content" class="column">
      <?php print render($page['highlighted']); ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>

      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

		<div class="exhibit-container">
		<div class="exhibit-facets">
			<p><a class="masterToggle" href="#">Expand/collapse all &raquo;</a></p>
			<div ex:collapsible="true" ex:expression=".label" ex:facetclass="AlphaRangeFacet" ex:facetlabel="Alphabetical" ex:interval="3" ex:role="facet" queryparamname="alpha">
				&nbsp;</div>
			<div>
				<div expression=".subject" facetlabel="Subject" id="subject-facet" role="facet">
					&nbsp;</div>
				<div expression=".keywords" facetlabel="Keywords" id="keywords-facet" role="facet">
					&nbsp;</div>
				<div expression=".format" facetlabel="Format" id="format-facet" role="facet">
					&nbsp;</div>
				<div class="hidden" expression=".label" facetlabel="Label" id="label-facet" role="facet">
					&nbsp;</div>
			</div>
		</div>
		<div class="dataCollectionView"> 
		<div ex:role="viewPanel" ex:formats="date {template: 'MMM d, yyyy'}"> 
		<div ex:role="view" ex:orders=".subject,.label" ex:directions="ascending" ex:possibleOrders=".subject, .label, .format, .idno" ></div> 
		  <div ex:role="lens"> 
		  <div class="dataCollectionBox"> 
			<div class="titleBox"><span class="title" ex:content=".label"></span></div> 
			<div class="details">
			<div class="detailsBox">
			<div class="url"><a ex:content=".address" ex:href-content=".address"></a></div>			  
				<div class="row" ex:if-exists=".abstract" ex:content=".abstract"></div>
				<div ex:if-exists=".subject" class="row"><span class="caption" >Subject:</span><span ex:content=".subject" class="text"></span></div>
				<div ex:if-exists=".format" class="row"><span  class="caption" >Format:</span><span ex:if-exists=".format" ex:content=".format" class="text"></span></div>
				<div ex:if-exists=".keywords" class="row"><span class="caption" >Keywords:</span><span ex:content=".keywords" class="text"></span> </div>
				<div class="clear"></div>
			   </div>
			</div>
			</div> 
		  </div> 
		 </div> 
		</div>  
		</div>

	  <div>
      <?php //print render($page['content']); ?>
	  </div>
      <?php print $feed_icons; ?>
    </div><!-- /#content -->

    <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see http://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div><!-- /#navigation -->


  </div><!-- /#main -->

  <?php print render($page['footer']); ?>
  
  
  <!--- START Library Footer --->
  
  <div id="footerRegion">

	<div class="dashedRule">&nbsp;</div>
	
		<div id="footerLinksA">
		
			<div id="blueDevil"><a href="http://library.duke.edu/" title="link to library home page" onclick="pageTracker._trackEvent('footer', 'blueDevilIcon');"><img alt="link to library home page" height="55" src="http://library.duke.edu/imgs/blue-note/reading-devil.gif" width="32"></a></div>
		
			<p class="footerLink"><a href="http://library.duke.edu/services/alumni_donors.html" onclick="pageTracker._trackEvent('footer', 'AlumniPortalLink');">Alumni Portal</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/divinity/" onclick="pageTracker._trackEvent('footer', 'divinityLink');">Divinity&nbsp;School&nbsp;Library</a> <span class="librariesPipe">|</span> <a href="http://library.fuqua.duke.edu/" title="Duke's business school library" onclick="pageTracker._trackEvent('footer', 'fordLibraryLink');">Ford&nbsp;Library</a> <span class="librariesPipe">|</span> <a href="http://law.duke.edu/lib/" onclick="pageTracker._trackEvent('footer', 'goodsonLibraryLink');">Goodson&nbsp;Law&nbsp;Library</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/about/depts/lsc/index.html" onclick="pageTracker._trackEvent('footer', 'lscLink');">Library&nbsp;Service&nbsp;Center</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/lilly/" onclick="pageTracker._trackEvent('footer', 'lillyLibraryLink');">Lilly&nbsp;Library</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/marine/" onclick="pageTracker._trackEvent('footer', 'marineLabLibraryLink');">Marine&nbsp;Lab&nbsp;Library</a> <span class="librariesPipe">|</span> <a href="http://mclibrary.duke.edu/" onclick="pageTracker._trackEvent('footer', 'medicalLibraryLink');">Medical&nbsp;Center&nbsp;Library</a> <span class="librariesPipe">|</span> <a href="http://m.library.duke.edu/" onclick="pageTracker._trackEvent('footer', 'mobileLibraryLink');">Mobile</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/music/" onclick="pageTracker._trackEvent('footer', 'musicLibraryLink');">Music&nbsp;Library</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/about/perkins.html" onclick="pageTracker._trackEvent('footer', 'perkinsBostockLink');">Perkins/Bostock&nbsp;Library</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/rubenstein/" onclick="pageTracker._trackEvent('footer', 'rubensteinLibraryLink');">Rubenstein&nbsp;Library</a> <span class="librariesPipe">|</span> <a href="http://link.duke.edu/" onclick="pageTracker._trackEvent('footer', 'theLinkLink');">The&nbsp;Link</a></p>
		
		</div><!-- /footerLinksA-->
	
	
		<div id="footerLinksB">
			<span class="footerLink"><a href="http://library.duke.edu/about/copyright.html" onclick="pageTracker._trackEvent('footer', 'reproductionLink');">Use and Reproduction</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/about/privacy.html" onclick="pageTracker._trackEvent('footer', 'privacyLink');">Privacy</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/about/contact.html" onclick="pageTracker._trackEvent('footer', 'contactUsLink');">Contact Us</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/support/index.html" onclick="pageTracker._trackEvent('footer', 'supportLink');">Support the Duke Libraries</a> <span class="librariesPipe">|</span> <a href="http://library.duke.edu/jobs/index.html" onclick="pageTracker._trackEvent('footer', 'jobsLink');">Jobs</a> <span class="librariesPipe">|</span> <a href="http://www.duke.edu/" onclick="pageTracker._trackEvent('footer', 'dukeEduLink');">Duke.edu</a></span>
		</div><!-- /footerLinksB-->
	
	</div>
  
  
  	<div id="connectWithUs">
		<p><a href="http://library.duke.edu/connect/index.php" title="follow us on Twitter" onclick="pageTracker._trackEvent('footer', 'twitterLink');"><img src="http://library.duke.edu/imgs/blue-note/twitter30x30.png" alt="follow us on Twitter"></a> <a href="http://library.duke.edu/connect/facebook.html" title="follow us on Facebook" onclick="pageTracker._trackEvent('footer', 'facebookLink');"><img src="http://library.duke.edu/imgs/blue-note/facebook30x30.png" alt="follow us on Facebook"></a> <a href="http://library.duke.edu/connect/youtube.html" title="follow us on YouTube" onclick="pageTracker._trackEvent('footer', 'youTubeLink');"><img src="http://library.duke.edu/imgs/blue-note/youtube30x30.png" alt="follow us on YouTube"></a> <a href="http://library.duke.edu/connect/flickr.html" title="follow us on Flickr" onclick="pageTracker._trackEvent('footer', 'flickrLink');"><img src="http://library.duke.edu/imgs/blue-note/flickr30x30.png" alt="follow us on Flickr"></a> <a href="http://pinterest.com/dukelibraries/" title="follow us on pinterest" onclick="pageTracker._trackEvent('footer', 'pinterestLink');"><img src="http://library.duke.edu/imgs/blue-note/pinterest30x30.png" alt="follow us on Pinterest"></a> <a href="http://blogs.library.duke.edu/" title="follow our blogs and feeds" onclick="pageTracker._trackEvent('footer', 'blogsLink');"><img src="http://library.duke.edu/imgs/blue-note/rss30x30.png" alt="follow our blogs and feeds"></a></p>
		
		<p><a href="http://library.duke.edu/about/contact.html" title="Contact Us" onclick="pageTracker._trackEvent('footer', 'phoneIconLink');"><img src="http://library.duke.edu/imgs/blue-note/cellphone.gif" alt="Contact Us" width="18" height="25" class="footerPhone"></a>919-660-5870<br>(Perkins Circulation Desk)</p>
	
	</div>
	
	
	<div id="shareThis1">
		<script src="http://w.sharethis.com/button/sharethis.js#publisher=df4743ea-961a-4544-96ef-9f33753f4856&amp;type=website" type="text/javascript"></script><span id="sharethis_0"><a class="stbutton stico_default" title="ShareThis via email, AIM, social bookmarking and networking sites, etc." href="javascript:void(0)" st_page="home"><span class="stbuttontext" st_page="home">ShareThis</span></a></span>
	</div>
	
  
  	<div id="ccCopyright"><!-- Start CC footer -->
		<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/" rel="license"><img alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" style="border-width:0" width="80" height="15"></a>
		<p>Unless otherwise specified on this page, this work is licensed under a<br><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/" rel="license">Creative Commons Attribution-Noncommercial-Share Alike 3.0 United States License</a>.</p>
	</div><!-- /ccCopyright -->
	
	<br clear="all" />
  
  <!--- END Library Footer --->
  

</div><!-- /#page -->

<?php print render($page['bottom']); ?>
