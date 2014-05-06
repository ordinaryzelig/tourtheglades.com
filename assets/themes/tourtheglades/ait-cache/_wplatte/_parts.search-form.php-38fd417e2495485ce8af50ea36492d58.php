<?php //netteCache[01]000495a:2:{s:4:"time";s:21:"0.20338900 1372952871";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:105:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/search-form.php";i:2;i:1372952424;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/search-form.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'awynjjw649')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<form action="<?php echo htmlSpecialChars($homeUrl) ?>" id="search-form" method="get" class="searchform">
	<div>
		<input type="text" name="s" placeholder="<?php echo htmlSpecialChars(__('search...', 'ait')) ?>" class="searchinput" />
		<input type="submit" name="submit"  value="<?php echo htmlSpecialChars(__('Search', 'ait')) ?>" class="searchsubmit" />
	</div>
</form>