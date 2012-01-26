<?php
return array(
    'di' => array(
        'instance' => array(
            'Zend\View\HelperLoader' => array(
                'parameters' => array(
                    'map' => array(
                        'formSubmit' => 'TwitterBootstrapFormDecorators\View\Helper\FormSubmit',
                        'formButton' => 'TwitterBootstrapFormDecorators\View\Helper\FormButton',
                        'formErrors' => 'TwitterBootstrapFormDecorators\View\Helper\FormErrors',
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
