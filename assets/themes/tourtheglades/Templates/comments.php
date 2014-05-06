{if $post->comments}
<div id="comments">
{/if}
{if !$post->isPasswordRequired}

{if $post->comments}
		<div class="comments-count clearfix">
			<span class="comments-count">{!$post->commentsCount}</span>
		</div>
		<h2 id="comments-title">
			 on "{$post->title}"
		</h2>

		{include parts/comments-pagination.php, location => 'above'}

	{listComments comments => $post->comments}
			{if $comment->type == 'pingback' or $comment->type == 'trackback'}
			<li class="post pingback">
				<p>
			Pingback
				{!$comment->author->link}
				{editCommentLink $comment->id}
				</p>
			{else}

			{* this is start tag, but end tag is missing in this template, it is included in {/listComments} macro. Weird. I know. *}
			<li class="{$comment->classes}">

				<article id="comment-{$comment->id}" class="comment">
					<span class="comment-avatar">
						{!$comment->author->avatar}
					</span>

					<div class="comment-text">
						<span class="comment-links">
							<span class="reply">
								{capture $replyTitle} {!__ 'Reply <span>&darr;</span>'} {/capture}
								{commentReplyLink $replyTitle, $comment->args, $comment->depth, $comment->id}
							</span><!-- .reply -->
							{editCommentLink $comment->id}
						</span>

						{if !$comment->approved}
						<em class="comment-awaiting-moderation">{__ 'Your comment is awaiting moderation.'}</em><br>
						{/if}

						<div class="comment-content">
							<span class="theRow clearfix">
								<cite class="fn">{!$comment->author->nameWithLink}</cite>
								<a href="{$comment->url}" class="comment-date"><!--
									--><time class="pubdate" datetime="{$comment->date|date:'c'}"><!--
										-->{$comment->date|date:$site->dateFormat} {_x 'at', 'comment publish time'} {$comment->date|date:$site->timeFormat}<!--
									--></time><!--
								--></a>
							</span>
							{!$comment->content}

						</div>
					</div>
				</article><!-- #comment-## -->
			{/if}
		{/listComments}

		{include parts/comments-pagination.php, location => 'below'}

{elseif !$post->hasOpenComments and $post->type != 'page' and $post->hasSupportFor('comments')}

	<p class="nocomments">{__ 'Comments are closed.'}</p>

{/if}

{capture $reviewPost}{__ 'Send'}{/capture}
{commentForm label_submit => $reviewPost}

{else}
	<p class="nopassword">{__ 'This post is password protected. Enter the password to view any comments.'}</p>
{/if}
{if $post->comments}
</div><!-- #comments -->
{/if}
