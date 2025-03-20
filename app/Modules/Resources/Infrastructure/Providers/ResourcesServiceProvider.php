<?php

declare(strict_types=1);

namespace App\Modules\Resources\Infrastructure\Providers;

use App\Modules\Resources\Infrastructure\Interfaces\ResourceRepositoryInterface;
use App\Modules\Resources\Infrastructure\Interfaces\ResourceTypeRepositoryInterface;
use App\Modules\Resources\Infrastructure\Persistence\Repositories\ResourceRepository;
use App\Modules\Resources\Infrastructure\Persistence\Repositories\ResourceTypeRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class ResourcesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            ResourceRepositoryInterface::class,
            ResourceRepository::class
        );
        $this->app->bind(
            ResourceTypeRepositoryInterface::class,
            ResourceTypeRepository::class
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
        $this->loadTranslationsFrom($langPath, 'resources');
        $this->mergeConfigFrom(dirname(__DIR__, 1) . '/config/resources.php', 'resources');
    }
}