
<section class="blog clearfix">
{foreach $posts as $post}
	<article id="post-{$post->id}" n:class="$post->htmlClasses, !$post->thumbnailSrc ? no-thumbnail, clearfix">
		{includePart parts/single-content}
	</article>

	{if $post->isSingle}
		{includePart comments}
	{/if}
{/foreach}
</section>
