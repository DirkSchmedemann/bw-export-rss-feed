<?php

namespace BWExportRSSFeed\Providers;

use Plenty\Plugin\ServiceProvider;


/**
 * Class BWExportRSSFeedServiceProvider
 * @package BWExportRSSFeed\Providers
 */
class BWExportRSSFeedServiceProvider extends ServiceProvider
{

    const PLUGIN_NAME = 'bw_export_rss_feed';
    /**
    * Register the route service provider
    */
    public function register()
    {
        try {
            $this->getApplication()->register(BWExportRSSFeedBootServiceProvider::class);
            $this->getApplication()->register(BWExportRSSFeedRouteServiceProvider::class);
        } catch (\Exception $e) {

        }
    }
}