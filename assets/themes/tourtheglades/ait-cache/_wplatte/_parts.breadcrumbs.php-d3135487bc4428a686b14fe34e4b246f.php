<?php //netteCache[01]000495a:2:{s:4:"time";s:21:"0.10363900 1373051036";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:105:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/breadcrumbs.php";i:2;i:1372952422;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/breadcrumbs.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'pae5ripwsx')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<div class="toolbar clearfix">
	<div class="wrapper">
		<span class="breadcrumbs"><?php echo NTemplateHelpers::escapeHtml(__('You are here:', 'ait'), ENT_NOQUOTES) ?>
 <?php echo WpLatteFunctions::breadcrumbs(array('delimiter' => "")) ?></span>
	</div>
</div>