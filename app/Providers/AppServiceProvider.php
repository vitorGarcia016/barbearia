<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
        return (new MailMessage)
            ->subject("Verifique o endereço de e-mail")
            ->greeting("Olá!")
            ->line("Clique no botão abaixo para verificar seu endereço de e-mail.")
            ->action("Verifique o endereço de e-mail", $url)
            ->salutation("Atensiosamente, Barbearia");
    });
    }
}
