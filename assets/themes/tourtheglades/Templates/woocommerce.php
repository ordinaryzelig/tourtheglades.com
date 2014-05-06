{extends $layout}

{block content}
<div id="container" class="subpage subpage-line clear clearfix {isNotActiveWidgetArea page-sidebar}onecolumn{/isNotActiveWidgetArea}" {if isset($post) && isset($post->options('content')->overrideGlobal)}style="background-color: {!$post->options('content')->localContentColor}"{/if}>
	<div class="wrapper">
		<div id="content" class="mainbar entry-content clearfix">
			<div class="{isActiveWidgetArea page-sidebar} leftContent{else}content{/isActiveWidgetArea}">
			{? woocommerce_content() }
			</div>
		</div>

		{isActiveWidgetArea page-sidebar}
		<div class="page-sidebar right clearfix">
			{widgetArea page-sidebar}
		</div>
		{/isActiveWidgetArea}
	</div>
</div>
{/block}