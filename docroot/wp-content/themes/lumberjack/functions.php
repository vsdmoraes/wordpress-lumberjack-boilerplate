<?php

require_once('vendor/autoload.php');

use App\Http\Lumberjack;

// Create the Application Container
$app = require_once('bootstrap/app.php');

// Bootstrap Lumberjack from the Container
$lumberjack = $app->make(Lumberjack::class);
$lumberjack->bootstrap();

// Import our routes file
require_once('routes.php');

// Set global params in the Timber context
add_filter('timber_context', [$lumberjack, 'addToContext']);

function enqueue_style_css()
{
    wp_dequeue_style('style');
    wp_deregister_style('style');

    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/styles/style.css', [], true);
}

add_action('wp_enqueue_scripts', 'enqueue_style_css');

function enqueue_js_scripts()
{
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/scripts/scripts.js', ['jquery'], true, true);
}

add_action('wp_enqueue_scripts', 'enqueue_js_scripts');
