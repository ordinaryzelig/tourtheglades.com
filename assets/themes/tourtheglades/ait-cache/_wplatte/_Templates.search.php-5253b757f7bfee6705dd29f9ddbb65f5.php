<?php //netteCache[01]000483a:2:{s:4:"time";s:21:"0.75799400 1382627799";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:94:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/search.php";i:2;i:1372952262;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/search.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '4wrtpd08yr')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb8cfa710bed_content')) { function _lb8cfa710bed_content($_l, $_args) { extract($_args)
?>
<section class="section content-section blog-section">
	<div id="container" class="subpage clearfix <?php if(is_active_sidebar("blog-sidebar")): else: ?>
onecolumn<?php endif ?>">
		<div class="wrapper">
<?php if ($posts): ?>
				<div id="content" class="entry-content mainbar clearfix" role="main">
					<div class="content-wrapper clearfix">
<?php NCoreMacros::includeTemplate("parts/posts-loop.php", array('posts' => $posts) + $template->getParams(), $_l->templates['4wrtpd08yr'])->render() ?>
					</div>
				</div>

<?php if(is_active_sidebar("blog-sidebar")): ?>
				<div class="page-sidebar blog-sidebar right clearfix">
<?php dynamic_sidebar('blog-sidebar') ?>
				</div>
<?php endif ?>

<?php NCoreMacros::includeTemplate("parts/content-nav.php", array('location' => 'nav-below') + $template->getParams(), $_l->templates['4wrtpd08yr'])->render() ;else: ?>
				<div id="content" class="entry-content" role="main">
					<div class="content-wrapper">
<?php NCoreMacros::includeTemplate("parts/content-none.php", $template->getParams(), $_l->templates['4wrtpd08yr'])->render() ?>
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

<?php 
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
