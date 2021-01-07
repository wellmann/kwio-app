<?php

namespace KWIO\App\Books;

use CEKW\WpPluginFramework\Core\ContentType\PostType;

class BookPostType extends PostType
{
    public function init()
    {
        $this
            ->setLabelMenuName('Bücher')
            ->setLabelAllItems('Alle Bücher')
            ->setLabelAddNewItem('Ein neues Buch erstellen')
            ->setLabelAddNew('Buch erstellen')
            ->setIsPublic(true);
    }
}