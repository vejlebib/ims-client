# ims-client
IMS client experiment

Requires PHP 7.0 with SOAP and XML extension.

```
$ composer install
```

Insert credentials in constants:
```
const IMS_USER = '<INSET USER HERE>';
const IMS_PASS = '<INSET PASS HERE';
const IMS_CLIENT_INFO = '<INSERT CLIENT INFO>';
```

Run the simple test:
```
$ php test.php
```
