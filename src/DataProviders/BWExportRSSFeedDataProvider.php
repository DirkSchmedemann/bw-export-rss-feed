<?php

namespace BWExportRSSFeed\DataProviders;

use Plenty\Modules\Catalog\DataProviders\BaseDataProvider;
class BWExportRSSFeedDataProvider extends BaseDataProvider
{
    /**
     * @return array
     */

    public function getRows(): array
    {
        return [
            [
                'key' => 'title',
                'label' => 'Titel',
                'required' => true,
                'value' => 'RSS Feed_TEST',
            ],
            [
                'key' => 'link',
                'label' => 'Link',
                'required' => true,
            ],
            [
                'key' => 'description',
                'label' => 'Beschreibung',
                'required' => true,
            ],
            [
                'key' => 'guid',
                'label' => 'GUID',
                'required' => true,
            ],
            [
                'key' => 'maileon:sku',
                'label' => 'SKU',
                'required' => true,
            ],
            [
                'key' => 'maileon:price',
                'label' => 'Preis',
                'required' => true,
            ],
            [
                'key' => 'maileon:image',
                'label' => 'Bild',
                'required' => true,
            ]
        ];
    }
}