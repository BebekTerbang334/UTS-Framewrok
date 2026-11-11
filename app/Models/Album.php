<?php

namespace App\Models;

use Database\Factories\AlbumFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['artist', 'track', 'year', 'image_path', 'theme', 'position'])]
class Album extends Model
{
    /** @use HasFactory<AlbumFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'year' => 'integer',
            'position' => 'integer',
        ];
    }

    /**
     * Order albums the way they appear on the landing page.
     *
     * @param  Builder<Album>  $query
     * @return Builder<Album>
     */
    #[Scope]
    protected function ordered(Builder $query): Builder
    {
        return $query->orderBy('position')->orderBy('id');
    }
}
