<?php //netteCache[01]000483a:2:{s:4:"time";s:21:"0.71359700 1372952795";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:94:"/home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/footer.php";i:2;i:1372952261;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home2/saturdb8/public_html/tourtheglades/wp-content/themes/tourtheglades/Templates/footer.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '9j4qhyinu6')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
			<footer class="page-footer clearfix">
				<div class="footer-wrapper clearfix">
					<div class="wrapper">
<?php if(is_active_sidebar("footer-sidebar")): ?>
						<aside class="footer-sidebar clearfix">
<?php dynamic_sidebar('footer-sidebar') ?>
						</aside>
<?php endif ?>
					</div>
				</div>
				<aside class="footer-line">
					<div class="wrapper">
						<div class="footer-text left"><?php echo $themeOptions->general->footerText ?></div>
						<div class="footer-menu right clearfix">
<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => 'nav', 'container_class' => 'footer-menu', 'menu_class' => 'menu clear', 'depth' => 1)) ?>
						</div>
					</div>
				</aside>
			</footer>

<?php wp_footer() ?>
		<?php if(!empty($themeOptions->general->gaCode)): ?>
	<script>
		var _gaq=[["_setAccount","<?php echo $themeOptions->general->gaCode ?>"],["_trackPageview"]];
		(function(d,t){ var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src="//www.google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s) }(document,"script"));
	</script>
	<?php endif ?>
		</div>
	</body>
</html>