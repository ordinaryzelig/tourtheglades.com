{if isset($options->sliderDisplay) and $options->sliderDisplay}
	<section class="section slider-section carousel-container">
		{if isset($options->sliderAliases) and $options->sliderAliases != 'null'}
			{if isset($options->sliderAlternative)}
			<div class="slider-alternative" style="display: none">
				<img src="{$options->sliderAlternative}" alt="alternative" />
			</div>
			{/if}
			{if function_exists('putRevSlider')}
				{? putRevSlider($options->sliderAliases)}
			{/if}
		{/if}
	</section>
{/if}