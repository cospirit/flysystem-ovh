# Flysystem Adapter for OVH Openstack Swift Object Storage


## Installation

```bash
composer require ardeveloppement/flysystem-ovh
```

## Usage
```php
use League\Flysystem\Filesystem;
use ArDev\Flysystem\OVH\OVHClient;
use ArDev\Flysystem\OVH\OVHAdapter;

$options = [
   'username'  => ':username',
   'password'  => ':password',
   'tenantId'  => ':tenantId',
   'container' => ':container',
   'region'    => ':region', // default BHS1
];

$client = new OVHClient($options);

$filesystem = new Filesystem(new OVHAdapter($client->getContainer()));
```

### License

This is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).