<?php
return array(
    'di' => array(
        'instance' => array(
            'Zend\View\HelperLoader' => array(
                'parameters' => array(
                    'map' => array(
                        'formButton' => 'TwitterBootstrapFormDecorators\View\Helper\FormButton',
                        'formErrors' => 'TwitterBootstrapFormDecorators\View\Helper\FormErrors',
                        'formRadio'  => 'TwitterBootstrapFormDecorators\View\Helper\FormRadio',
                        'formSubmit' => 'TwitterBootstrapFormDecorators\View\Helper\FormSubmit',
                        'formText'   => 'TwitterBootstrapFormDecorators\View\Helper\FormText',
                    ),
                ),
            ),
            'Zend\View\PhpRenderer' => array(
                'broker' => 'Zend\View\HelperBroker',
            ),
            'Zend\View\HelperBroker' => array(
                'parameters' => array(
                    'loader' => 'Zend\View\HelperLoader',
                ),
            ),
        ),
    ),
);
