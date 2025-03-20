<?php

declare(strict_types=1);

namespace App\Modules\Users\Infrastructure\Providers;

use App\Modules\Users\Infrastructure\Interfaces\UserRepositoryInterface;
use App\Modules\Users\Infrastructure\Persistence\Repositories\EloquentUserRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            EloquentUserRepository::class
        );
    }

    public function boot(): void
    {
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
        $this->loadTranslationsFrom($langPath, 'users');
        $this->mergeConfigFrom(dirname(__DIR__, 1). '/config/users.php','users');
    }
}