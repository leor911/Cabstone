<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

// use Illuminate\Http\Request;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        
        VerifyEmail::toMailUsing(function (object $notifiable, string $url){
            $userData = Auth::user()->firstName;
            return(new MailMessage)
            ->subject('Verify User\'s Email')
            ->line('The user ' . $userData . 'is trying to verify as an role.')
            ->action('Accept', $url)
            ->action('Decline', $url);
        });
    }
}
