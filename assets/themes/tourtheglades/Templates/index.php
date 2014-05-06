{extends $layout}

{block content}
<section class="section content-section blog-section">
	<div id="container" class="subpage clearfix {isActiveSidebar blog-sidebar}{else}onecolumn{/isActiveSidebar}">
		<div class="wrapper">

			{if $posts}
				<div id="content" class="entry-content mainbar clearfix" role="main">
					<div class="content-wrapper clearfix">
						<div class="content-text">{!$post->content}</div>
						{include parts/posts-loop.php, posts => $posts}
					</div>
				</div>

				{isActiveSidebar blog-sidebar}
				<div class="page-sidebar blog-sidebar right clearfix">
					{dynamicSidebar blog-sidebar}
				</div>
				{/isActiveSidebar}

				{include parts/content-nav.php, location => 'nav-below'}
			{else}
				<div id="content" class="entry-content" role="main">
					<div class="content-wrapper">
						{include parts/content-none.php}
					</div>
				</div>
			{/if}
		</div>
	</div>
</section>
{/block}

{ifset $post}
	{var $sectionsOrder = isset($post->options('sections-order')->overrideGlobal) ? $post->options('sections-order')->sectionsOrder : null}

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
{/ifset}