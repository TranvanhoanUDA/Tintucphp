<?php

use inbefore\plugins\InstantAnswer\Provider;

define('IA_PLUGIN_PATH', sp_plugin_path(__FILE__));

sp_register_psr4('inbefore\\plugins\\InstantAnswer\\', trailingslashit(IA_PLUGIN_PATH) . 'lib/');

register_templates('ia', trailingslashit(IA_PLUGIN_PATH) . 'views');

$iaProvider = new Provider;

add_action('search_results_before', [$iaProvider, 'suggest'], 8);
