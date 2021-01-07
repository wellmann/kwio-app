<?php

namespace KWIO\App\Books;

use WP_REST_Response;
use wpdb;

class BookRestController
{
    public function getBook(wpdb $wpdb, int $id): WP_REST_Response
    {
        var_dump($id);
        var_dump($wpdb);

        return rest_ensure_response([]);
    }

    public function getBooks(wpdb $wpdb): WP_REST_Response
    {
        var_dump($wpdb);

        return rest_ensure_response([]);
    }
}