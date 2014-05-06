<?php //netteCache[01]000512a:2:{s:4:"time";s:21:"0.60471900 1370623297";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:122:"/hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/header.php";i:2;i:1370623295;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/header.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'upd7shqnxo')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php echo NTemplateHelpers::escapeHtmlComment($site->langAttributes) ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php echo NTemplateHelpers::escapeHtmlComment($site->langAttributes) ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php echo NTemplateHelpers::escapeHtml($site->langAttributes) ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php echo htmlSpecialChars($site->charset) ?>" />
<script type='text/javascript'>var ua = navigator.userAgent; var meta = document.createElement('meta');if((ua.toLowerCase().indexOf('android') > -1 && ua.toLowerCase().indexOf('mobile')) || ((ua.match(/iPhone/i)) || (ua.match(/iPod/i)))){ meta.name = 'viewport';	meta.content = 'target-densitydpi=device-dpi, width=480'; }var m = document.getElementsByTagName('meta')[0]; m.parentNode.insertBefore(meta,m);</script> 	<meta name="author" content="AitThemes.com, http://www.ait-themes.com" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php echo htmlSpecialChars($site->pingbackUrl) ?>" />
<?php if(is_singular() && get_option("thread_comments")){wp_enqueue_script("comment-reply");}wp_head() ?>

	<!--[if lt IE 9]>
		<script src="//ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->

	<link id="ait-style" rel="stylesheet" type="text/css" media="all" href="<?php echo WpLatteFunctions::lessify() ?>" />
	<title><?php echo WpLatteFunctions::getTitle() ?></title>
</head>

<body <?php body_class() ?> data-themeurl="<?php echo NTemplateHelpers::escapeHtml($themeUrl, ENT_NOQUOTES) ?>">
	<div class="mainpage">
		<div class="main-container">
			<div id="fixedmenu-container">
				<div class="fixed-content wrapper">
					<div class="menu-content">
						<div id="mainmenu-dropdown-duration" style="display: none;">200</div>
						<div id="mainmenu-dropdown-easing" style="display: none;">swing</div>
						<span class="menubut bigbut"><?php echo NTemplateHelpers::escapeHtml(__('Main Menu', 'ait'), ENT_NOQUOTES) ?></span>
<?php wp_nav_menu(array('theme_location' => 'primary-menu', 'fallback_cb' => 'default_menu', 'container' => 'nav', 'container_class' => 'mainmenu', 'menu_class' => 'menu')) ?>

<?php if (function_exists('icl_get_languages')): if (icl_get_languages('skip_missing=0')): ?>
							<div id="flags">
								<div class="flag-selected"></div>
								<ul class="flags-dropdown">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator(icl_get_languages('skip_missing=0')) as $lang): ?>
									<li <?php if ($lang['active'] == 1): ?>class="flag-active"<?php endif ?>
><a href="<?php echo htmlSpecialChars($lang['url']) ?>"><img src="<?php echo htmlSpecialChars($lang['country_flag_url']) ?>
" alt="<?php echo htmlSpecialChars($lang['translated_name']) ?>" /></a></li>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
								</ul>
							</div>
<?php endif ;endif ?>

						
					</div>
				</div>
			</div>

<?php if (isset($post) && isset($post->options('slider')->overrideGlobal)): if (function_exists('putRevSlider')): if ($post->options('slider')->sliderDisplay == true): ?>
						<div class="top-container slider-enabled">
<?php else: ?>
						<div class="top-container slider-disabled">
<?php endif ;else: ?>
					<div class="top-container slider-disabled">
<?php endif ;else: if (function_exists('putRevSlider')): if ($themeOptions->sections->sliderDisplay == true): ?>
						<div class="top-container slider-enabled">
<?php else: ?>
						<div class="top-container slider-disabled">
<?php endif ;else: ?>
					<div class="top-container slider-disabled">
<?php endif ;endif ?>

				<header class="page-header clearfix">
					<div class="wrapper clearfix">
						<div class="logo left clearfix">
							<a href="<?php echo htmlSpecialChars($homeUrl) ?>" class="trademark"><img src="<?php echo htmlSpecialChars($themeOptions->general->logoImg) ?>
" alt="<?php echo htmlSpecialChars($themeOptions->general->tagline) ?>" /></a>
							<div class="table">
<?php if (!empty($themeOptions->general->tagline)): ?>
								<div class="tagLineHolder">
									<p class="left textshadow info"><?php echo $themeOptions->general->tagline ?></p>
								</div>
<?php endif ?>
							</div>
						</div>
						<aside class="quick-info right">
							<!--	<span class="button share-button right"><a href="<?php if ($site->isHomepage or $site->is404): echo NTemplateHelpers::escapeHtmlComment($homeUrl) ;else: echo NTemplateHelpers::escapeHtmlComment($post->permalink) ;endif ?>" class="share-link" rel="prettySociable">share</a></span>-->

<?php if ($themeOptions->socialIcons->displayIcons): ?>
							<ul class="social-icons right clearfix">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($themeOptions->socialIcons->icons) as $icon): ?>
								<li class="left"><span class="icon-round"></span><a href="<?php if (!empty($icon->link)): echo htmlSpecialChars($icon->link) ;else: ?>
#<?php endif ?>"><span class="icon" title="<?php echo htmlSpecialChars($icon->title) ?>
" style="background-image: url('<?php echo htmlSpecialChars(NTemplateHelpers::escapeCss($icon->image)) ?>
');"><?php echo NTemplateHelpers::escapeHtml($icon->title, ENT_NOQUOTES) ?></span></a></li>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
							</ul>
<?php endif ?>
						</aside>
					</div>

				</header>

<?php if (isset($post) && isset($post->options('slider')->overrideGlobal)): if (function_exists('putRevSlider')): if ($post->options('slider')->sliderDisplay == true): NCoreMacros::includeTemplate("parts/slider.php", array('options' => $post->options('slider')) + $template->getParams(), $_l->templates['upd7shqnxo'])->render() ?>
							<div class="grey-bg"></div>
<?php else: ?>
							<div class="grey-bg">
<?php NCoreMacros::includeTemplate("parts/breadcrumbs.php", $template->getParams(), $_l->templates['upd7shqnxo'])->render() ?>
							</div>
<?php endif ;else: ?>
						<div class="grey-bg">
<?php NCoreMacros::includeTemplate("parts/breadcrumbs.php", $template->getParams(), $_l->templates['upd7shqnxo'])->render() ?>
						</div>
<?php endif ;else: if (function_exists('putRevSlider')): if ($themeOptions->sections->sliderDisplay == true): NCoreMacros::includeTemplate("parts/slider.php", array('options' => $themeOptions->sections) + $template->getParams(), $_l->templates['upd7shqnxo'])->render() ?>
							<div class="grey-bg"></div>
<?php else: ?>
							<div class="grey-bg">
<?php NCoreMacros::includeTemplate("parts/breadcrumbs.php", $template->getParams(), $_l->templates['upd7shqnxo'])->render() ?>
							</div>
<?php endif ;else: ?>
						<div class="grey-bg">
<?php NCoreMacros::includeTemplate("parts/breadcrumbs.php", $template->getParams(), $_l->templates['upd7shqnxo'])->render() ?>
						</div>
<?php endif ;endif ?>

			</div>
		</div>

