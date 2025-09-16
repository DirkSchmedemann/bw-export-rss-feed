<?php

namespace BWExportRSSFeed\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;

class BWExportRSSFeedController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getItemsForFeed(Twig $twig, ItemDataLayerRepositoryContract $items):string
    {
        $itemColumns = [
            'itemDescription' => [
                'name1',
                'description',
            ]
        ];

        $itemFilter = [
            'itemBase.isStoreSpecial' => [
                'shopAction' => [3]
            ]
        ];

        $itemParams = [
            'language' => 'de',
        ];

        $resultItems = $items -> search($itemColumns, $itemFilter, $itemParams);

        $itemsResult = array();
        foreach ($resultItems as $item) {
            $itemsResult[] = $item;
        }

        $data = array(
            'currentItems' => $itemsResult
        );

        return $twig->render('BWExportRSSFeed::RSSContent', $data);
    }
}