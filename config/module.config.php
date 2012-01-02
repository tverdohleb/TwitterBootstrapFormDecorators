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
                    ),
                ),
            ),
        ),
    ),
);
