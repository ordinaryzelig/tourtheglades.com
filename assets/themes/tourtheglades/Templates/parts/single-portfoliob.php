<header class="entry-header clearfix">
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
		<div class="entry-thumbnail">
		{isActiveSidebar post-sidebar}{var $width = 768}{else}{var $width = 1000}{/isActiveSidebar}
		{if $gridGalleryOptions['itemType'] == 'image' || $gridGalleryOptions['itemType'] == 'website'}
			<img src="{thumbnailResize $post->thumbnailSrc, w => $width, h => 500}" alt="{$post->title}">
		{elseif $gridGalleryOptions['itemType'] == 'video'}
			{if $gridGalleryOptions['videoProvider'] == 'youtube'}
				<iframe id="ytplayer" type="text/html" width="{$width}" height="500" src="http://www.youtube.com/embed/{$gridGalleryOptions['videoID']}?autoplay={$gridGalleryOptions['videoAutoplay']}" frameborder="0"/>
			{else}
				<iframe src="http://player.vimeo.com/video/{$gridGalleryOptions['videoID']}?autoplay={$gridGalleryOptions['videoAutoplay']}" width="{$width}" height="500" frameborder="0"></iframe>
			{/if}
		{/if}
		</div>
	{/if}

	{if !$site->isSingle}
	<h2 class="entry-title {if $post->thumbnailUrl != ''}image-present{/if}">
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

{if !$site->isSingle}
<footer class="entry-meta">
	{include post-meta.php}
	{if $post->isSingle and $post->author->bio and $post->isMultiAuthor}
		{include author-bio.php}
	{/if}
</footer>
{/if}