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
 * Helper to render errors for a form element
 *
 * @uses       \Zend\View\Helper\FormErrors
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\View
 * @subpackage Helper
 */
class FormErrors extends \Zend\View\Helper\FormErrors
{
    /**#@+
     * @var string Element block start/end tags and separator
     */
    protected $_htmlElementEnd       = '</span>';
    protected $_htmlElementStart     = '<span%s>';
    protected $_htmlElementSeparator = '<br>';
    /**#@-*/
}
