{extends $layout}

{block content}
<section class="section content-section image-section">
	<div id="container" class="subpage image {isActiveSidebar subpages-sidebar}{else}onecolumn{/isActiveSidebar}">
		<div id="content" class="entry-content clearfix" role="main">
			<div class="wrapper">
				{include parts/image-nav.php}

				<div class="entry-content">
					<div class="entry-attachment">
						<div class="attachment">
						{var $attachments = array_values( get_children( array( 'post_parent' => $post->parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) )}

						{foreach $attachments as $k => $attachment}
							{breakIf $attachment->ID == $post->id}
						{/foreach}
						{? $k++}
						{if count($attachments) > 1}
							{ifset $attachments[$k]}
								{var $next_attachment_url = get_attachment_link($attachments[$k]->ID)}
							{else}
								{var $next_attachment_url = get_attachment_link($attachments[0]->ID)}
							{/ifset}
						{else}
							{var $next_attachment_url = wp_get_attachment_url()}
						{/if}

							<a href="{$next_attachment_url}" title="{? the_title_attribute()}" rel="attachment">
							{!=wp_get_attachment_image($post->id, 'full')}
							</a>

							{if !empty($post->excerpt)}
							<div class="entry-caption">
								{? the_excerpt()}
							</div>
							{/if}
						</div>

					</div>

					<div class="entry-description">
						{!$post->content}
					</div>

				</div>

				{include comments.php}

			</div>
		</div>
	</div>
</section>
{/block}
