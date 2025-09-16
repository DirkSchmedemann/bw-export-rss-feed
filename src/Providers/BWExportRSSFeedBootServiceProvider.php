<?php

namespace BWExportRSSFeed\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Modules\Catalog\Contracts\TemplateContainerContract;

class BWExportRSSFeedBootServiceProvider extends ServiceProvider
{
    /**
     * @param TemplateContainerContract $container
     */

    public function boot(TemplateContainerContract $container) {
        $container->register(BWExportRSSFeedServiceProvider::PLUGIN_NAME,'RSS_Feed',BWExportRSSFeedTemplateProvider::class);
    }
}