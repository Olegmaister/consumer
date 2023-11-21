<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Blog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog published($columnName = 'published')
 */
class Blog extends Model
{
    use HasFactory;


    /**
     * Диапазон запроса, включающий только популярных пользователей.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('published', '>', 0);
    }

    protected $fillable = [
        'author_id',
        'direction_id'
    ];
}
