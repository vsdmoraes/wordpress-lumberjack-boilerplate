<?php

namespace App\Providers;

use Carbon_Fields\Carbon_Fields;
use Rareloop\Lumberjack\Config;
use Rareloop\Lumberjack\Providers\ServiceProvider;

class CustomFieldsServiceProvider extends ServiceProvider
{
    public function boot(Config $config)
    {
        Carbon_Fields::boot();

        $postTypesToRegister = $config->get('customfields.register');

        foreach ($postTypesToRegister as $postType) {
            add_action('carbon_fields_register_fields', [$postType, 'register']);
        }
    }
}
