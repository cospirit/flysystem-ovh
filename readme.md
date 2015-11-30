# Flysystem Adapter for OVH Openstack Swift Object Storage

[![Author](https://img.shields.io/badge/author-@sumihiran-blue.svg?style=flat-square)](https://twitter.com/sumihiran)


## Installation

```bash
composer require techyah/flysystem-ovh
```

## Usage
```php
use League\Flysystem\Filesystem;
use Techyah\Flysystem\OVH\OVHClient;
use Techyah\Flysystem\OVH\OVHAdapter;

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

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).