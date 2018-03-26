<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Articles.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Articles;

use Illuminate\Support\ServiceProvider;

class ArticlesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/create_articles_table.php' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_articles_table.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../config/articles.php' => config_path('articles.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/articles.php', 'articles');
    }
}
