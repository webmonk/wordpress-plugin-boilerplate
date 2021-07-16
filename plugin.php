<?php
/*
Plugin Name: Plugin Name
Plugin URI: http://codemypain.com
Description: Short plugin description
Version: 3.2
Author: Isaac Oyelowo
Author URI: http://isaacoyelowo.dev
*/

class Plugin_Class {

    public $pluginShortName;

    public function __construct () {

        $this->pluginShortName = 'plugin';
        $this->addActions();
        $this->addFilters();
        register_activation_hook( __FILE__, array( $this, 'onActivate' ) );
    }

    public function addActions() {

        if ( is_admin() ) {

            // Add only admin specific actions here
        }

    }

    public function addFilters() {

        if ( is_admin() ) {

            // Add only admin specific filters here
        }

    }

    public function onActivate() {

        // Run this on plugin activation
    }

    public function localize() {

        // Localization
        load_plugin_textdomain(  $this->pluginShortName , false, dirname(plugin_basename(__FILE__)). "/languages" );
    }

}
$class = new Plugin_Class();
