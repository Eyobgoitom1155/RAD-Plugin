<?php>
/*
Plugin Name: Demoplug
Plugin URI:
Description: Demoplug
Author: Eyob Goitom
Author URI: 
Version: 1.0
*/


if(!class_exists('plugin')){

    class plugin {
        const PREFIX = 'p';
        private $pluginURL;


        function _construct(){
            $this->pluginURL = plugins_url(basename(dirname(__FILE__)));
            add_action('init' , array($this, 'initThis'));
        }

        function initThis(){
            add_option(self::PREFIX. 'dateTodayFormat', 'd M Y');
            add_shortcode('dateToday', array($this, 'dateFormatter'));
            add_action('admin_init', array($this, 'registerSettings'));
            add_action('admin_menu', array($this, 'addSettingsMenuItem'));

        }

        function addSettingsPageJs($hook) {
            if('settings_page_ '.self::PREFIX. 'settingsPage' !=$hook) return; //If not my page, just return
            wp_enqueue_script(self::PREFIX. 'settingsJs' , $this->pluginURL. '/settings.js');
        }

        function registerSettings(){
            register_setting(self::PREFIX. 'settings' , self::PREFIX. 'dateTodayFormat');
        }

        function addSettingsMenuItem(){
            add_submenu_page(
                'options-general.php',
                'plugin Settings', //page title
                'plugin', //menu title
                'manage_options', //user rights
                self::PREFIX. 'settingsPage', //page slug
                array($this, 'showSettingsPage')


            );
        }

        function showSettingsPage(){
            include 'settings.php';
        }
        




    }
}




?>