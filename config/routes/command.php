<?php

namespace KWIO\App;

use KWIO\App\Books\BookImportEvent;
use WP_CLI;

WP_CLI::add_command('kwio book-import', BookImportEvent::class);