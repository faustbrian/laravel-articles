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

return [

    /*
     * The class name of the article model that holds all articles.
     *
     * The model must be or extend `BrianFaust\Articles\Article`.
     */

    'article_model' => \BrianFaust\Articles\Article::class,

    /*
     * The class name of the author model that owns all articles.
     */

    'author_model' => \App\User::class,

];
