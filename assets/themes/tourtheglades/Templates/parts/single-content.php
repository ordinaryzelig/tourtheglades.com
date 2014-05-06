<header class="entry-header clearfix">
	{if !$site->isSearch}
		<div class="left-meta clearfix">
			{if !$post->hasFormat('aside') and !$post->hasFormat('link') and $post->type == post}
				{include entry-date.php}
			{/if}
			<div class="comments-count clearfix">
				<span class="comments-count">{!$post->commentsCount}</span>
			</div>
		</div>
		<div class="tool-buttons">
			<span class="post-links"><a href="{ifset $post}{$post->permalink}{/ifset}" class="share-link" rel="prettySociable">{_x 'share', 'share button'}</a></span>
			{editPostLink $post->id}
		</div>
		{if $post->thumbnailUrl}
			<div class="entry-thumbnail clearfix">
			{if $site->isSingle}
				{if ($site->isActiveWidgetArea('post-sidebar'))}
					<img src="{thumbnailResize $post->thumbnailUrl, w => 723, h => 280}" alt="{$post->title}">
				{else}
					<img src="{thumbnailResize $post->thumbnailUrl, w => 1000, h => 500}" alt="{$post->title}">
				{/if}
			{else}
				{if ($site->isActiveWidgetArea('blog-sidebar'))}
					<img src="{thumbnailResize $post->thumbnailUrl, w => 623, h => 280}" alt="{$post->title}">
				{else}
					<img src="{thumbnailResize $post->thumbnailUrl, w => 900, h => 500}" alt="{$post->title}">
				{/if}
			{/if}
			</div>
		{/if}
	{/if}

	{if !$site->isSearch}
		{if !$site->isSingle}
		<h2 class="entry-title {if $post->thumbnailUrl != ''}image-present{/if}">
			<a class="{if $post->thumbnailUrl != ''}image-present{/if}" href="{$post->permalink}" title="{__ 'Permalink to %s' |printf: $post->title}" rel="bookmark">{$post->title}</a>
		</h2>
		{/if}
	{else}
		<h2 class="entry-title">
			<a class="{if $post->thumbnailUrl != ''}image-present{/if}" href="{$post->permalink}" title="{__ 'Permalink to %s' |printf: $post->title}" rel="bookmark">{$post->title}</a>
		</h2>
	{/if}
</header>

{if $site->isSearch}
<div class="entry-summary">
	{!$post->excerpt}
</div><!-- .entry-summary -->
{else}
<div class="entry-content">
	{capture $more}{__ 'Continue reading %s'|printf: '<span class="meta-nav">&rarr;</span>'}{/capture}
	{!$post->content($more)}
</div><!-- .entry-content -->
{/if}

{if !$site->isSearch}
	{if !$site->isSingle}
	<footer class="entry-meta">
		{include post-meta.php}
		{if $post->isSingle and $post->author->bio and $post->isMultiAuthor}
			{include author-bio.php}
		{/if}
	</footer>
	{/if}
{/if}