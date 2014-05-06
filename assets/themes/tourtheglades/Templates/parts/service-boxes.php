{if $options->serviceBoxesDisplay}
	{var $serviceBoxes = $site->create('service-box', $options->serviceBoxesCategory)}
	{if $serviceBoxes}
	<section class="section sboxes-section grid-fullsize">
		<div class="service-boxes-container entry-content wrapper service-boxes-{$options->serviceBoxesColumns}">
		{foreach $serviceBoxes as $serviceBox}
			{if $iterator->getCounter() % $options->serviceBoxesColumns == 1}
				<div class="sbox-row">
			{/if}
			<div class="clearfix sbox sbox{$iterator->counter} {if $iterator->getCounter() % $options->serviceBoxesColumns == 1}first-sbox{elseif $iterator->getCounter() % $options->serviceBoxesColumns == 0}last-sbox{/if}"
			style="width: {ifset $box->options->boxWidth}{$box->options->boxWidth}{!$sboxesWidth}px{/ifset};">
				<div class="sbox-wrap">
					<div class="sbox-content clear clearfix {if $serviceBox->thumbnailSrc}thumb-present{else}thumb-missing{/if}">
						<a href="{$serviceBox->options->boxLink}">
							<h2 class="title"><strong>{$serviceBox->title}</strong> {if $serviceBox->options->boxSubtitle != ""} {$serviceBox->options->boxSubtitle}{/if}</h2>
							{if $serviceBox->thumbnailSrc}
							<span class="title-icon">
								<img src="{$serviceBox->thumbnailSrc}" alt="{$serviceBox->title}" class="ico" />
							</span>
							{/if}
						</a>
						<p>{$serviceBox->options->boxText}</p>
						{if !empty($serviceBox->options->boxMoreText)}
						<a href="{$serviceBox->options->boxLink}" class="more">
							<span>{$serviceBox->options->boxMoreText}</span>
						</a>
						{/if}
					</div>
				</div>
			</div>
			{if $iterator->getCounter() % $options->serviceBoxesColumns == 0 || $iterator->getCounter() == count($serviceBoxes)}
				</div>
			{/if}
		{/foreach}
		</div>
	</section>
	{/if}
{/if}