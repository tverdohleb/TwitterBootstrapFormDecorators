<?php
/**
 * TwitterBootstrapFormDecorators
 *
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Decorator
 */

/**
 * @namespace
 */
namespace TwitterBootstrapFormDecorators\Form\Decorator;

/**
 * TwitterBootstrapFormDecorators\Form\Decorator\Fieldset
 *
 * Overrides the Fieldset decorator in Zend\Form to prevent
 * fieldsets from receiving the same attributes (including ids)
 * as the parent element.
 *
 * @uses       \Zend\Form\Form
 * @uses       \Zend\Form\Decorator\Fieldset
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Decorator
 */

class Fieldset extends \Zend\Form\Decorator\Fieldset
{
    /**
     * Get options
     *
     * Unlike the Fieldset decorator in Zend\Form, does *not*
     * merge in attributes from the element.
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->_options;
    }
}