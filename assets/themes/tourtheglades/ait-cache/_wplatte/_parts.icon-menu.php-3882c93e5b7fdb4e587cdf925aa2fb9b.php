<?php //netteCache[01]000521a:2:{s:4:"time";s:21:"0.05375200 1370616585";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:131:"/hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/parts/icon-menu.php";i:2;i:1370616298;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/parts/icon-menu.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'xt134mbla9')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($options->iconMenuDisplay) and $options->iconMenuDisplay): $iconMenu = $site->create('icon-menu', $options->iconMenuCategory) ;if ($iconMenu): ?>
	<section class="section iconmenu-section">
		<div class="iconmenu-container wrapper">
<?php $width = 100 ;$margin = 2.0 ;$i = count($iconMenu) ;$widthLi = (($width + $margin)-($i*$margin))/$i ;$widthItems = $widthLi - 20 ?>
		<style type="text/css" scoped="scoped">
			ul#sti-menu li { width: <?php echo $widthLi ?>% }
		</style>

		<ul class="sti-menu clearfix clear <?php if ($i==1): ?>one<?php endif ?> <?php if ($i==2): ?>
two<?php endif ?> <?php if ($i==3): ?>three<?php endif ?> <?php if ($i==4): ?>four<?php endif ?>
 <?php if ($i==5): ?>five<?php endif ?> <?php if ($i==6): ?>six<?php endif ?> <?php if ($i==7): ?>
seven<?php endif ?> <?php if ($i==8): ?>eight<?php endif ?> <?php if ($i==9): ?>
nine<?php endif ?> <?php if ($i==10): ?>ten<?php endif ?>" id="sti-menu">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($iconMenu) as $icon): ?>
			<li data-hovercolor="<?php echo htmlSpecialChars($icon->options->iconMenuLabelHoverColor) ?>
" data-color="<?php echo $icon->options->iconMenuLabelColor ?>" data-bgcolor="<?php echo htmlSpecialChars($themeOptions->colors->iconMenuBackgroundColor) ?>
" data-bgcolor-hover="<?php echo htmlSpecialChars($themeOptions->colors->iconMenuBackgroundHoverColor) ?>">

				<a href="<?php echo htmlSpecialChars($icon->options->iconMenuLink) ?>">
					<h3 class="sti-item" data-type="mText" style="color: <?php echo $icon->options->iconMenuLabelColor ?>
"><?php echo NTemplateHelpers::escapeHtml($icon->title, ENT_NOQUOTES) ?></h3>
					<p class="sti-item" data-type="sText"><?php echo NTemplateHelpers::escapeHtml($icon->options->iconMenuLabel, ENT_NOQUOTES) ?></p>

						<span class="sti-icon sti-item" data-type="icon">
							<span class="icon-round"></span>
							<span class="icon-img" style="background: url('<?php echo htmlSpecialChars(NTemplateHelpers::escapeCss($icon->thumbnailSrc)) ?>') no-repeat center center"></span>
						</span>

				</a>
			</li>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
		</ul>
		</div>
	</section>
<?php endif ;endif ;
