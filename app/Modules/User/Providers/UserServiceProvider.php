<?php

namespace User\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use User\Repositories\User\UserInterface;
use User\Repositories\User\UserRepository;
use User\Repositories\Package\PackageInterface;
use User\Repositories\Package\PackageRepository;
use User\Repositories\Role\RoleInterface;
use User\Repositories\Role\RoleRepository;
use User\Repositories\Permission\PermissionInterface;
use User\Repositories\Permission\PermissionRepository;
class UserServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(PackageInterface::class, PackageRepository::class);
        $this->app->bind(RoleInterface::class, RoleRepository::class);
        $this->app->bind(PermissionInterface::class, PermissionRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName="User";
        config([
            'userRoute' => File::getRequire(loadConfig('route.php', $moduleName)),
            // 'companyImage' => File::getRequire(loadConfig('imageResize.php', $moduleName)),
        ]);
        $this->loadRoutesFrom(loadRoutes('admin.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('api.php', $moduleName));
        $this->loadMigrationsFrom(loadMigrations($moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);

    }
}
