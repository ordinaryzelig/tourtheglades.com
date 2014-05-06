{if isset($options->iconMenuDisplay) and $options->iconMenuDisplay}
	{var $iconMenu = $site->create('icon-menu', $options->iconMenuCategory)}
	{if $iconMenu}
	<section class="section iconmenu-section">
		<div class="iconmenu-container wrapper">
		{var $width = 100}
		{var $margin = 2.0}
		{var $i = count($iconMenu)}
		{var $widthLi = (($width + $margin)-($i*$margin))/$i}
		{var $widthItems = $widthLi - 20}
		<style type="text/css" scoped="scoped">
			ul#sti-menu li { width: {!$widthLi}% }
		</style>

		<ul class="sti-menu clearfix clear {if $i==1}one{/if} {if $i==2}two{/if} {if $i==3}three{/if} {if $i==4}four{/if} {if $i==5}five{/if} {if $i==6}six{/if} {if $i==7}seven{/if} {if $i==8}eight{/if} {if $i==9}nine{/if} {if $i==10}ten{/if}" id="sti-menu">
			{foreach $iconMenu as $icon}
			<li data-hovercolor="{$icon->options->iconMenuLabelHoverColor}" data-color="{!$icon->options->iconMenuLabelColor}" data-bgcolor="{$themeOptions->colors->iconMenuBackgroundColor}" data-bgcolor-hover="{$themeOptions->colors->iconMenuBackgroundHoverColor}">

				<a href="{$icon->options->iconMenuLink}">
					<h3 class="sti-item" data-type="mText" style="color: {!$icon->options->iconMenuLabelColor}">{$icon->title}</h3>
					<p class="sti-item" data-type="sText">{$icon->options->iconMenuLabel}</p>

						<span class="sti-icon sti-item" data-type="icon">
							<span class="icon-round"></span>
							<span class="icon-img" style="background: url('{$icon->thumbnailSrc}') no-repeat center center"></span>
						</span>

				</a>
			</li>
			{/foreach}
		</ul>
		</div>
	</section>
	{/if}
{/if}
