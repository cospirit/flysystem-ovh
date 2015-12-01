<?php

namespace Techyah\Flysystem\OVH\Supports\Laravel;

use Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Cached\CachedAdapter;
use League\Flysystem\Cached\Storage\Adapter;
use Illuminate\Support\ServiceProvider;
use Techyah\Flysystem\OVH\OVHClient;
use Techyah\Flysystem\OVH\OVHAdapter;

class OVHServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('ovh', function($app, $config) {
            $client = new OVHClient($config);

            return new Filesystem(new OVHAdapter($client->getContainer()));
        });
    }

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
