<?php

namespace App\Providers;

use App\Repositories\Employees\EmployeeRepository;
use App\Repositories\Employees\EmployeeRepositoryEloquent;
use Illuminate\Support\ServiceProvider;
use Yajra\DataTables\Html\Builder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(EmployeeRepository::class, EmployeeRepositoryEloquent::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Builder::useVite();
    }
}
