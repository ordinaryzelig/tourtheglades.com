<?php //netteCache[01]000493a:2:{s:4:"time";s:21:"0.59764400 1379191783";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:103:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/image-nav.php";i:2;i:1372952423;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/image-nav.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '7xp3ka0xtt')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<nav id="nav-single">
	<?php ob_start() ;echo $template->printf(__('%s Previous', 'ait'), '<span class="meta-nav">&larr;</span>') ;$prev = ob_get_clean() ?>

	<?php ob_start() ;echo $template->printf(__('Next %s', 'ait'), '<span class="meta-nav">&rarr;</span>') ;$next = ob_get_clean() ?>

	<span class="nav-previous"><?php previous_image_link(false, $prev) ?></span>
	<span class="nav-next"><?php next_image_link(false, $next) ?></span>
</nav>