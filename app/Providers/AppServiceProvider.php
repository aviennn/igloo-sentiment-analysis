<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\AzureBlobStorage\AzureBlobStorageAdapter;
use MicrosoftAzure\Storage\Blob\BlobRestProxy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // Force HTTPS if the environment is not locals
         if (config('app.env') !== 'local') {
            \URL::forceScheme('https');
        }
        

        Storage::extend('azure', function ($app, $config) {
            $client = BlobRestProxy::createBlobService($config['connection_string']);
            $adapter = new AzureBlobStorageAdapter(
                $client,
                $config['container']
            );
        
            return new Filesystem($adapter);
        });
    }
}
