<?php

namespace BWExportRSSFeed\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class BWExportRSSFeedServiceProvider
 * @package BWExportRSSFeed\Providers
 */
class BWExportRSSFeedServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(BWExportRSSFeedRouteServiceProvider::class);
    }
}