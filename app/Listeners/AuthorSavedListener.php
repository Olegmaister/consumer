<?php
namespace App\Listeners;

use App\Events\AuthorSaved;
use Illuminate\Support\Facades\Log;

class AuthorSavedListener
{
    public function handle(AuthorSaved $event)
    {
        Log::info('AuthorSavedListener: ' . $event->author->id);
    }
}
