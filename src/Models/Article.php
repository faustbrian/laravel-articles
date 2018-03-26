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

namespace BrianFaust\Articles\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\ModelStatus\HasStatuses;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Tags\HasTags;

class Article extends Model
{
    use HasStatuses, HasSlug, HasTags;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(config('articles.models.author'));
    }

    public function canBePublished(): bool
    {
        return $this->publish_at && $this->publish_at->isPast();
    }

    public function isDraft(): bool
    {
        return $this->status === 'draft';
    }

    public function publish(): bool
    {
        $this->setStatus('published');

        $this->publish_at = null;

        return $this->save();
    }

    public static function findByName(string $name): self
    {
        return static::where('name', $name)->orWhere('slug', $name)->firstOrFail();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('title')->saveSlugsTo('slug');
    }
}
