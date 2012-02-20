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

use Zend\Form as ZendForm;

/**
 * TwitterBootstrapFormDecorators\Form\Decorator\FormDecorator
 *
 * Render a Zend_Form object.
 *
 * Accepts following options:
 * - separator: Separator to use between elements
 * - helper: which view helper to use when rendering form. Should accept three
 *   arguments, string content, a name, and an array of attributes.
 *
 * Any other options passed will be used as HTML attributes of the form tag.
 *
 * @uses       \Zend\Form\Form
 * @uses       \Zend\Form\Decorator\FormDecorator
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Decorator
 */
class FormDecorator extends \Zend\Form\Decorator\FormDecorator
{
    /**
     * Retrieve decorator options
     *
     * Assures that form action and method are set, and sets appropriate
     * encoding type if current method is POST.
     *
     * @return array
     */
    public function getOptions()
    {
        if (null !== ($element = $this->getElement())) {
            if ($element instanceof ZendForm\Form) {
                if (!$element->getAttrib('class')) {
                    $element->setAttrib('class', 'form-horizontal');
                }
            }
        }
        return parent::getOptions();
    }
}
