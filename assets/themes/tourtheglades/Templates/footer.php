			<footer class="page-footer clearfix">
				<div class="footer-wrapper clearfix">
					<div class="wrapper">
						{isActiveWidgetArea footer-sidebar}
						<aside class="footer-sidebar clearfix">
								{widgetArea footer-sidebar}
						</aside>
						{/isActiveWidgetArea}
					</div>
				</div>
				<aside class="footer-line">
					<div class="wrapper">
						<div class="footer-text left">{!$themeOptions->general->footerText}</div>
						<div class="footer-menu right clearfix">
							{menu theme_location => footer-menu, container => nav, container_class => footer-menu, menu_class => 'menu clear', depth => 1}
						</div>
					</div>
				</aside>
			</footer>

			{footer}
			{googleAnalyticsCode $themeOptions->general->gaCode}
		</div>
	</body>
</html>