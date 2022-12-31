<?php

namespace CMS\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;


class CMSServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
        // $this->app->bind(AuthInterface::class,AuthRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName="CMS";
        config([
            'cmsroute' => File::getRequire(loadConfig('route.php', $moduleName)),
        ]);
        $this->loadRoutesFrom(loadRoutes('admin.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('receiption.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('engineer.php', $moduleName));

        $this->loadMigrationsFrom(loadMigrations($moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);

    }
}
