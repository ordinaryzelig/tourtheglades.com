{getHeader}
<div id="sections">
	{if isset($post)}
		{if !isHomePageTemplate($post->id)}
			{if is_single() || is_attachment()}
				<div class="main-title wrapper">
					<h1 class="entry-title {if $post->thumbnailUrl != ''}image-present{/if}">
						<a class="{if $post->thumbnailUrl != ''}image-present{/if}" href="{$post->permalink}" title="{__ 'Permalink to %s' |printf: $post->title}" rel="bookmark">{$post->title}</a>
					</h1>
					<div class="entry-meta">
						{include parts/post-meta.php}
						{if $post->isSingle and $post->author->bio and $post->isMultiAuthor}
							{include parts/author-bio.php}
						{/if}
					</div>
				</div>
			{else}
				<div class="main-title wrapper"><h1>{$post->title}</h1></div>
			{/if}
		{/if}
	{else}
		{if $site->isSearch}
			{if $site->searchQuery}
				<div class="main-title wrapper"><h1>{__ 'Search Results for:'} <span>{$site->searchQuery}</span></h1></div>
			{/if}
		{/if}
	{/if}


    {define sectionA}
        {include #content}
    {/define}

	{define sectionB}
		{include parts/service-boxes.php, options => $themeOptions->sections}
	{/define}

	{define sectionC}
		{include parts/testimonials.php, options => $themeOptions->sections}
	{/define}

	{define sectionD}
		{include parts/icon-menu.php, options => $themeOptions->sections}
	{/define}

	{define sectionE}
		{include parts/partners.php, options => $themeOptions->sections}
	{/define}

	{if !isset($sectionsOrder)} {var $sectionsOrder = $themeOptions->sections->sectionsOrder} {/if}

	{foreach $sectionsOrder as $section}
		{include #$section}
	{/foreach}
</div>
{getFooter}