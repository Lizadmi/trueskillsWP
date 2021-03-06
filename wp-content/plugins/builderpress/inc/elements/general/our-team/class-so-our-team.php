<?php
/**
 * BuilderPress Siteorigin Our Team widget
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

if ( ! class_exists( 'BuilderPress_SO_Our_Team' ) ) {
    /**
     * Class BuilderPress_SO_Our_Team
     */
    class BuilderPress_SO_Our_Team extends BuilderPress_SO_Widget {

        /**
         * BuilderPress_SO_Our_Team constructor.
         */
        public function __construct() {
            // set config class
            $this->config_class = 'BuilderPress_Config_Our_Team';

            parent::__construct();
        }
    }
}

add_action( 'widgets_init', 'builder_press_so_register_widget_our_team' );

if ( ! function_exists( 'builder_press_so_register_widget_our_team' ) ) {
	/**
	 * Register widget
	 */
	function builder_press_so_register_widget_our_team() {
		register_widget( 'BuilderPress_SO_Our_Team' );
	}
}
