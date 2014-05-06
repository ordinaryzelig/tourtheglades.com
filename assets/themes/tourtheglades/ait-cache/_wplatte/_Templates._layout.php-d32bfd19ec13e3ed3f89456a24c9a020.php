<?php //netteCache[01]000484a:2:{s:4:"time";s:21:"0.06087500 1372952789";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:95:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/@layout.php";i:2;i:1372952260;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/@layout.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'f812e79upz')
;//
// block sectionA
//
if (!function_exists($_l->blocks['sectionA'][] = '_lb1c558ff0a7_sectionA')) { function _lb1c558ff0a7_sectionA($_l, $_args) { extract($_args)
;NUIMacros::callBlock($_l, 'content', $template->getParams()) ;
}}

//
// block sectionB
//
if (!function_exists($_l->blocks['sectionB'][] = '_lbe2bea17f3c_sectionB')) { function _lbe2bea17f3c_sectionB($_l, $_args) { extract($_args)
;NCoreMacros::includeTemplate("parts/service-boxes.php", array('options' => $themeOptions->sections) + $template->getParams(), $_l->templates['f812e79upz'])->render() ;
}}

//
// block sectionC
//
if (!function_exists($_l->blocks['sectionC'][] = '_lbf7f836f48a_sectionC')) { function _lbf7f836f48a_sectionC($_l, $_args) { extract($_args)
;NCoreMacros::includeTemplate("parts/testimonials.php", array('options' => $themeOptions->sections) + $template->getParams(), $_l->templates['f812e79upz'])->render() ;
}}

//
// block sectionD
//
if (!function_exists($_l->blocks['sectionD'][] = '_lbcc27236448_sectionD')) { function _lbcc27236448_sectionD($_l, $_args) { extract($_args)
;NCoreMacros::includeTemplate("parts/icon-menu.php", array('options' => $themeOptions->sections) + $template->getParams(), $_l->templates['f812e79upz'])->render() ;
}}

//
// block sectionE
//
if (!function_exists($_l->blocks['sectionE'][] = '_lb70d6da7e3b_sectionE')) { function _lb70d6da7e3b_sectionE($_l, $_args) { extract($_args)
;NCoreMacros::includeTemplate("parts/partners.php", array('options' => $themeOptions->sections) + $template->getParams(), $_l->templates['f812e79upz'])->render() ;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extends) ? FALSE : $template->_extends; unset($_extends, $template->_extends);


if ($_l->extends) {
	ob_start();
} elseif (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
get_header("") ?>
<div id="sections">
<?php if (isset($post)): if (!isHomePageTemplate($post->id)): if (is_single() || is_attachment()): ?>
				<div class="main-title wrapper">
					<h1 class="entry-title <?php if ($post->thumbnailUrl != ''): ?>image-present<?php endif ?>">
						<a class="<?php if ($post->thumbnailUrl != ''): ?>image-present<?php endif ?>
" href="<?php echo htmlSpecialChars($post->permalink) ?>" title="<?php echo htmlSpecialChars($template->printf(__('Permalink to %s', 'ait'), $post->title)) ?>
" rel="bookmark"><?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></a>
					</h1>
					<div class="entry-meta">
<?php NCoreMacros::includeTemplate("parts/post-meta.php", $template->getParams(), $_l->templates['f812e79upz'])->render() ;if ($post->isSingle and $post->author->bio and $post->isMultiAuthor): NCoreMacros::includeTemplate("parts/author-bio.php", $template->getParams(), $_l->templates['f812e79upz'])->render() ;endif ?>
					</div>
				</div>
<?php else: ?>
				<div class="main-title wrapper"><h1><?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></h1></div>
<?php endif ;endif ;else: if ($site->isSearch): if ($site->searchQuery): ?>
				<div class="main-title wrapper"><h1><?php echo NTemplateHelpers::escapeHtml(__('Search Results for:', 'ait'), ENT_NOQUOTES) ?>
 <span><?php echo NTemplateHelpers::escapeHtml($site->searchQuery, ENT_NOQUOTES) ?></span></h1></div>
<?php endif ;endif ;endif ?>







	<?php if (!isset($sectionsOrder)): ?> <?php $sectionsOrder = $themeOptions->sections->sectionsOrder ?>
 <?php endif ?>


<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($sectionsOrder) as $section): NUIMacros::callBlock($_l, $section, $template->getParams()) ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
</div>
<?php get_footer("") ;
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
