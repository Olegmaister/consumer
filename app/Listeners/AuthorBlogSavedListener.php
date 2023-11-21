<?php
namespace App\Listeners;

use App\Events\AuthorSaved;
use Illuminate\Support\Facades\Log;

class AuthorBlogSavedListener
{
    public function handle(AuthorSaved $event)
    {
        Log::info('AuthorBlogSavedListener: ' . $event->author->id);
    }
}

