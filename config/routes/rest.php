<?php

namespace KWIO\App;

use CEKW\WpPluginFramework\Core\RestRoute\RestRouteCollector;
use KWIO\App\Books\BookRestController;

add_action('cekw.wp_plugin_framework.rest_routes', function (RestRouteCollector $restRoutes) {
    $restRoutes->setNamespace('kwio/v1');
    $restRoutes
        ->add('/book/(?P<id>\d+)')
        ->setController([BookRestController::class, 'getBook']);

    $restRoutes
        ->add('/book')
        ->setController([BookRestController::class, 'getBooks']);
});