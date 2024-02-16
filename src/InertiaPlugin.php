<?php
declare(strict_types=1);

namespace Inertia;

use ViteHelper\View\Helper\ViteScriptsHelper;
use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;
use Cake\Http\MiddlewareQueue;
use Inertia\Middleware\InertiaMiddleware;

/**
 * Plugin for Inertia
 */
class InertiaPlugin extends BasePlugin
{
    /**
     * Add plugin specific middleware.
     *
     * @param \Cake\Http\MiddlewareQueue $middleware The middleware queue to update.
     * @return \Cake\Http\MiddlewareQueue
     */
    public function middleware(MiddlewareQueue $middleware): MiddlewareQueue
    {
        // Add middleware here.
        $middleware->add(new InertiaMiddleware());

        return $middleware;
    }

    /**
     * @inheritDoc
     */
    public function bootstrap(PluginApplicationInterface $app): void
    {
        parent::bootstrap($app);

        $app->addPlugin(ViteScriptsHelper::class);
    }
}
