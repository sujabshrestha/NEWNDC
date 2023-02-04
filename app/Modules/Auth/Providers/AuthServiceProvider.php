<?php

namespace Auth\Providers;

use Auth\Repositories\AuthInterface;
use Auth\Repositories\AuthRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
        $this->app->bind(AuthInterface::class,AuthRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName="Auth";
        config([
            'authroute' => File::getRequire(loadConfig('route.php', $moduleName)),
        ]);
        $this->loadRoutesFrom(loadRoutes('admin.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('engineer.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('web.php', $moduleName));
        $this->loadMigrationsFrom(loadMigrations($moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);

    }
}
