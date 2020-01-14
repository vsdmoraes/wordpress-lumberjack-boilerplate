<?php

/**
 * Template Name: Single product
 * Template Post Type: products
 */

namespace App;

use App\Http\Controllers\Controller;
use App\PostTypes\Product;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;
use Timber\Timber;

class SingleProductsController extends Controller
{
    public function handle()
    {
        $context = Timber::get_context();

        /** @var Product $post */
        $post = new Product();

        $context['post'] = $post;
        $context['title'] = $post->title;
        $context['content'] = $post->content;
        $context['description'] = $post->getCarbonField('description');

        return new TimberResponse('templates/products.twig', $context);
    }
}
