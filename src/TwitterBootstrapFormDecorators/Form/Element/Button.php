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
 * Button form element
 *
 * @uses       \TwitterBootstrapFormDecorators\Form\Element\Submit
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Element
 */
class Button extends Submit
{
    /**
     * Use formButton view helper by default
     * @var string
     */
    public $helper = 'formButton';
}
