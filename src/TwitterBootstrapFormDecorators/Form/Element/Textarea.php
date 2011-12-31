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
namespace TwitterBootstrapFormDecorators\Form\Element;

/**
 * Textarea form element
 *
 * @uses       \TwitterBootstrapFormDecorators\Form\Element\Xhtml
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Element
 */
class Textarea extends Xhtml
{
    /**
     * Use formTextarea view helper by default
     * @var string
     */
    public $helper = 'formTextarea';
}
