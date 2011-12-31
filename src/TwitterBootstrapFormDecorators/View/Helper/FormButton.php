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
 * Helper to generate a "button" element
 *
 * @uses       \Zend\View\Helper\FormButton
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\View
 * @subpackage Helper
 */
class FormButton extends \Zend\View\Helper\FormButton
{
    /**
     * Generates a 'button' element.
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
    public function __invoke($name = null, $value = null, $attribs = null)
    {
        if (!isset($attribs['class'])) {
            $attribs['class'] = 'btn';
        }
        return parent::__invoke($name, $value, $attribs);
    }
}
