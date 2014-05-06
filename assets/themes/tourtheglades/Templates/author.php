{extends $layout}

{block content}
<section class="section content-section blog-section author-section">
	<div id="container" class="subpage blog author {isActiveSidebar blog-sidebar}{else}onecolumn{/isActiveSidebar}">
		<div class="wrapper">
			{if $posts}
				<header class="entry-title subpage-header">
				<h1 class="main-title page-title author">
						{__ 'Author Archives:'}
						<span class="vcard">
							<a class="url fn n" href="{$author->postsUrl}" title="{$author->name}" rel="me">{$author->name}</a>
						</span>
					</h1>
				</header>

				<div id="content" class="mainbar entry-content clearfix" role="main">
					{if strlen($author->bio) !== 0}
					<div class="author-archive-meta clearfix">
						<div id="author-avatar" class="left">{!$author->avatar(60)}</div>
						<div id="author-description" class="clearfix">
							<div class="author-name">{_x 'About', 'about author'} {$author->name}</div>
							<div class="bio">{!$author->bio}</div>
						</div>
					</div>
					{/if}

					{include parts/posts-loop.php posts => $posts}
				</div>

				{isActiveSidebar blog-sidebar}
				<div class="page-sidebar blog-sidebar right clearfix">
					{dynamicSidebar blog-sidebar}
				</div>
				{/isActiveSidebar}

				{include parts/content-nav.php location => nav-below}
			{else}
				<div id="content" class="entry-content" role="main">
					<div class="wrapper">
						{include parts/content-none.php}
					</div>
				</div>
			{/if}
		</div>
	</div>
</section>
{/block}