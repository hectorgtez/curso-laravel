<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

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
        VerifyEmail::toMailUsing(function($notifiable, $url) {
            return (new MailMessage)
            ->subject("Confirmar correo electrónico")
            ->line("¡Tu cuenta está casi lista!")
            ->line("Haga clic en el botón a continuación para verificar su correo.")
            ->action("Confirmar correo", $url)
            ->line("Si no creaste una cuenta, no es necesario realizar ninguna otra acción.");
        });
    }
}
