<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $appNamespace = 'App\Http\Controllers';
    protected $apiNamespace = 'Api';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapAuthApiRoutes();

        $this->mapHomeApiRoutes();

        $this->mapAclApiRoutes();

        $this->mapSettingsApiRoutes();

        // This should be loaded in the end.
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->appNamespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->apiNamespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapAuthApiRoutes()
    {
        Route::prefix('api')
            ->middleware('auth:api')
            ->namespace($this->apiNamespace . '\Auth')
            ->group(base_path('routes/auth.php'));
    }

    protected function mapHomeApiRoutes()
    {
        Route::prefix('api')
            ->middleware('auth:api')
            ->namespace($this->apiNamespace . '\Home')
            ->group(base_path('routes/home.php'));
    }

    protected function mapAclApiRoutes()
    {
        Route::prefix('api')
            ->middleware('auth:api')
            ->namespace($this->apiNamespace . '\Auth')
            ->group(base_path('routes/acl.php'));
    }

    protected function mapSettingsApiRoutes()
    {
        Route::prefix('api')
            ->middleware('auth:api')
            ->namespace($this->apiNamespace . '\Settings')
            ->group(base_path('routes/settings.php'));
    }

}











