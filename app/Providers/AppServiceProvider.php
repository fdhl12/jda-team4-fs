<?php

namespace App\Providers;

use App\Models\Pengaturan;
use Laravel\Sanctum\Sanctum;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\PersonalAccessToken;

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
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);

        /* mendapatkan konfigurasi dari table pengaturan */
        foreach (Pengaturan::all(['type', 'data']) as $read)
        {
            $pengaturan[$read['type']] = $read['data'];
        }
        view()->share('pengaturan', $pengaturan);
    }
}
