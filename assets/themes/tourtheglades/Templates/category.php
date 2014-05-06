{extends $layout}

{block content}
<section class="section content-section blog-section category-section">
	<div id="container" class="subpage blog category {isActiveSidebar blog-sidebar}{else}onecolumn{/isActiveSidebar}">
		<div class="wrapper">
		{if $posts}
			<header class="entry-title subpage-header">
				<h1 class="main-title page-title">
					{__ 'Category Archives: '}<span>{$category->title}</span>
				</h1>
			</header>

			<div id="content" class="entry-content mainbar clearfix" role="main">
				{if strlen($category->description) !== 0}
					<div class="category-archive-meta">{!$category->description}</div>
				{/if}

				{include parts/posts-loop.php posts => $posts}
			</div>

			{isActiveSidebar blog-sidebar}
			<div class="page-sidebar blog-sidebar right clearfix">
				{dynamicSidebar blog-sidebar}
			</div>
			{/isActiveSidebar}

			{include parts/content-nav.php location => 'nav-below'}
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