<?php

declare(strict_types=1);

namespace App\Modules\Bookings\Infrastructure\Providers;

use App\Modules\Bookings\Infrastructure\Interfaces\BookingRepositoryInterface;
use App\Modules\Bookings\Infrastructure\Observers\BookingObserver;
use App\Modules\Bookings\Infrastructure\Persistence\Models\Booking;
use App\Modules\Bookings\Infrastructure\Persistence\Repositories\BookingRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class BookingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            BookingRepositoryInterface::class,
            BookingRepository::class
        );
    }

    public function boot(): void
    {
        Booking::observe(BookingObserver::class);

        $routesPath = dirname(__DIR__, 1) . '/routes/';
        $migrationsDir = dirname(__DIR__, 1) . '/database/migrations/';
        $langPath = dirname(__DIR__, 1) . '/Lang/';

        if (File::isDirectory($routesPath)) {
            $routeFiles = File::files($routesPath);

            foreach ($routeFiles as $file) {
                if ($file->getExtension() === 'php') {
                    require $file->getPathname();
                }
            }
        }
        $this->loadMigrationsFrom($migrationsDir);
        $this->loadTranslationsFrom($langPath, 'booking');
        $this->loadTranslationsFrom($langPath, 'create_booking');
        $this->mergeConfigFrom(dirname(__DIR__, 1) . '/config/booking.php', 'booking');
    }
}