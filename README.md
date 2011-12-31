Twitter Bootstrap Form Decorators
=======
Version 0.0.1 Created by Mike Willbanks

Introduction
------------

Twitter Bootstrap Form Decorators is an attempt to implement the Twitter
Bootstrap 2.0-wip branch of forms within Zend Framework 2.

Requirements
------------

* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master)
* [Twitter Bootstrap 2](https://github.com/twitter/bootstrap/tree/2.0-wip)

Current State
----------------
Many of the main elements pretty much work... this is really a work in progress right now.
What I know does not work:
* Captcha
* File
* Probably other things :)


Installation
------------

### Main Setup

1. Clone this project into your `./vendors/` directory and enable it in your
   `application.config.php` file.

### Example Form
        <?php
            use \TwitterBootstrapFormDecorators\Form\Form;

            class Base extends Form
            {
                $this->setMethod('POST')
                     ->addElement('hash', 'csrf', array(
                    'ignore' => true,
                 ));
            }
        ?>

