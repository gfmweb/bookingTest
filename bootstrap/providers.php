<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Modules\Users\Infrastructure\Providers\UsersServiceProvider::class,
    App\Modules\Resources\Infrastructure\Providers\ResourcesServiceProvider::class,
    App\Modules\Bookings\Infrastructure\Providers\BookingServiceProvider::class
];
