<?php namespace ElContraption\WpThemeConfig;

class ThemeConfig {

    /**
     * Instance of this class
     */
    protected static $instance = null;

    /**
     * Constructor
     */
    protected function __construct()
    {
        add_action('plugins_loaded', array($this, 'init'));
    }

    /**
     * Initialize configurator
     */
    public function init()
    {
        $configurator = Configurator::getInstance();
    }

    /**
     * Return an instance of this class
     */
    public static function getInstance()
    {
        // If the single instance hasn't been set, set it now.
        if (self::$instance == null)
        {
            self::$instance = new self;
        }

        return self::$instance;
    }

}
