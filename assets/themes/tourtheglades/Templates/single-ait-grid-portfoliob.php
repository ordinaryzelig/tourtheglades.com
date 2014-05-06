{extends $layout}

{block content}
<section class="section content-section blog-section">
	<div id="container" class="subpage clearfix {isActiveSidebar post-sidebar}{else}onecolumn{/isActiveSidebar}">
		<div class="wrapper">
			<div id="content" class="entry-content mainbar clearfix" role="main">
				<div class="content-wrapper clearfix">
					{include parts/content-nav.php, location => 'nav-above'}
					<article id="post-{$post->id}" n:class="$post->htmlClasses, !$post->thumbnailSrc ? no-thumbnail, clearfix">
					{includePart parts/single-portfoliob}
					</article>
					{include parts/content-nav.php, location => 'nav-below'}
				</div>
			</div>

			{isActiveSidebar post-sidebar}
			<div class="page-sidebar post-sidebar right clearfix">
				{dynamicSidebar post-sidebar}
			</div>
			{/isActiveSidebar}

			{if $post->isSingle}
				{includePart comments}
			{/if}
		</div>
	</div>
</section>
{/block}