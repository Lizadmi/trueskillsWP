<?php
/**
 * BuilderPress Siteorigin Twitter widget
 *
 * @version     1.0.0
 * @author      ThimPress
 * @package     BuilderPress/Classes
 * @category    Classes
 * @author      Thimpress, leehld
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'BuilderPress_SO_Twitter' ) ) {
	/**
	 * Class BuilderPress_SO_Twitter
	 */
	class BuilderPress_SO_Twitter extends BuilderPress_SO_Widget {

		/**
		 * BuilderPress_SO_Twitter constructor.
		 */
		public function __construct() {
			// set config class
			$this->config_class = 'BuilderPress_Config_Twitter';

			parent::__construct();
		}
	}
}

add_action( 'widgets_init', 'builder_press_so_register_widget_twitter' );

if ( ! function_exists( 'builder_press_so_register_widget_twitter' ) ) {
	/**
	 * Register widget
	 */
	function builder_press_so_register_widget_twitter() {
		register_widget( 'BuilderPress_SO_Twitter' );
	}
}
