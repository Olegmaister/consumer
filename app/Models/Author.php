<?php

namespace App\Models;

use App\Events\AuthorSaved;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;


    /**
     * Карта событий для модели.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saved' => AuthorSaved::class
    ];

    protected $fillable = [
        'published',
        'position'
    ];

}
