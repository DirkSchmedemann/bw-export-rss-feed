<?php

namespace BWExportRSSFeed\Providers;

use BWExportRSSFeed\DataProviders\BWExportRSSFeedDataProvider;
use Plenty\Modules\Catalog\Templates\BaseTemplateProvider;
class BWExportRSSFeedTemplateProvider extends BaseTemplateProvider
{
    /**
     * @return array
     */
    public function getMappings(): array
    {
        return [
          [
              'identifier' => 'simpleMapping',
              'label' => 'RSS Feed Datensätze',
              'isMapping' => false,
              'provider' => BWExportRSSFeedDataProvider::class,
          ]
        ];
    }

}