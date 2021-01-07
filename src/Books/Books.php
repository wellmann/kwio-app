<?php

namespace KWIO\App\Books;

use CEKW\WpPluginFramework\Core\Event\AbstractEvent;
use CEKW\WpPluginFramework\Core\Module\AbstractModule;
use CEKW\WpPluginFramework\Core\Event\Schedule;
use wpdb;

class Books extends AbstractModule
{
    public function init(): void
    {
        $this->addPostType(new BookPostType());
        //$this->addShortcode(new BookCountShortcode());
        //$this->addWidget(new BookArchiveWidget());
        $this->addEvent(new BookImportEvent());
        //$this->addSettings([]);
        // add translatable post type
    }

    public function admin(): void
    {
        //$this->addListTableColumn($this->book->getKey(), 'ISBN', 'metaKey', $sortable = true);
        // help tab
        // menu items
        // admin-post.php
    }

    public function activate(Schedule $schedule, wpdb $wpdb): void
    {
        $schedule->addEvent(new BookImportEvent())->daily()->at(strtotime('tomorrow'));
        // create table from sql file
    }

    public function deactivate(Schedule $schedule): void
    {
        $schedule->removeEvent(new BookImportEvent());
    }
}