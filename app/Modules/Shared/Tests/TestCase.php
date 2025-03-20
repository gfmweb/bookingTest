<?php

declare(strict_types=1);

namespace App\Modules\Shared\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;
}