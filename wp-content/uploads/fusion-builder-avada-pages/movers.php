<?php

		// Exit if accessed directly
		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		}

		function fusion_builder_add_movers_demo( $demos ) {

		$demos['movers'] = array (
  'category' => 'Avada Movers',
  'pages' => 
  array (
  ),
);

			return $demos;
		}
		add_filter( 'fusion_builder_get_demo_pages', 'fusion_builder_add_movers_demo' );