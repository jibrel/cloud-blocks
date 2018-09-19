<?php

namespace GutenbergCloud;

use GutenbergCloud\Blocks;
use GutenbergCloud\Cloud;

/**
 * GutenbergCloud Class.
 *
 * This is main class called to initiate all functionalities this plugin provides.
 *
 */
class GutenbergCloud {

  public function __construct() {
    add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

    new Blocks;
    Cloud\Explore::init();
  }

  /**
  * Enqueue admin scripts.
  * @since    0.1.0
  * @param
  * @return
  */
  public function enqueue_scripts() {
    wp_enqueue_script( 'vuejs', 'https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js', array( 'jquery' ), FGC_VERSION, true );
    wp_enqueue_script( 'gutenberg_cloud_admin_js', FGC_URL . 'assets/js/script.js', array( 'jquery' ), FGC_VERSION, true );
    $localized_data = array(
			'ajaxUrl' 				=> admin_url( 'admin-ajax.php' )
		);
    wp_localize_script( 'wp_redisearch_admin_js', 'fgcData', $localized_data );
    wp_enqueue_style( 'wp_redisearch_admin_styles', FGC_URL . 'assets/css/style.css', false, 20180914 );
  }

}