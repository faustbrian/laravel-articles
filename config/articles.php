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
    |--------------------------------------------------------------------------
    | Eloquent Models
    |--------------------------------------------------------------------------
    */

    'models' => [

        /*
        |--------------------------------------------------------------------------
        | Article Model
        |--------------------------------------------------------------------------
        */

        'article' => \BrianFaust\Articles\Models\Article::class,

        /*
        |--------------------------------------------------------------------------
        | Author Model
        |--------------------------------------------------------------------------
        */

        'author' => \App\User::class,

    ],

];
