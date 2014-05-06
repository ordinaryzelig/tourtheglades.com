		<div class="entry-thumbnail">
			<div class="entry-header clearfix">
				<h2 class="entry-title"><a href="{$post->permalink}" title="Permalink to {$post->title}" rel="bookmark">{$post->title}</a></h2>
			</div>

		    {if $post->thumbnailSrc}
				<a href="{$post->permalink}" class="block"><img src="{$post->thumbnailSrc}" class="block" alt=""></a>
			{/if}
		</div>

		<div class="entry clearfix">
			<div class="entry-summary">
				{if $site->isSearch}
				<h2 class="entry-title"><a href="{$post->permalink}" title="Permalink to {$post->title}" rel="bookmark">{$post->title}</a></h2>
				<div class="icon"></div>
				<div class="entry-content clearfix">{$post->excerpt}</div>
				{else}
				<div class="entry-content">{!$post->content}</div>
				{/if}
			</div>

			<div class="entry-meta clearfix ">
				<a href="{dayLink $post->date}" class="date meta-info" title="{$post->date|date:$site->dateFormat}" rel="bookmark">{$post->date|date:"F d, Y"}</a>
				<a class="url n ln author meta-info" href="{$post->author->postsUrl}" title="View all posts by {$post->author->name}" rel="author">{$post->author->name}</a>
				{if $post->type == 'post' and $post->tags}
					<span class="tags meta-info">{!$post->tags}</span>
				{/if}
				{if $post->type == 'post' and $post->categories}
					<span class="categories meta-info">{!$post->categories}</span>
				{/if}
				<span class="comments meta-info">{$post->commentsCount}</span>
				<div class="button edit-button edit">{editPostLink $post->id}</div>
			</div>
		</div>

		<div class="rule"></div>

		{include ../comments.php}