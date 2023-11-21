<?php

namespace App\Events;

use App\Models\Author;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AuthorSaved
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $author;

    public function __construct(Author $author)
    {
        $this->author = $author;
    }
}
