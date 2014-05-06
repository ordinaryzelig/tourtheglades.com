<?php //netteCache[01]000490a:2:{s:4:"time";s:21:"0.58205000 1372952795";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:100:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/slider.php";i:2;i:1372952424;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/parts/slider.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'qd5ze8x9s6')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($options->sliderDisplay) and $options->sliderDisplay): ?>
	<section class="section slider-section carousel-container">
<?php if (isset($options->sliderAliases) and $options->sliderAliases != 'null'): if (isset($options->sliderAlternative)): ?>
			<div class="slider-alternative" style="display: none">
				<img src="<?php echo htmlSpecialChars($options->sliderAlternative) ?>" alt="alternative" />
			</div>
<?php endif ;if (function_exists('putRevSlider')): putRevSlider($options->sliderAliases) ;endif ;endif ?>
	</section>
<?php endif ;
