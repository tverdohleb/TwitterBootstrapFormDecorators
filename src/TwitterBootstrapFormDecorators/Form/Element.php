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
                 ->addDecorator('Description', array('tag' => 'span', 'class' => 'help-block'))
                 ->addDecorator(array('control' => 'HtmlTag'), array('tag' => 'div', 'class' => 'controls'))
                 ->addDecorator('Label', array('class' => 'control-label'))
                 ->addDecorator(array('control-group' => 'HtmlTag'), array('class' => 'control-group', 'tag' => 'div'));
        }
        return $this;
    }
    
    /**
     * Specifies whether this element is a required field.
     *
     * Also sets the HTML5 'required' attribute.
     *
     * @param boolean $flag
     * @return void
     */
    public function setRequired($flag = true)
    {
        if ($flag) {
            $this->required = 'true';
        } else {
            if (isset($this->required)) {
                unset($this->required);
            }
        }
        return parent::setRequired($flag);
    }
}
