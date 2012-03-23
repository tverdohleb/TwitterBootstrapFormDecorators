<?php
/**
 * TwitterBootstrapFormDecorators
 *
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\View
 * @subpackage Helper
 */

/**
 * @namespace
 */
namespace TwitterBootstrapFormDecorators\View\Helper;

/**
 * Helper to generate a "submit" button
 *
 * @uses       \Zend\View\Helper\FormSubmit
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\View
 * @subpackage Helper
 */
class FormSubmit extends \Zend\View\Helper\FormSubmit
{
    /**
     * Generates a 'submit' button.
     *
     * @access public
     *
     * @param string|array $name If a string, the element name.  If an
     * array, all other parameters are ignored, and the array elements
     * are extracted in place of added parameters.
     *
     * @param mixed $value The element value.
     *
     * @param array $attribs Attributes for the element tag.
     *
     * @return string The element XHTML.
     */
    public function __invoke($name, $value = null, $attribs = null)
    {
        if (!isset($attribs['class'])) {
            $attribs['class'] = 'btn btn-primary';
        }
        return parent::__invoke($name, $value, $attribs);
    }
}
