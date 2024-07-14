<?php

namespace App\Providers;

use App\Models\Student;
use App\Models\Subject;
use App\Policies\AdminPolicy;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            LoginResponse::class,
            \App\Http\Responses\LoginResponse::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        Gate::policy(Student::class, AdminPolicy::class);
        Gate::policy(Subject::class, AdminPolicy::class);
    }
}
