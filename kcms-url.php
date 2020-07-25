<?php

/**
 * Plugin Name: KCMS URL
 * Plugin URI: https://github.com/kubeeapp/kcms-url/
 * Description: Fixes issues with home and site URL on multisite when using KCMS
 * Version: 1.0.0
 * Author: Kubeecms
 * Author URI: https://github.com/kubeecms/
 * License: GNU License
 */

class_exists('Kubeecms\Kcms\URLFixer') || require_once __DIR__.'/vendor/autoload.php';

use Kubeecms\Kcms\URLFixer;

if (is_multisite()) {
    (new URLFixer)->addFilters();
}
