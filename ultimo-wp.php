<?php

/*
  Plugin Name: Material Admin
  Plugin URI: http://codecanyon.net/item/wp-admin-menu-manager/9520160
  Description: Bring Material Design to you WordPress Dashboard
  Version: 0.0.1
 */

/**
 * Loads our incredibily awesome Paradox Framework, which we are going to use a lot.
 */
require 'paradox/paradox-plugin.php';

/**
 * Our plugin starts here
 *
 * MaterialAdmin is a WordPress plugin that completly transforms your WordPress admin interface, giving it a 
 * awesome and beautful Google Material Design interface.
 */
class materialAdmin extends ParadoxPlugin {
  
  /**
   * Creates or returns an instance of this class.
   * @return object The instance of this class, to be used.
   */
  public static function init() {
    // If an instance hasn't been created and set to $instance create an instance and set it to $instance.
    if (null == self::$instance) {self::$instance = new self;}
    return self::$instance;
  }
  
  /**
   * Initializes the plugin adding all important hooks and generating important instances of our framework.
   */
  public function __construct() {
    
    // Setup
    $this->id         = 'material-admin';
    $this->textDomain = 'material-admin';
    $this->file       = __FILE__;
    
    // Set Debug Temporarily to True
    $this->debug = true;
    
    // Calling parent construct
    parent::__construct();
    
    // Now we call the Advanced Custom Posts Plugin, that will handle our Options Page
    $this->addACF();
    
  }
  
  /**
   * Loads our ACF custom fields
   */
  public function acfAddFields() {
    require $this->path('inc/advanced-custom-fields-font-awesome/acf-font-awesome-v5.php');
  }

  /**
   * Enqueue and register Admin JavaScript files here.
   */
  public function enqueueAdminScripts() {
    // Common and Admin JS
    wp_enqueue_script($this->id.'common', $this->url('assets/js/common.min.js'), false, '', true);
    wp_enqueue_script($this->id.'admin', $this->url('assets/js/admin.min.js'), array($this->id.'common'), '', true);
  }

  /**
   * Enqueue and register Admin CSS files here.
   */
  public function enqueueAdminStyles() {
    // Common and Admin styles
    wp_enqueue_style($this->id.'common', $this->url('assets/css/common.min.css'));
    wp_enqueue_style($this->id.'admin', $this->url('assets/css/admin.min.css'));
    
    // Custom CSS
    $this->addCustomCSS();
  }
  
  /**
   * Enqueue and register Login CSS files here.
   */
  public function enqueueLoginStyles() {
    // Common and Admin styles
    wp_enqueue_style($this->id.'common', $this->url('assets/css/common.min.css'));
    wp_enqueue_style($this->id.'login', $this->url('assets/css/login.min.css'));
    
    // Custom CSS
    $this->addCustomCSS();
  }
  
  /**
   * Enqueue and register Login JavaScript files here.
   */
  public function enqueueLoginScripts() {
    // Common and Admin JS
    wp_enqueue_script('jquery');
    wp_enqueue_script($this->id.'common', $this->url('assets/js/common.min.js'), false, '', true);
    wp_enqueue_script($this->id.'admin', $this->url('assets/js/login.min.js'), array($this->id.'common'), '', true);
  }
  
  /**
   * We need to attach our css, saved on the DB to the actual css loaded across the plugin
   */
  public function addCustomCSS() {
    // Get custom CSS saved
    $css = get_option($this->id.'compiledCss');
    
    // Check and append
    if ($css) wp_add_inline_style($this->id.'admin', $css);
  }
  
  /**
   * Here is where we create and manage our admin pages
   */
  public function adminPages() {
    
    // Creating test admin page
    acf_add_options_page(array(
      'page_title' => __('Material Admin', $this->textDomain),
      'icon_url'   => 'dashicons-art',
      'position'   => '1000.63',
    ));
    
  }
  
  /**
   * Place code that will be run on first activation
   */
  public function onActivation() {
    
  }
  
  /**
   * Recomplie our custom scss generated to apply new Color Scheme, based on user options
   */
  public function runCompiler() {
    
    // Get custom SASS
    ob_start();
    include $this->path('inc/color-scheme.php');
    $sass = ob_get_clean();
    
    // Saves our new compiled CSS
    update_option($this->id.'compiledCss', $this->compileSass($sass));
    
  }
  
  /**
   * After ACF saves
   * @param mixed $post_id The post being save or, in our case, the option.
   */
  public function onSave($post_id) {
    if ($post_id === 'options') $this->runCompiler();
  }
  
  /**
   * Place code for your plugin's functionality here.  
   */
  public function Plugin() {
    
    // Adds Parallax block, proper to the Fun version
    add_action('in_admin_header', array(&$this, 'addParallaxBlock'));
    
    // Footer Cleanup
    add_filter('admin_footer_text', array(&$this, 'footerClean'));
    add_filter('update_footer', array(&$this, 'footerClean'), 11);
    
    // adds body class to our admin pages
    add_filter('admin_body_class', array($this, 'bodyClass'));

  }
  
  /**
   * Adds custom body class, based on our theme
   */
  public function bodyClass($classes) {
    return $classes.$this->id;
  }
  
  /**
   * Adds Parallax Block
   */
  public function addParallaxBlock() {
    // Render our view
    $this->render('admin/parallax-block');
  }
  
  /**
   * Clean up our footer texts
   */
  public function footerClean() {
    return '';
  }
  
}

/**
 * Finally we get to run our plugin.
 */
$MaterialAdmin = MaterialAdmin::init();