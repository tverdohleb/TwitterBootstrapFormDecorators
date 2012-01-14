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
class Form extends \Zend\Form\Form
{
    /**
     * Constructor
     *
     * Registers form view helper as decorator
     *
     * @param mixed $options
     * @return void
     */
    public function __construct($options = null)
    {
        if ($options instanceof Traversable) {
            $options = IteratorToArray::convert($options);
        }
        if (is_array($options)) {
            $this->setOptions($options);
        }

        $this->addPrefixPath(
            'TwitterBootstrapFormDecorators\Form',
            'TwitterBootstrapFormDecorators/Form'
        );
        $this->addElementPrefixPath(
            'TwitterBootstrapFormDecorators\Form\Element',
            'TwitterBootstrapFormDecorators/Form/Element'
        );

        // Extensions...
        $this->init();

        $this->loadDefaultDecorators();

        $this->initPost();
    }

    /**
     * Called after construct is finished
     *
     * @return void
     */
    public function initPost()
    {
    
    }

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
                 ->addDecorator('FormDecorator');
        }
        return $this;
    }
}
