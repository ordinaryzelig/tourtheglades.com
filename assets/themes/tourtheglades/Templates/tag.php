{extends $layout}

{block content}
<section class="section content-section blog-section archive-section">
	<div id="container" class="subpage blog archive {isActiveSidebar blog-sidebar}{else}onecolumn{/isActiveSidebar}">
		<div class="wrapper">
			{if $posts}
				<header class="entry-title subpage-header">
					<h1 class="main-title page-title">
						{__ 'Tag Archives:'} <span>{$tag->title}</span>
					</h1>
					{if !empty($tag->description)}
						<div class="category-archive-meta">{!$tag->description}</div>
					{/if}
				</header>

				<div id="content" class="mainbar entry-content clearfix" role="main">
					{include parts/posts-loop.php, posts => $posts}
				</div> <!-- /#content -->

				{isActiveSidebar blog-sidebar}
				<div class="page-sidebar blog-sidebar right clearfix">
					{dynamicSidebar blog-sidebar}
				</div>
				{/isActiveSidebar}

				{include parts/content-nav.php, location => 'nav-below'}
			{else}
				<div id="content" class="entry-content" role="main">
					<div class="wrapper">
						{include parts/nothing-found.php}
					</div>
				</div>
			{/if}
		</div>
	</div>
</section>
{/block}