{if $post->isSticky and !$site->isPaged and $site->isHome}
<span class="featured-post">{__ 'Featured post'}</span>
{/if}
<span><strong>{__ 'Posted:'} </strong><a class="url fn n ln" href="{$post->author->postsUrl}" title="{__ 'View all posts by'} {$post->author->name}" rel="author"> {$post->author->name}</a></span>
	<span>
	{*if $post->type == 'post'*}
		{if $post->categories}
			<strong>{__ 'Categories:'}</strong> {!$post->categories}
		{/if}
	{*/if*}
	</span>

{if $post->tags(', ')}
<span class="tags-links"><strong>{__ 'Tags: '}</strong>{!$post->tags(', ')}</span>
{/if}
