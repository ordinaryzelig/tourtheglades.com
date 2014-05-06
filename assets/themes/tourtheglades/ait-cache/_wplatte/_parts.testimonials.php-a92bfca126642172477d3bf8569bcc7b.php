<?php //netteCache[01]000524a:2:{s:4:"time";s:21:"0.98714700 1370616584";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:134:"/hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/parts/testimonials.php";i:2;i:1370616300;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /hermes/waloraweb081/b2439/pow.highmmutt/htdocs/free99/toureverglades/wp-content/themes/tourtheglades/Templates/parts/testimonials.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'y4x4okzbks')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($options->testimonialsDisplay) && $options->testimonialsDisplay): $testimonials = $site->create('testimonial', $options->testimonialsCategory) ;if ($testimonials): ?>
	<section class="section testimonials-section">
		<div class="testimonials-container wrapper">
			<ul class="testimonials clearfix">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($testimonials) as $testimonial): ?>
				<li id="testimonial-<?php echo htmlSpecialChars($iterator->getCounter()) ?>" class="testimonial <?php if ($iterator->getCounter() == 1): ?>
active<?php endif ?> clearfix" style="z-index: <?php echo htmlSpecialChars(NTemplateHelpers::escapeCss(count($testimonials) - $iterator->getCounter())) ?>
;<?php if ($iterator->getCounter() == 1): ?>display: block<?php endif ?>">
<?php if ($testimonial->thumbnailSrc !== ''): ?>
					<div class="testimonial-author right"><span>by <strong><?php echo NTemplateHelpers::escapeHtml($testimonial->options->testimonialsAuthor, ENT_NOQUOTES) ?></strong></span></div>
					<a href="<?php echo htmlSpecialChars($testimonial->options->testimonialsLink) ?>
" class="logo left"><img src="<?php echo AitImageResizer::resize($testimonial->thumbnailSrc, array('w' => 72)) ?>
" alt="<?php echo htmlSpecialChars($testimonial->title) ?>" /></a>
<?php endif ?>
					<div class="left-cnt clearfix <?php if ($testimonial->thumbnailSrc !== ''): ?>
with-thumb<?php endif ?>">
						<div class="testimonial-text"><?php echo $testimonial->content ?></div>
					</div>
				</li>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
			</ul>
<?php if (count($testimonials) > 1): ?>
			<div class="testimonial-arrows clearfix">
				<div class="arrow arrow-right"></div>
				<div class="arrow arrow-left"></div>
			</div>
<?php endif ?>
		</div>
	</section>
<?php endif ;endif ;
