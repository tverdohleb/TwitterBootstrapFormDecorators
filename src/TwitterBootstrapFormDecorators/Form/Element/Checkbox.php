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
 * Checkbox form element
 *
 * @uses       \TwitterBootstrapFormDecorators\Form\Element\Xhtml
 * @category   TwitterBootstrapFormDecorators
 * @package    TwitterBootstrapFormDecorators\Form
 * @subpackage Element
 */
class Checkbox extends Xhtml
{
    /**
     * Is the checkbox checked?
     * @var bool
     */
    public $checked = false;

    /**
     * Use formCheckbox view helper by default
     * @var string
     */
    public $helper = 'formCheckbox';

    /**
     * Options that will be passed to the view helper
     * @var array
     */
    public $options = array(
        'checkedValue'   => '1',
        'uncheckedValue' => '0',
    );

    /**
     * Value when checked
     * @var string
     */
    protected $_checkedValue = '1';

    /**
     * Value when not checked
     * @var string
     */
    protected $_uncheckedValue = '0';

    /**
     * Current value
     * @var string 0 or 1
     */
    protected $_value = '0';

    /**
     * Set options
     *
     * Intercept checked and unchecked values and set them early; test stored
     * value against checked and unchecked values after configuration.
     *
     * @param  array $options
     * @return \Zend\Form\Element\Checkbox
     */
    public function setOptions(array $options)
    {
        if (array_key_exists('checkedValue', $options)) {
            $this->setCheckedValue($options['checkedValue']);
            unset($options['checkedValue']);
        }
        if (array_key_exists('uncheckedValue', $options)) {
            $this->setUncheckedValue($options['uncheckedValue']);
            unset($options['uncheckedValue']);
        }
        parent::setOptions($options);

        $curValue = $this->getValue();
        $test     = array($this->getCheckedValue(), $this->getUncheckedValue());
        if (!in_array($curValue, $test)) {
            $this->setValue($curValue);
        }

        return $this;
    }

    /**
     * Set value
     *
     * If value matches checked value, sets to that value, and sets the checked
     * flag to true.
     *
     * Any other value causes the unchecked value to be set as the current
     * value, and the checked flag to be set as false.
     *
     *
     * @param  mixed $value
     * @return \Zend\Form\Element\Checkbox
     */
    public function setValue($value)
    {
        if ($value == $this->getCheckedValue()) {
            parent::setValue($value);
            $this->checked = true;
        } else {
            parent::setValue($this->getUncheckedValue());
            $this->checked = false;
        }
        return $this;
    }

    /**
     * Set checked value
     *
     * @param  string $value
     * @return \Zend\Form\Element\Checkbox
     */
    public function setCheckedValue($value)
    {
        $this->_checkedValue = (string) $value;
        $this->options['checkedValue'] = $value;
        return $this;
    }

    /**
     * Get value when checked
     *
     * @return string
     */
    public function getCheckedValue()
    {
        return $this->_checkedValue;
    }

    /**
     * Set unchecked value
     *
     * @param  string $value
     * @return \Zend\Form\Element\Checkbox
     */
    public function setUncheckedValue($value)
    {
        $this->_uncheckedValue = (string) $value;
        $this->options['uncheckedValue'] = $value;
        return $this;
    }

    /**
     * Get value when not checked
     *
     * @return string
     */
    public function getUncheckedValue()
    {
        return $this->_uncheckedValue;
    }

    /**
     * Set checked flag
     *
     * @param  bool $flag
     * @return \Zend\Form\Element\Checkbox
     */
    public function setChecked($flag)
    {
        $this->checked = (bool) $flag;
        if ($this->checked) {
            $this->setValue($this->getCheckedValue());
        } else {
            $this->setValue($this->getUncheckedValue());
        }
        return $this;
    }

    /**
     * Get checked flag
     *
     * @return bool
     */
    public function isChecked()
    {
        return $this->checked;
    }

    /**
     * Load default decorators
     *
     * @todo Change errors decorator to be awesomeness.
     * @return TwitterBootstrapFormDecorators\Form\Element
     */
    public function loadDefaultDecorators()
    {
        if ($this->loadDefaultDecoratorsIsDisabled()) {
            return $this;
        }

        $decorators = $this->getDecorators();
        if (empty($decorators)) {
            $getId = function(Decorator $decorator) {
                return $decorator->getElement()->getId() . '-element';
            };
            $this->addDecorator('ViewHelper')
                 ->addDecorator('Errors', array('class' => 'help-inline'))
                 ->addDecorator('Description', array('tag' => 'span', 'class' => 'help-inline'))
                 ->addDecorator('CheckboxLabel')
                 ->addDecorator(array('control-list' => 'HtmlTag'), array('tag' => 'div', 'class' => 'control-list'))
                 ->addDecorator(array('controls' => 'HtmlTag'), array('tag' => 'div', 'class' => 'controls'))
                 ->addDecorator(array('control-group', 'HtmlTag'), array('tag' => 'div', 'class' => 'control-group'));
        }
        return $this;
    }

}
