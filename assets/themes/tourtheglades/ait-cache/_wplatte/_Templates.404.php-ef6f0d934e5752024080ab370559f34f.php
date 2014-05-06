<?php //netteCache[01]000480a:2:{s:4:"time";s:21:"0.99834500 1372952870";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:91:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/404.php";i:2;i:1372952260;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/404.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'qktgs398ut')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb44ca0079cb_content')) { function _lb44ca0079cb_content($_l, $_args) { extract($_args)
;NCoreMacros::includeTemplate("parts/content-none.php", $template->getParams(), $_l->templates['qktgs398ut'])->render() ;
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
