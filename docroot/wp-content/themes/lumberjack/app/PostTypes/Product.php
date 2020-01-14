<?php

namespace App\PostTypes;

use Rareloop\Lumberjack\Post;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

class Product extends Post
{

    /**
     * Return the key used to register the post type with WordPress
     * First parameter of the `register_post_type` function:
     * https://codex.wordpress.org/Function_Reference/register_post_type
     *
     * @return string
     */
    public static function getPostType()
    {
        return 'products';
    }

    /**
     * Return the config to use to register the post type with WordPress
     * Second parameter of the `register_post_type` function:
     * https://codex.wordpress.org/Function_Reference/register_post_type
     *
     * @return array|null
     */
    protected static function getPostTypeConfig()
    {
        return [
            'labels' => [
                'name' => __('Products'),
                'singular_name' => __('Product'),
                'add_new_item' => __('Add New Product'),
            ],
            'public' => true,
            'publicly_queryable' => true,
        ];
    }

    public static function registerCarbonFields()
    {
        Container::make('post_meta', 'Settings')->where('post_type', '=', self::getPostType())->add_fields([
            Field::make('textarea', 'crb_description', 'Description'),
        ]);
    }

    public function getCarbonField($field_name)
    {
        $crb_field_name = '_crb_' . $field_name;
        return parent::get_field($crb_field_name);
    }

}
