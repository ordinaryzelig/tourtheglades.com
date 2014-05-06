<?php //netteCache[01]000525a:2:{s:4:"time";s:21:"0.91897300 1370616584";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:135:"/hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/parts/service-boxes.php";i:2;i:1370616299;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/parts/service-boxes.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'il8x4il1ue')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if ($options->serviceBoxesDisplay): $serviceBoxes = $site->create('service-box', $options->serviceBoxesCategory) ;if ($serviceBoxes): ?>
	<section class="section sboxes-section grid-fullsize">
		<div class="service-boxes-container entry-content wrapper service-boxes-<?php echo htmlSpecialChars($options->serviceBoxesColumns) ?>">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($serviceBoxes) as $serviceBox): if ($iterator->getCounter() % $options->serviceBoxesColumns == 1): ?>
				<div class="sbox-row">
<?php endif ?>
			<div class="clearfix sbox sbox<?php echo htmlSpecialChars($iterator->counter) ?>
 <?php if ($iterator->getCounter() % $options->serviceBoxesColumns == 1): ?>first-sbox<?php elseif ($iterator->getCounter() % $options->serviceBoxesColumns == 0): ?>
last-sbox<?php endif ?>"
			style="width: <?php if (isset($box->options->boxWidth)): echo htmlSpecialChars(NTemplateHelpers::escapeCss($box->options->boxWidth)) ;echo $sboxesWidth ?>
px<?php endif ?>;">
				<div class="sbox-wrap">
					<div class="sbox-content clear clearfix <?php if ($serviceBox->thumbnailSrc): ?>
thumb-present<?php else: ?>thumb-missing<?php endif ?>">
						<a href="<?php echo htmlSpecialChars($serviceBox->options->boxLink) ?>">
							<h2 class="title"><strong><?php echo NTemplateHelpers::escapeHtml($serviceBox->title, ENT_NOQUOTES) ?>
</strong> <?php if ($serviceBox->options->boxSubtitle != ""): ?> <?php echo NTemplateHelpers::escapeHtml($serviceBox->options->boxSubtitle, ENT_NOQUOTES) ;endif ?></h2>
<?php if ($serviceBox->thumbnailSrc): ?>
							<span class="title-icon">
								<img src="<?php echo htmlSpecialChars($serviceBox->thumbnailSrc) ?>" alt="<?php echo htmlSpecialChars($serviceBox->title) ?>" class="ico" />
							</span>
<?php endif ?>
						</a>
						<p><?php echo NTemplateHelpers::escapeHtml($serviceBox->options->boxText, ENT_NOQUOTES) ?></p>
<?php if (!empty($serviceBox->options->boxMoreText)): ?>
						<a href="<?php echo htmlSpecialChars($serviceBox->options->boxLink) ?>" class="more">
							<span><?php echo NTemplateHelpers::escapeHtml($serviceBox->options->boxMoreText, ENT_NOQUOTES) ?></span>
						</a>
<?php endif ?>
					</div>
				</div>
			</div>
<?php if ($iterator->getCounter() % $options->serviceBoxesColumns == 0 || $iterator->getCounter() == count($serviceBoxes)): ?>
				</div>
<?php endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
		</div>
	</section>
<?php endif ;endif ;
