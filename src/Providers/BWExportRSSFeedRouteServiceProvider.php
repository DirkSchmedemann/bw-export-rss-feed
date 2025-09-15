<?php

namespace BWExportRSSFeed\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class BWExportRSSFeedRouteServiceProvider
 * @package BWExportRSSFeed\Providers
 */
class BWExportRSSFeedRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('rss-feed','BWExportRSSFeed\Controllers\BWExportRSSFeedController@getItemsForFeed');
    }
}