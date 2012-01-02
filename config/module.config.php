<?php
return array(
    'di' => array(
        'instance' => array(
            'Zend/View/HelperLoader' => array(
                'parameters' => array(
                    'map' => array(
                        'formSubmit' => 'TwitterBootstrapFormDecorator\View\Helper\FormSubmit',
                        'formButton' => 'TwitterBootstrapFormDecorator\View\Helper\FormButton',
                        'formErrors' => 'TwitterBootstrapFormDecorator\View\Helper\FormErrors',
                    ),
                ),
            ),
        ),
    ),
);
