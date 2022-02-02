<?php
/*
Plugin Name: Outside FreeFire+
*/

/**
 * Custom Post Type
 */

// Register Matches
require_once(dirname(__FILE__) . "/post_types/matches.php");

// Register Players
require_once(dirname(__FILE__) . "/post_types/players.php");

// Register Teams
require_once(dirname(__FILE__) . "/post_types/teams.php");

// Register Transfers
require_once(dirname(__FILE__) . "/post_types/transfers.php");

// Register Maps
require_once(dirname(__FILE__) . "/post_types/maps.php");

/**
 * Register Services
 */

// Matches Services
require_once(dirname(__FILE__) . "/services/matches.service.php");

// Players Services
require_once(dirname(__FILE__) . "/services/players.service.php");

// Teams Services
require_once(dirname(__FILE__) . "/services/teams.service.php");

// Tranfers Services
require_once(dirname(__FILE__) . "/services/transfers.service.php");

/**
 * Endpoint Register
 */

// Register Matches
require_once(dirname(__FILE__) . "/controllers/matches.php");

// Register Players
require_once(dirname(__FILE__) . "/controllers/players.php");

// Register Transfers
require_once(dirname(__FILE__) . "/controllers/transfers.php");

// Register Teams
require_once(dirname(__FILE__) . "/controllers/teams.php");

/**
 * Templates Pages for Custom Post Types
 */

add_filter('single_template', 'override_template_parts');

function override_template_parts($single)
{
    global $post;

    $file = dirname(__FILE__) . '/template-parts/single-' . $post->post_type . '.php';

    if (file_exists($file)) $single = $file;

    return $single;
}
