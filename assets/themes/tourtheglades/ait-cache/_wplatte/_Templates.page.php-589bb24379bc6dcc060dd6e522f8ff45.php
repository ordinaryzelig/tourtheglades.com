<?php //netteCache[01]000481a:2:{s:4:"time";s:21:"0.29055000 1372952910";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:92:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/page.php";i:2;i:1372952262;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/page.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'svtt5ti5y5')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe73c9d8e8b_content')) { function _lbe73c9d8e8b_content($_l, $_args) { extract($_args)
?>
	<div id="container" class="subpage subpage-line clear clearfix <?php if(!is_active_sidebar("page-sidebar")): ?>
onecolumn<?php endif ?>">
		<div class="wrapper">
			<div id="content" class="mainbar entry-content clearfix">
				<div class="<?php if(is_active_sidebar("page-sidebar")): ?> leftContent<?php else: ?>
content<?php endif ?>">
					<?php echo $post->content ?>

				</div>
<?php NCoreMacros::includeTemplate("comments.php", $template->getParams(), $_l->templates['svtt5ti5y5'])->render() ?>
			</div>

<?php if(is_active_sidebar("page-sidebar")): ?>
		<div class="page-sidebar right clearfix">
<?php dynamic_sidebar('page-sidebar') ?>
		</div>
<?php endif ?>
	</div>
</div>
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
$_l->extends = $layout ;$sectionsOrder = isset($post->options('sections-order')->overrideGlobal) ? $post->options('sections-order')->sectionsOrder : null ?>


<?php isset($post->options('service-boxes')->overrideGlobal) ? $sectionB = 'sectionB' : $sectionB = 'xb' ;//
// block $sectionB
//
if (!function_exists($_l->blocks[$sectionB][] = '_lbf0af4d9104__sectionB')) { function _lbf0af4d9104__sectionB($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/service-boxes.php", array('options' => $post->options('service-boxes')) + $template->getParams(), $_l->templates['svtt5ti5y5'])->render() ;}} call_user_func(reset($_l->blocks[$sectionB]), $_l, get_defined_vars()) ?>

<?php isset($post->options('testimonials')->overrideGlobal) ? $sectionC = 'sectionC' : $sectionC = 'xc' ;//
// block $sectionC
//
if (!function_exists($_l->blocks[$sectionC][] = '_lb12989c60a8__sectionC')) { function _lb12989c60a8__sectionC($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/testimonials.php", array('options' => $post->options('testimonials')) + $template->getParams(), $_l->templates['svtt5ti5y5'])->render() ;}} call_user_func(reset($_l->blocks[$sectionC]), $_l, get_defined_vars()) ?>

<?php isset($post->options('icon-menu')->overrideGlobal) ? $sectionD = 'sectionD' : $sectionD = 'xd' ;//
// block $sectionD
//
if (!function_exists($_l->blocks[$sectionD][] = '_lb424d63adc8__sectionD')) { function _lb424d63adc8__sectionD($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/icon-menu.php", array('options' => $post->options('icon-menu')) + $template->getParams(), $_l->templates['svtt5ti5y5'])->render() ;}} call_user_func(reset($_l->blocks[$sectionD]), $_l, get_defined_vars()) ?>

<?php isset($post->options('partners')->overrideGlobal) ? $sectionE = 'sectionE' : $sectionE = 'xe' ;//
// block $sectionE
//
if (!function_exists($_l->blocks[$sectionE][] = '_lbe322b92343__sectionE')) { function _lbe322b92343__sectionE($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/partners.php", array('options' => $post->options('partners')) + $template->getParams(), $_l->templates['svtt5ti5y5'])->render() ;}} call_user_func(reset($_l->blocks[$sectionE]), $_l, get_defined_vars()) ;
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
