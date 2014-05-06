<?php //netteCache[01]000511a:2:{s:4:"time";s:21:"0.29504200 1370616589";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:121:"/hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/index.php";i:2;i:1370616267;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/index.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'egyo49tnev')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbbe85c91e8f_content')) { function _lbbe85c91e8f_content($_l, $_args) { extract($_args)
?>
<section class="section content-section blog-section">
	<div id="container" class="subpage clearfix <?php if(is_active_sidebar("blog-sidebar")): else: ?>
onecolumn<?php endif ?>">
		<div class="wrapper">

<?php if ($posts): ?>
				<div id="content" class="entry-content mainbar clearfix" role="main">
					<div class="content-wrapper clearfix">
						<div class="content-text"><?php echo $post->content ?></div>
<?php NCoreMacros::includeTemplate("parts/posts-loop.php", array('posts' => $posts) + $template->getParams(), $_l->templates['egyo49tnev'])->render() ?>
					</div>
				</div>

<?php if(is_active_sidebar("blog-sidebar")): ?>
				<div class="page-sidebar blog-sidebar right clearfix">
<?php dynamic_sidebar('blog-sidebar') ?>
				</div>
<?php endif ?>

<?php NCoreMacros::includeTemplate("parts/content-nav.php", array('location' => 'nav-below') + $template->getParams(), $_l->templates['egyo49tnev'])->render() ;else: ?>
				<div id="content" class="entry-content" role="main">
					<div class="content-wrapper">
<?php NCoreMacros::includeTemplate("parts/content-none.php", $template->getParams(), $_l->templates['egyo49tnev'])->render() ?>
					</div>
				</div>
<?php endif ?>
		</div>
	</div>
</section>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = true; unset($_extends, $template->_extends);


if ($_l->extends) {
	ob_start();
} elseif (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
$_l->extends = $layout ?>


<?php if (isset($post)): $sectionsOrder = isset($post->options('sections-order')->overrideGlobal) ? $post->options('sections-order')->sectionsOrder : null ?>

<?php isset($post->options('service-boxes')->overrideGlobal) ? $sectionB = 'sectionB' : $sectionB = 'xb' ;//
// block $sectionB
//
if (!function_exists($_l->blocks[$sectionB][] = '_lb97c0620e57__sectionB')) { function _lb97c0620e57__sectionB($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/service-boxes.php", array('options' => $post->options('service-boxes')) + $template->getParams(), $_l->templates['egyo49tnev'])->render() ;}} call_user_func(reset($_l->blocks[$sectionB]), $_l, get_defined_vars()) ?>

<?php isset($post->options('testimonials')->overrideGlobal) ? $sectionC = 'sectionC' : $sectionC = 'xc' ;//
// block $sectionC
//
if (!function_exists($_l->blocks[$sectionC][] = '_lbde277d6495__sectionC')) { function _lbde277d6495__sectionC($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/testimonials.php", array('options' => $post->options('testimonials')) + $template->getParams(), $_l->templates['egyo49tnev'])->render() ;}} call_user_func(reset($_l->blocks[$sectionC]), $_l, get_defined_vars()) ?>

<?php isset($post->options('icon-menu')->overrideGlobal) ? $sectionD = 'sectionD' : $sectionD = 'xd' ;//
// block $sectionD
//
if (!function_exists($_l->blocks[$sectionD][] = '_lb013612ac08__sectionD')) { function _lb013612ac08__sectionD($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/icon-menu.php", array('options' => $post->options('icon-menu')) + $template->getParams(), $_l->templates['egyo49tnev'])->render() ;}} call_user_func(reset($_l->blocks[$sectionD]), $_l, get_defined_vars()) ?>

<?php isset($post->options('partners')->overrideGlobal) ? $sectionE = 'sectionE' : $sectionE = 'xe' ;//
// block $sectionE
//
if (!function_exists($_l->blocks[$sectionE][] = '_lb4996dd975f__sectionE')) { function _lb4996dd975f__sectionE($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/partners.php", array('options' => $post->options('partners')) + $template->getParams(), $_l->templates['egyo49tnev'])->render() ;}} call_user_func(reset($_l->blocks[$sectionE]), $_l, get_defined_vars()) ;endif ;
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
