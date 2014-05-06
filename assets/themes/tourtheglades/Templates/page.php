{extends $layout}
{var $sectionsOrder = isset($post->options('sections-order')->overrideGlobal) ? $post->options('sections-order')->sectionsOrder : null}

{block content}
	<div id="container" class="subpage subpage-line clear clearfix {isNotActiveWidgetArea page-sidebar}onecolumn{/isNotActiveWidgetArea}">
		<div class="wrapper">
			<div id="content" class="mainbar entry-content clearfix">
				<div class="{isActiveWidgetArea page-sidebar} leftContent{else}content{/isActiveWidgetArea}">
					{!$post->content}
				</div>
				{include comments.php}
			</div>

		{isActiveWidgetArea page-sidebar}
		<div class="page-sidebar right clearfix">
			{widgetArea page-sidebar}
		</div>
		{/isActiveWidgetArea}
	</div>
</div>
{/block}

{? isset($post->options('service-boxes')->overrideGlobal) ? $sectionB = 'sectionB' : $sectionB = 'xb'}
{define $sectionB}
	{include parts/service-boxes.php, options => $post->options('service-boxes')}
{/define}

{? isset($post->options('testimonials')->overrideGlobal) ? $sectionC = 'sectionC' : $sectionC = 'xc'}
{define $sectionC}
	{include parts/testimonials.php, options => $post->options('testimonials')}
{/define}

{? isset($post->options('icon-menu')->overrideGlobal) ? $sectionD = 'sectionD' : $sectionD = 'xd'}
{define $sectionD}
	{include parts/icon-menu.php, options => $post->options('icon-menu')}
{/define}

{? isset($post->options('partners')->overrideGlobal) ? $sectionE = 'sectionE' : $sectionE = 'xe'}
{define $sectionE}
	{include parts/partners.php, options => $post->options('partners')}
{/define}