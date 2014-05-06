<?php //netteCache[01]000485a:2:{s:4:"time";s:21:"0.82867800 1372952788";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:96:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/homepage.php";i:2;i:1372952262;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/homepage.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'f450qo5g34')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb0d585e4153_content')) { function _lb0d585e4153_content($_l, $_args) { extract($_args)
;if (trim($post->content) != ""): ?>
	<section class="section content-section">
		<div id="container" class="subpage clearfix <?php if(!is_active_sidebar("home-sidebar")): ?>
onecolumn<?php endif ?>">
			<div class="wrapper">
				<div id="content" class="entry-content mainbar clearfix" role="main">
					<div class="content-wrapper <?php if(is_active_sidebar("page-sidebar")): ?>
 leftContent<?php else: ?>content<?php endif ?>">
						<?php echo $post->content ?>

					</div>
				</div>
<?php if(is_active_sidebar("home-sidebar")): ?>
				<div class="home-sidebar right clearfix">
<?php dynamic_sidebar('home-sidebar') ?>
				</div>
<?php endif ?>
			</div>
		</div>
	</section>
<?php endif ;
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
if (!function_exists($_l->blocks[$sectionB][] = '_lbc16d47aa92__sectionB')) { function _lbc16d47aa92__sectionB($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/service-boxes.php", array('options' => $post->options('service-boxes')) + $template->getParams(), $_l->templates['f450qo5g34'])->render() ;}} call_user_func(reset($_l->blocks[$sectionB]), $_l, get_defined_vars()) ?>

<?php isset($post->options('testimonials')->overrideGlobal) ? $sectionC = 'sectionC' : $sectionC = 'xc' ;//
// block $sectionC
//
if (!function_exists($_l->blocks[$sectionC][] = '_lb30e105f278__sectionC')) { function _lb30e105f278__sectionC($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/testimonials.php", array('options' => $post->options('testimonials')) + $template->getParams(), $_l->templates['f450qo5g34'])->render() ;}} call_user_func(reset($_l->blocks[$sectionC]), $_l, get_defined_vars()) ?>

<?php isset($post->options('icon-menu')->overrideGlobal) ? $sectionD = 'sectionD' : $sectionD = 'xd' ;//
// block $sectionD
//
if (!function_exists($_l->blocks[$sectionD][] = '_lb72593febe8__sectionD')) { function _lb72593febe8__sectionD($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/icon-menu.php", array('options' => $post->options('icon-menu')) + $template->getParams(), $_l->templates['f450qo5g34'])->render() ;}} call_user_func(reset($_l->blocks[$sectionD]), $_l, get_defined_vars()) ?>

<?php isset($post->options('partners')->overrideGlobal) ? $sectionE = 'sectionE' : $sectionE = 'xe' ;//
// block $sectionE
//
if (!function_exists($_l->blocks[$sectionE][] = '_lba889faba0b__sectionE')) { function _lba889faba0b__sectionE($_l, $_args) { extract($_args) ;NCoreMacros::includeTemplate("parts/partners.php", array('options' => $post->options('partners')) + $template->getParams(), $_l->templates['f450qo5g34'])->render() ;}} call_user_func(reset($_l->blocks[$sectionE]), $_l, get_defined_vars()) ;
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
