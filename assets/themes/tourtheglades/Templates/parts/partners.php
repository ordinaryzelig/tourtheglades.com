{if isset($options->partnersDisplay) and $options->partnersDisplay}
	{var $partners = $site->create('partners', $options->partnersCategory)}
	{if $partners}
	<section class="section partners-section" style="background-color: {!$options->partnersBackgroundColor}">
		<div class="partners-container wrapper">
			<ul id="partners-list" class="partners clearfix">
				{foreach $partners as $partner}
					<li>
						<a href="{$partner->options->partnersLink}" title="{$partner->title}">
							<span class="thumb"><img src="{$partner->thumbnailSrc}" alt="{$partner->title}" /></span>
						</a>
					</li>
				{/foreach}
			</ul>
		</div>
	</section>
	{/if}
{/if}