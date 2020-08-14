<?php
/**
 * Template for displaying default template Google-maps element.
 *
 * This template can be overridden by copying it to yourtheme/builderpress/google-maps/google-maps.php.
 *
 * @author      ThimPress
 * @package     BuilderPress/Templates
 * @version     1.0.0
 * @author      Thimpress, vinhnq
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit;

// global params
$template_path = $params['template_path'];

$layout      = isset( $params['layout'] ) ? $params['layout'] : 'layout-1';
$style_layout = !empty($params['style_layout']) ? $params['style_layout'] : '';
$el_class    = $params['el_class'];
$el_id       = $params['el_id'];
$bp_css      = $params['bp_css'];
$bp_css_tablet = $params['bp_css_tablet'];
$bp_css_mobile = $params['bp_css_mobile'];
$data_tablet = $bp_css_tablet ? 'data-class-tablet="' . bp_custom_css_class_shortcode($bp_css_tablet) . '"' : '';
$data_mobile = $bp_css_mobile ? 'data-class-mobile="' . bp_custom_css_class_shortcode($bp_css_mobile) . '"' : '';

$mrkr_src = wp_get_attachment_image_src( $params['marker_icon'] );
?>

<div class="bp-element bp-element-google-maps <?php echo esc_attr( $el_class ); ?> <?php echo esc_attr( $layout ); ?> <?php echo esc_attr($style_layout); ?>  <?php echo is_plugin_active('js_composer/js_composer.php') ? vc_shortcode_custom_css_class( $bp_css ) : '';?>" <?php echo $el_id ? " id='" . esc_attr( $el_id ) . "'" : '' ?> <?php echo $data_tablet;?> <?php echo $data_mobile;?>>
    <?php builder_press_get_template( $layout,
        array(
            'params'      => $params,
            'map_id'   => md5( $params['map_center'] ),
            'map_data' => array(
                'address'          => $params['map_center'],
                'marker-icon'      => ! empty( $mrkr_src ) ? $mrkr_src[0] : '',
                'api-key'           => $params['api_key'],
                'marker-at-center'  => true,
                'marker-positions' => isset( $params['list_address'] ) ? json_encode( $params['list_address'] ) : '',
            )
        ),
        $template_path );
    ?>
</div>