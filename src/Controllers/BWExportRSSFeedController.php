<?php

namespace BWExportRSSFeed\Controllers;

use Plenty\Plugin\Controller;
use BWExportRSSFeed\Providers\BWExportRSSFeedServiceProvider;
use Plenty\Modules\Catalog\Contracts\CatalogRepositoryContract;
use Plenty\Modules\Catalog\Contracts\CatalogExportRepositoryContract;
use Plenty\Modules\Catalog\Contracts\TemplateContainerContract;

class BWExportRSSFeedController extends Controller
{
    public function export(
        CatalogRepositoryContract $catalogRepository,
        CatalogExportRepositoryContract $catalogExportRepository,
        TemplateContainerContract $templateContainer
    )
    {
        $catalogs = $catalogRepository->all();

        foreach ($catalogs->getResult() as $catalog) {
            $template = $templateContainer->getTemplate($catalog['template']);

            if ($template->getName() != BWExportRSSFeedServiceProvider::PLUGIN_NAME) {
                continue;
            }

            $exportService = $catalogExportRepository->exportById($catalog['id']);

            $result = $exportService->getResult();

            foreach ($result as $page) {
                return $page;
            }
        }
        return null;
    }
}