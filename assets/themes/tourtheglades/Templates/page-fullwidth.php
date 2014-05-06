{extends $layout}
{var $sectionsOrder = isset($post->options('sections-order')->overrideGlobal) ? $post->options('sections-order')->sectionsOrder : null}

{block content}
	<div id="container" class="subpage clear onecolumn">
		<div class="wrapper">
			<div id="content" class="mainbar entry-content clearfix">
				<div id="content-wrapper">
					{if $post->thumbnailSrc}
					<div class="entry-thumbnail">
						<img src="{thumbnailResize $post->thumbnailSrc, w => 640, h => 200}" alt="" />
					</div>
					{/if}
					{!$post->content}
					{include comments.php}
				</div>
			</div>
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