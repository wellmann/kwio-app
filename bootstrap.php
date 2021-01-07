<?php

/**
 * @wordpress-plugin
 * Plugin Name: KWIO App
 * Plugin URI: https://github.com/wellmann/kwio-app
 * Description: Foundation for advanced WordPress plugin development.
 * Version: 0.1.0
 * Author: Kevin Wellmann
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * GitHub Plugin URI: https://github.com/wellmann/kwio-gapp
 */

namespace KWIO\App;

use Exception;
use CEKW\WpPluginFramework\Core\Loader;
use CEKW\WpPluginFramework\Core\RestRoute\RestRoutePackage;

// Do not access file directly.
if (!defined('ABSPATH')) {
    exit;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    include_once __DIR__ . '/vendor/autoload.php';
} else {
    throw new Exception('You need to run "composer update" in the following directory: ' . __DIR__ . '.');
}

$frameworkLoader = new Loader(__FILE__);
$frameworkLoader
    ->loadModules('src/', __NAMESPACE__)
    ->loadPackage(new RestRoutingPackage())
    ->init();