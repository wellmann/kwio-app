<?php

namespace KWIO\App\Books;

use CEKW\WpPluginFramework\Core\Event\AbstractEvent;
use wpdb;

class BookImportEvent extends AbstractEvent
{
    public function __invoke(wpdb $wpdb)
    {

    }
}