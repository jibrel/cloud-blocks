<?php

namespace CloudBlocks;

use CloudBlocks\Blocks\Blocks;
use CloudBlocks\Blocks\Explore;
use CloudBlocks\Blocks\Options;
use CloudBlocks\Settings\Tools;
use CloudBlocks\Settings\Translations;

/**
 * CloudBlocks Class.
 *
 * This is main class called to initiate all functionalities this plugin provides.
 *
 */
class CloudBlocks {

  public function __construct() {
    global $pagenow;
    if ( ( $pagenow == 'admin.php' ) && ( $_GET['page'] == FGC_NAME || $_GET['page'] == 'gutenberg-cloud-tools' ) ) {
      add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
    }
    // Initiate Blocks class. Responsible for install, update, delete and ... of blocks
    new Blocks;
    // Initiate Explorer class. The main plugin page, the page which lists blocks.
    Explore::init();
    // Initiate Plugin options page.
    Tools::init();
  }

  /**
  * Enqueue admin scripts.
  * @since 1.0.0
  * @param
  * @return
  */
  public function enqueue_scripts() {
    wp_enqueue_script( 'vuejs', 'https://unpkg.com/vue@2.5.17/dist/vue.min.js', array( 'jquery' ), FGC_VERSION, true );
    wp_enqueue_script( 'vuex', 'https://unpkg.com/vuex@3.0.1/dist/vuex.min.js', array('vuejs'), FGC_VERSION, TRUE );
    wp_enqueue_script( 'gutenberg_cloud_admin_js', FGC_URL . 'assets/js/script.js', array( 'jquery', 'vuejs', 'vuex' ), FGC_VERSION, true );
    $localized_data = array(
      'ajaxUrl' 				=> admin_url( 'admin-ajax.php' ),
      'installedBlocks' => Options::get_all(),
      'strings'         => Translations::strings()
		);
    wp_localize_script( 'gutenberg_cloud_admin_js', 'fgcData', $localized_data );
    wp_enqueue_style( 'gutenberg_cloud_admin_styles', FGC_URL . 'assets/css/style.css', false, FGC_VERSION );
  }

}