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
    include_spip('inc/config');
    $config = lire_config('slick');

    $scripts[] = 'lib/slick/slick/slick.min.js';

    if ($config['charger'])
        $scripts[] = produire_fond_statique('javascript/slick.spip.js');

    return $scripts;
}

// Ajouter le css de slick
function slick_insert_head_css($flux) {
    $flux .= '<link rel="stylesheet" href="'.find_in_path('lib/slick/slick/slick.css').'" type="text/css" />';

    $flux .= '<link rel="stylesheet" href="'.find_in_path('lib/slick/slick/slick-theme.css').'" type="text/css" />';

    return $flux;
}