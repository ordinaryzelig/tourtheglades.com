<?php //netteCache[01]000485a:2:{s:4:"time";s:21:"0.94722200 1373384769";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:96:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/category.php";i:2;i:1372952261;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/category.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'dm6upg6i9q')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb5fe3828dda_content')) { function _lb5fe3828dda_content($_l, $_args) { extract($_args)
?>
<section class="section content-section blog-section category-section">
	<div id="container" class="subpage blog category <?php if(is_active_sidebar("blog-sidebar")): else: ?>
onecolumn<?php endif ?>">
		<div class="wrapper">
<?php if ($posts): ?>
			<header class="entry-title subpage-header">
				<h1 class="main-title page-title">
					<?php echo NTemplateHelpers::escapeHtml(__('Category Archives: ', 'ait'), ENT_NOQUOTES) ?>
<span><?php echo NTemplateHelpers::escapeHtml($category->title, ENT_NOQUOTES) ?></span>
				</h1>
			</header>

			<div id="content" class="entry-content mainbar clearfix" role="main">
<?php if (strlen($category->description) !== 0): ?>
					<div class="category-archive-meta"><?php echo $category->description ?></div>
<?php endif ?>

<?php NCoreMacros::includeTemplate("parts/posts-loop.php", array('posts' => $posts) + $template->getParams(), $_l->templates['dm6upg6i9q'])->render() ?>
			</div>

<?php if(is_active_sidebar("blog-sidebar")): ?>
			<div class="page-sidebar blog-sidebar right clearfix">
<?php dynamic_sidebar('blog-sidebar') ?>
			</div>
<?php endif ?>

<?php NCoreMacros::includeTemplate("parts/content-nav.php", array('location' => 'nav-below') + $template->getParams(), $_l->templates['dm6upg6i9q'])->render() ;else: ?>
			<div id="content" class="entry-content" role="main">
				<div class="wrapper">
<?php NCoreMacros::includeTemplate("parts/nothing-found.php", $template->getParams(), $_l->templates['dm6upg6i9q'])->render() ?>
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
