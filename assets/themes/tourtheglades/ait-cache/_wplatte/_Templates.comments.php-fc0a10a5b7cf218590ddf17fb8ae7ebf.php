<?php //netteCache[01]000485a:2:{s:4:"time";s:21:"0.25563600 1372952911";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:96:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/comments.php";i:2;i:1372952261;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/comments.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'vrcvzm0a1o')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if ($post->comments): ?>
<div id="comments">
<?php endif ;if (!$post->isPasswordRequired): ?>

<?php if ($post->comments): ?>
		<div class="comments-count clearfix">
			<span class="comments-count"><?php echo $post->commentsCount ?></span>
		</div>
		<h2 id="comments-title">
			 on "<?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?>"
		</h2>

<?php NCoreMacros::includeTemplate("parts/comments-pagination.php", array('location' => 'above') + $template->getParams(), $_l->templates['vrcvzm0a1o'])->render() ?>

<?php 
			$a = array('comments' => $post->comments);
			$depth = 1;
			if(isset($a["begin"]))
				echo $a["begin"];
			else
				echo "<ol class=\"commentlist\">";

			if(isset($a["childrenClass"]))
				$children = " class=\"$a[childrenClass]\"";
			else
				$children = " class=\"children\"";

			$iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($a["comments"]) as $comment):
				if ($comment->depth > $depth){
					echo "<ul{$children}>";
					$depth = $comment->depth;
				}elseif($comment->depth == $depth and !$iterator->isFirst()){
					echo "</li>";
				}elseif($comment->depth < $depth){
					echo "</li>";
					echo str_repeat("</ul></li>", $depth - $comment->depth);
					$depth = $comment->depth;
				}
			 if ($comment->type == 'pingback' or $comment->type == 'trackback'): ?>
			<li class="post pingback">
				<p>
			Pingback
				<?php echo $comment->author->link ?>

<?php WpLatteFunctions::editCommentLink(__("Edit", "ait"), $comment->id, "<span class=\"edit-link\">", "</span>") ?>
				</p>
<?php else: ?>

						<li class="<?php echo htmlSpecialChars($comment->classes) ?>">

				<article id="comment-<?php echo htmlSpecialChars($comment->id) ?>" class="comment">
					<span class="comment-avatar">
						<?php echo $comment->author->avatar ?>

					</span>

					<div class="comment-text">
						<span class="comment-links">
							<span class="reply">
								<?php ob_start() ?> <?php echo __('Reply <span>&darr;</span>', 'ait') ?>
 <?php $replyTitle = ob_get_clean() ?>

<?php 
				$a = array($replyTitle, $comment->args, $comment->depth, $comment->id);
				comment_reply_link(array_merge(
					$a[1],
					array(
						"reply_text" => $a[0],
						"depth" => $a[2],
						"max_depth" => $a[1]["max_depth"]
					)
				), $a[3]); unset($a) ?>
							</span><!-- .reply -->
<?php WpLatteFunctions::editCommentLink(__("Edit", "ait"), $comment->id, "<span class=\"edit-link\">", "</span>") ?>
						</span>

<?php if (!$comment->approved): ?>
						<em class="comment-awaiting-moderation"><?php echo NTemplateHelpers::escapeHtml(__('Your comment is awaiting moderation.', 'ait'), ENT_NOQUOTES) ?></em><br />
<?php endif ?>

						<div class="comment-content">
							<span class="theRow clearfix">
								<cite class="fn"><?php echo $comment->author->nameWithLink ?></cite>
								<a href="<?php echo htmlSpecialChars($comment->url) ?>" class="comment-date"><!--
									--><time class="pubdate" datetime="<?php echo htmlSpecialChars($template->date($comment->date, 'c')) ?>"><!--
										--><?php echo NTemplateHelpers::escapeHtml($template->date($comment->date, $site->dateFormat), ENT_NOQUOTES) ?>
 <?php echo NTemplateHelpers::escapeHtml(_x('at', 'comment publish time', 'ait'), ENT_NOQUOTES) ?>
 <?php echo NTemplateHelpers::escapeHtml($template->date($comment->date, $site->timeFormat), ENT_NOQUOTES) ?><!--
									--></time><!--
								--></a>
							</span>
							<?php echo $comment->content ?>


						</div>
					</div>
				</article><!-- #comment-## -->
<?php endif ;
			$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its);
			echo "</li>";
			echo str_repeat("</ul></li>", $depth - 1);
			if(isset($a["end"]))
				echo $a["end"];
			else
				echo "</ol>" ?>

<?php NCoreMacros::includeTemplate("parts/comments-pagination.php", array('location' => 'below') + $template->getParams(), $_l->templates['vrcvzm0a1o'])->render() ?>

<?php elseif (!$post->hasOpenComments and $post->type != 'page' and $post->hasSupportFor('comments')): ?>

	<p class="nocomments"><?php echo NTemplateHelpers::escapeHtml(__('Comments are closed.', 'ait'), ENT_NOQUOTES) ?></p>

<?php endif ?>

<?php ob_start() ;echo NTemplateHelpers::escapeHtml(__('Send', 'ait'), ENT_NOQUOTES) ;$reviewPost = ob_get_clean() ?>

<?php comment_form(array('label_submit' => $reviewPost)) ?>

<?php else: ?>
	<p class="nopassword"><?php echo NTemplateHelpers::escapeHtml(__('This post is password protected. Enter the password to view any comments.', 'ait'), ENT_NOQUOTES) ?></p>
<?php endif ;if ($post->comments): ?>
</div><!-- #comments -->
<?php endif ;
