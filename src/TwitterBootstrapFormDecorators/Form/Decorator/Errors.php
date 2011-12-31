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
 * TwitterBootstrapFormDecorators\Form\Decorator\Errors
 *
 * Any options passed will be used as HTML attributes of the span tag for the errors.
 *
 * @uses       \Zend\Form\Decorator\Errors
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Decorator
 */
class Errors extends \Zend\Form\Decorator\Errors
{
    public function render($content)
    {
        $element = $this->getElement();
        $view    = $element->getView();
        if (null === $view) {
            return $content;
        }

        $errors = $element->getMessages();
        if (empty($errors)) {
            return $content;
        }

        $decorator = $element->getDecorator('fieldset');
        if ($decorator) {
            $decorator->setOption('class', $decorator->getOption('class') . ' error');
        }
        
        $separator = $this->getSeparator();
        $placement = $this->getPlacement();
        $errors    = $view->formErrors($errors, $this->getOptions());

        switch ($placement) {
            case self::APPEND:
                return $content . $separator . $errors;
            case self::PREPEND:
                return $errors . $separator . $content;
        }

    }
}
