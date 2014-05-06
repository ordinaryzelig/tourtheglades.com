<?php //netteCache[01]000487a:2:{s:4:"time";s:21:"0.33577300 1379191783";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:98:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/attachment.php";i:2;i:1372952261;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/attachment.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'uw7qohf1d0')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6a43b71622_content')) { function _lb6a43b71622_content($_l, $_args) { extract($_args)
?>
<section class="section content-section image-section">
	<div id="container" class="subpage image <?php if(is_active_sidebar("subpages-sidebar")): else: ?>
onecolumn<?php endif ?>">
		<div id="content" class="entry-content clearfix" role="main">
			<div class="wrapper">
<?php NCoreMacros::includeTemplate("parts/image-nav.php", $template->getParams(), $_l->templates['uw7qohf1d0'])->render() ?>

				<div class="entry-content">
					<div class="entry-attachment">
						<div class="attachment">
<?php $attachments = array_values( get_children( array( 'post_parent' => $post->parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) ) ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($attachments) as $k => $attachment): if ($attachment->ID == $post->id) break ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ;$k++ ;if (count($attachments) > 1): if (isset($attachments[$k])): $next_attachment_url = get_attachment_link($attachments[$k]->ID) ;else: $next_attachment_url = get_attachment_link($attachments[0]->ID) ;endif ;else: $next_attachment_url = wp_get_attachment_url() ;endif ?>

							<a href="<?php echo htmlSpecialChars($next_attachment_url) ?>" title="<?php the_title_attribute() ?>" rel="attachment">
							<?php echo wp_get_attachment_image($post->id, 'full') ?>

							</a>

<?php if (!empty($post->excerpt)): ?>
							<div class="entry-caption">
<?php the_excerpt() ?>
							</div>
<?php endif ?>
						</div>

					</div>

					<div class="entry-description">
						<?php echo $post->content ?>

					</div>

				</div>

<?php NCoreMacros::includeTemplate("comments.php", $template->getParams(), $_l->templates['uw7qohf1d0'])->render() ?>

			</div>
		</div>
	</div>
</section>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = true; unset($_extends, $template->_extends);


if ($_l->extends) {
	ob_start();
} elseif (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
$_l->extends = $layout ?>

<?php 
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
