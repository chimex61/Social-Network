<?php
require(dirname(__FILE__) . '/includes/bootstrap.php');

buckys_enqueue_stylesheet('static.css');

$TNB_GLOBALS['content'] = "faq";

$TNB_GLOBALS['title'] = "FAQ - " . TNB_SITE_NAME;

require(DIR_FS_TEMPLATE . $TNB_GLOBALS['template'] . "/" . $TNB_GLOBALS['layout'] . ".php");
