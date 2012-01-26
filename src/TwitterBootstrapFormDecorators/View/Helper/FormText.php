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
 * Helper to generate a "text" element
 *
 * @uses       \Zend\View\Helper\FormText
 * @category   TwitterBoostrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\View
 * @subpackage Helper
 */
class FormText extends \Zend\View\Helper\FormText
{
    /**
     * Generates a 'text' element.
     *
     * @access public
     *
     * @param string|array $name If a string, the element name.  If an
     * array, all other parameters are ignored, and the array elements
     * are used in place of added parameters.
     *
     * @param mixed $value The element value.
     *
     * @param array $attribs Attributes for the element tag.
     *
     * @return string The element XHTML.
     */
    public function __invoke($name, $value = null, $attribs = null)
    {
        $info = $this->_getInfo($name, $value, $attribs);
        extract($info); // name, value, attribs, options, listsep, disable

        $prepend = '';
        $append = '';

        if (isset($attribs['prepend'])) {
            $prepend .= '<span class="add-on">'
                . $this->view->vars()->escape($attribs['prepend'])
                . '</span>';
            unset($attribs['prepend']);
        }

        if (isset($attribs['append'])) {
            $append = '<span class="add-on">'
                . $this->view->vars()->escape($attribs['append'])
                . '</span>';
            unset($attribs['append']);
        }

        if ($prepend || $append) {
            $prepend = '<div class="input-prepend">' . $prepend;
            $append = $append . '</div>';
        }


        return $prepend . parent::__invoke($name, $value, $attribs) . $append;
    }
}
