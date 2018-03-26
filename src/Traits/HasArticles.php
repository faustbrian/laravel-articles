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

namespace BrianFaust\Articles\Traits;

use BrianFaust\Articles\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasArticles
{
    public function articles(): HasMany
    {
        return $this->hasMany(config('articles.models.article'));
    }
}
