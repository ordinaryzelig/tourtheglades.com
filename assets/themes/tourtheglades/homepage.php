<?php
/**
 * AIT WordPress Theme
 *
 * Copyright (c) 2013, Affinity Information Technology, s.r.o. (http://ait-themes.com)
 */

/**
 * Template Name: Homepage Template
 * Description: Template for homepage
 */
$latteParams['post'] = WpLatte::createPostEntity($GLOBALS['wp_query']->post, array('meta' => $GLOBALS['pageOptions']));
$latteParams['post']->classes = implode(' ', get_post_class());
WPLatte::createTemplate(basename(__FILE__, '.php'), $latteParams)->render();