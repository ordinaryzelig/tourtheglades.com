{if isset($options->testimonialsDisplay) && $options->testimonialsDisplay}
	{var $testimonials = $site->create('testimonial', $options->testimonialsCategory)}
	{if $testimonials}
	<section class="section testimonials-section">
		<div class="testimonials-container wrapper">
			<ul class="testimonials clearfix">
				{foreach $testimonials as $testimonial}
				<li id="testimonial-{$iterator->getCounter()}" class="testimonial {if $iterator->getCounter() == 1}active{/if} clearfix" style="z-index: {count($testimonials) - $iterator->getCounter()};{if $iterator->getCounter() == 1}display: block{/if}">
					{if $testimonial->thumbnailSrc !== ''}
					<div class="testimonial-author right"><span>by <strong>{$testimonial->options->testimonialsAuthor}</strong></span></div>
					<a href="{$testimonial->options->testimonialsLink}" class="logo left"><img src="{thumbnailResize $testimonial->thumbnailSrc, w => 72}" alt="{$testimonial->title}" /></a>
					{/if}
					<div class="left-cnt clearfix {if $testimonial->thumbnailSrc !== ''}with-thumb{/if}">
						<div class="testimonial-text">{!$testimonial->content}</div>
					</div>
				</li>
				{/foreach}
			</ul>
			{if count($testimonials) > 1}
			<div class="testimonial-arrows clearfix">
				<div class="arrow arrow-right"></div>
				<div class="arrow arrow-left"></div>
			</div>
			{/if}
		</div>
	</section>
	{/if}
{/if}