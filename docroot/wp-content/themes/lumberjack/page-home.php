<?php

/*
 * Template Name: Home Template
 */

namespace App;

use App\PostTypes\Product;
use Rareloop\Lumberjack\Page;
use Timber\Timber;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;

class PageHomeController
{
    public function handle()
    {
        $context = Timber::get_context();
        $page = new Page();

        $context['post'] = $page;
        $context['title'] = $page->title;
        $context['content'] = $page->content;

        return new TimberResponse('templates/home.twig', $context);
    }
}
