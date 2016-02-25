<?php

if ( ! class_exists( 'ms_Main' ) ) {

	/**
	 * Main / front controller class
	 */
	class ms_Main extends ms_Module {

		protected $modules;
		const VERSION    = '1.1.4';
		const PREFIX     = 'ms-';
        const REQUIRED_CAPABILITY = 'administrator';

        /**
         * Plugin directory path value. set in constructor
         * @access public
         * @var string
         */
        public static $plugin_dir;
        /**
         * Plugin url. set in constructor
         * @access public
         * @var string
         */
        public static $plugin_url;

        /**
         * Plugin name. set in constructor
         * @access public
         * @var string
         */
        public static $plugin_name;

        /**
         * The Plugin settings
         *
         * @static
         * @var string
         */
        static $settings;

		/**
		 * Constructor
		 */
		protected function __construct() {

            self::$plugin_dir = plugin_dir_path(__FILE__);
            self::$plugin_url = plugins_url('', __FILE__);
            self::$plugin_name = plugin_basename(__FILE__);
            ms_Settings::get_options();

            if(ms_Main::$settings['ms_initial_dt'] == ''){
                $options = ms_Main::$settings;
                $options['ms_initial_dt'] = time();
                ms_Settings::update_options($options);
            }

			$this->register_hook_callbacks();
			$this->modules = array(
				'ms_Show'     => ms_Show::get_instance(),
			);
		}

		public function register_hook_callbacks() {

			add_action( 'wp_enqueue_scripts',    __CLASS__ . '::load_resources' );
			add_action( 'admin_enqueue_scripts', __CLASS__ . '::load_resources' );
            add_action( 'admin_init',             array($this, 'admin_init'));

            // If the plugin isn't activated by Aweber or can be upgrade, show message
            add_action('admin_notices',  __CLASS__ . '::show_admin_notice');

		}

        public function show_admin_notice() {

                    $variables = array();
                    $msg_warning_1[]='test';
                    $variables['msg_warning'] = $msg_warning_1;
                    echo self::render_template( 'global-settings/page-notice.php', $variables );
                    unset($variables);
        }

        public function admin_init() {
			
			add_action('wp_ajax_ms_set_lang', array( 'ms_Main', 'ajax_set_lang'));
			
			add_action('wp_ajax_ms_set_gmt', array( 'ms_Main', 'ajax_set_gmt'));
			
            add_action('wp_ajax_ms_set_support_link', array( 'ms_Main', 'ajax_set_support_link'));
            add_action('wp_ajax_ms_set_support_time', array( 'ms_Main', 'ajax_set_support_time'));
        }

        /**
         * Register CSS, JavaScript, etc
         */
        public static function load_resources() {

            wp_register_script(
                self::PREFIX . 'admin-js',
                plugins_url( '/js/admin.js', dirname( __FILE__ ) ),
                array( 'jquery' ),
                self::VERSION,
                true
            );
			wp_register_script(
                self::PREFIX . 'iframe-js',
                plugins_url( '/js/iframeResizer.min.js', dirname( __FILE__ ) ),
                array( 'jquery' ),
                self::VERSION,
                true
            );


            ///
            wp_register_style(
                self::PREFIX . 'admin-css',
                plugins_url( 'css/admin.css', dirname( __FILE__ ) ),
                array(),
                self::VERSION,
                'all'
            );
            wp_register_style(
                self::PREFIX . 'user-css',
                plugins_url( 'css/user.css', dirname( __FILE__ ) ),
                array(),
                self::VERSION,
                'all'
            );


            wp_localize_script(self::PREFIX . 'admin-js', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )) );
            wp_enqueue_script( self::PREFIX . 'admin-js' );
			wp_enqueue_script( self::PREFIX . 'iframe-js' );
            wp_enqueue_style(self::PREFIX . 'user-css');

        }

        /**
         * Creates the markup for the Settings header
         */
        public static function markup_settings_header() {

            if ( current_user_can( self::REQUIRED_CAPABILITY ) ) {
                $variables = array();
                $variables['setting_logo_path'] = dirname(ms_Main::$plugin_url) . '/images/icon-256x256.jpg';
                echo self::render_template( 'global-settings/page-header.php' ,$variables);
            }
            else {
                wp_die( 'Access denied.' );
            }
        }

        static public function ajax_set_support_link(){
            $options = ms_Main::$settings;
            if(!is_null($_POST['state']))
            {
                $options['ms_author_linking'] = sanitize_text_field($_POST['state']);
            }
            else{
                $options['ms_author_linking'] = '1';
            }
            $options['ms_initial_dt'] = time();
            ms_Settings::update_options($options);
            die();
        }
		
		static public function ajax_set_gmt(){
            $options = ms_Main::$settings;
			$options['ms_gmt'] = sanitize_text_field($_POST['state']);
            $options['ms_initial_dt'] = time();
            ms_Settings::update_options($options);
            die();
        }
		
		static public function ajax_set_lang(){
            $options = ms_Main::$settings;
			$options['ms_lang'] = sanitize_text_field($_POST['state']);
            $options['ms_initial_dt'] = time();
            ms_Settings::update_options($options);
            die();
        }
		
        static public function ajax_set_support_time(){
            $options = ms_Main::$settings;
            $options['ms_initial_dt'] = time();
            ms_Settings::update_options($options);

            die();
        }

	} // end ms_Main

}
?>