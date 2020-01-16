<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use App\PostTypes\Product as PostType;

class Product
{

    public static function register()
    {
        Container::make('post_meta', 'Settings')->where('post_type', '=', PostType::getPostType())->add_fields([
            Field::make('textarea', 'crb_description', 'Description'),
        ]);
    }
}
