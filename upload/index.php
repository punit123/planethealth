<?php
// Version
define('VERSION', '3.1.0.0b');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
	require_once('S3.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');