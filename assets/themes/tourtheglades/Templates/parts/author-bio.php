<div class="author-info">
	<div class="author-avatar">
		{!$post->author->avatar(74)}
	</div>
	<div class="author-description">
		<h2>{__ 'About %s'|printf: $post->author->name}</h2>
		<p>
			{!$post->author->bio}
			<a href="{$post->author->postsUrl}" rel="author" class="author-link">
				{!__ 'View all posts by %s <span class="meta-nav">&rarr;</span>'|printf: $post->author->name}
			</a>
		</p>
	</div>
</div>