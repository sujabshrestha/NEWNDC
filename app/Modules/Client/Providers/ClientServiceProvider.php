<?php

namespace Client\Providers;

use Client\Repositories\Client\ClientInterface;
use Client\Repositories\Client\ClientRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ClientInterface::class, ClientRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName="Client";
        config([
            'clientRoute' => File::getRequire(loadConfig('route.php', $moduleName)),
            // 'companyImage' => File::getRequire(loadConfig('imageResize.php', $moduleName)),
        ]);
        $this->loadRoutesFrom(loadRoutes('admin.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('api.php', $moduleName));
        $this->loadMigrationsFrom(loadMigrations($moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);

    }
}
