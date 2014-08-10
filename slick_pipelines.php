<?php
/**
 * Utilisations de pipelines par Slick
 *
 * @plugin     Slick
 * @copyright  2014
 * @author     Vertige (Didier)
 * @licence    GNU/GPL
 * @package    SPIP\Slick\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

// Ajouter Slick à SPIP
function slick_jquery_plugins($scripts) {
    $scripts[] = 'lib/slick/slick.min.js';
    return $scripts;
}

// Ajouter le css de slick
function slick_insert_head_css($flux) {
    $flux .= '<link rel="stylesheet" href="'.find_in_path('lib/slick/slick.css').'" type="text/css" />';
    return $flux;
}