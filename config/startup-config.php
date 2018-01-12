<?php

namespace wp_gdpr\config;


class Startup_Config {

	public function __construct() {
		$this->execute_on_script_shutdown();
	}


	public function execute_on_plugin_activation() {

	}

	/**
	 * add Logging when shutdown script
	 */
	public function execute_on_script_shutdown() {
		if ( ! has_action( 'shutdown', array( 'wp_gdpr\lib\Appsaloon_Log', 'log_to_database' ) ) ) {

			add_action( 'shutdown', array( 'wp_gdpr\lib\Appsaloon_Log', 'log_to_database' ) );
		}
	}
}
