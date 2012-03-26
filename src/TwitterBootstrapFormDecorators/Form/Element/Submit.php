<?php
/**
 * TwitterBootstrapFormDecorators
 *
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Element
 */

/**
 * @namespace
 */
namespace TwitterBootstrapFormDecorators\Form\Element;

/**
 * Submit form element
 *
 * @uses       \TwitterBootstrapFormDecorators\Form\Element\Submit
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Element
 */
class Submit extends \Zend\Form\Element\Submit
{
    /**
     * Default decorators
     *
     * Uses only 'Submit' and 'DtDdWrapper' decorators by default.
     *
     * @return \TwitterBootstrapFormDecorators\Form\Element\Submit
     */
    public function loadDefaultDecorators()
    {
        if ($this->loadDefaultDecoratorsIsDisabled()) {
            return $this;
        }

        $decorators = $this->getDecorators();
        if (empty($decorators)) {
            $this->addDecorator('ViewHelper', array('class' => 'btn btn-primary'));
        }
        return $this;
    }
}
