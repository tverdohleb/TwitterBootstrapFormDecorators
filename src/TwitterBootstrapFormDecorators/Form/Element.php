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
namespace TwitterBootstrapFormDecorators\Form;

use \Zend\Form\Decorator;

/**
 * TwitterBootstrapFormDecorators\Form\Element
 *
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Element
 */
class Element extends \Zend\Form\Element
{
    /**
     * Load default decorators
     *
     * @todo Change errors decorator to be awesomeness.
     * @return TwitterBootstrapFormDecorators\Form\Element
     */
    public function loadDefaultDecorators()
    {
        if ($this->loadDefaultDecoratorsIsDisabled()) {
            return $this;
        }

        $decorators = $this->getDecorators();
        if (empty($decorators)) {
            $getId = function(Decorator $decorator) {
                return $decorator->getElement()->getId() . '-element';
            };
            $this->addDecorator('ViewHelper')
                 ->addDecorator('Errors', array('class' => 'help-inline'))
                 ->addDecorator('Description', array('tag' => 'span', 'class' => 'help-inline'))
                 ->addDecorator(array('div' => 'HtmlTag'), array('tag' => 'div', 'class' => 'controls'))
                 ->addDecorator('Label')
                 ->addDecorator('Fieldset', array('class' => 'control-group'));
        }
        return $this;
    }
}
