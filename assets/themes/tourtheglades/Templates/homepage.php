{extends $layout}
{var $sectionsOrder = isset($post->options('sections-order')->overrideGlobal) ? $post->options('sections-order')->sectionsOrder : null}

{block content}
	{if trim($post->content) != ""}
	<section class="section content-section">
		<div id="container" class="subpage clearfix {isNotActiveWidgetArea home-sidebar}onecolumn{/isNotActiveWidgetArea}">
			<div class="wrapper">
				<div id="content" class="entry-content mainbar clearfix" role="main">
					<div class="content-wrapper {isActiveWidgetArea page-sidebar} leftContent{else}content{/isActiveWidgetArea}">
						{!$post->content}
					</div>
				</div>
				{isActiveWidgetArea home-sidebar}
				<div class="home-sidebar right clearfix">
					{widgetArea home-sidebar}
				</div>
				{/isActiveWidgetArea}
			</div>
		</div>
	</section>
	{/if}
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