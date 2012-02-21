<?php
/**
 * TwitterBootstrapFormDecorators
 *
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 */

/**
 * @namespace
 */
namespace TwitterBootstrapFormDecorators\Form;

use Traversable,
    Zend\Stdlib\IteratorToArray;

/**
 * TwitterBootstrapFormDecorators\Form
 *
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 */
class SubForm extends Form 
{
    /**
     * Whether or not form elements are members of an array
     * @var bool
     */
    protected $_isArray = true;
    
    /**
     * Load the default decorators
     *
     * @return Form
     */
    public function loadDefaultDecorators()
    {
        if ($this->loadDefaultDecoratorsIsDisabled()) {
            return $this;
        }

        $decorators = $this->getDecorators();
        if (empty($decorators)) {
            $this->addDecorator('FormElements')
                 ->addDecorator('Fieldset');    
        }
        return $this;
    }
}
