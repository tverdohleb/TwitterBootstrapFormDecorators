<?php
/**
 * TwitterBootstrapFormDecorators
 *
 * @category TwitterBootstrapFormDecorators
 * @package  Module
 */

namespace TwitterBootstrapFormDecorators;

use Zend\Module\Manager,
    Zend\Module\Consumer\AutoloaderProvider;

/**
 * Module Setup
 *
 * @category TwitterBootstrapFormDecorators
 * @package  Module
 */
class Module implements AutoloaderProvider {
    
    /**
     * Initialize Module
     *
     * @param  \Zend\Module\Manager $moduleManager
     * @return void
     */
    public function init(Manager $moduleManager)
    {
    }

    /**
     * Set Autoloader Configuration
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
