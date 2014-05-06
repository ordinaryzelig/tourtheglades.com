{extends $layout}

{block content}
<section class="section content-section blog-section">
	<div id="container" class="subpage clearfix {isActiveSidebar blog-sidebar}{else}onecolumn{/isActiveSidebar}">
		<div class="wrapper">
			{if $posts}
				<div id="content" class="entry-content mainbar clearfix" role="main">
					<div class="content-wrapper clearfix">
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