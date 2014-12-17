GoldenlineSareSoapApiBundle
===========================

Symfony bundle for the SARE SOAP API

Installation
------------

The best way to install this bundle is by using [Composer](http://getcomposer.org). Simply run:

``` bash
$ php composer.phar require goldenline/sare-soap-api-bundle dev-master
```

Then, enable the bundle:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new GoldenLine\SareSoapApiBundle\GoldenlineSareSoapApiBundle(),
    );
}
```

Finally add your certificate:

```yml
goldenline_sare_soap_api:
    cert: sare.pem
```

Your certificate should contain your private key combined with a signed certificate from SARE.

Usage
-----

In your controller just do:

```php
public function someAction()
{
    $sare = $this->get('goldenline_sare_soap_api.client');
}
```

or simply inject `goldenline_sare_soap_api.client` into any other service.

License
-------

This bundle is released under the MIT license. See the complete license in the
bundle:

    Resources/meta/LICENSE