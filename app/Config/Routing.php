<?php

namespace Config;

use CodeIgniter\Config\Routing as BaseRouting;

/**
 * Routing configuration
 */
class Routing extends BaseRouting
{
    /**
     * --------------------------------------------------------------------------
     * Default Namespace
     * --------------------------------------------------------------------------
     *
     * This is the default namespace that is used when no namespace is specified
     * for a controller.
     */
    public string $defaultNamespace = 'App\Controllers';

    /**
     * --------------------------------------------------------------------------
     * Default Controller
     * --------------------------------------------------------------------------
     *
     * This is the default controller that will be loaded if no other controller
     * is specified.
     */
    public string $defaultController = 'Home';

    /**
     * --------------------------------------------------------------------------
     * Default Method
     * --------------------------------------------------------------------------
     *
     * This is the default method that will be called if no other method is
     * specified.
     */
    public string $defaultMethod = 'index';

    /**
     * --------------------------------------------------------------------------
     * Translate URI dashes
     * --------------------------------------------------------------------------
     *
     * This option enables you to automatically convert dashes to underscores in
     * controller and method URI segments, thus saving you additional route
     * entries if you need to do that. '-' is not a valid class or method name
     * character, so it requires translation.
     */
    public bool $translateURIDashes = false;

    /**
     * --------------------------------------------------------------------------
     * Override HTTP Method
     * --------------------------------------------------------------------------
     *
     * This is a list of valid HTTP verbs.
     *
     * If set, this value will override the HTTP method used by the Request
     * class. This can be useful for APIs, or for testing the application.
     */
    // Inherited from BaseRouting: public string $override = 'X-HTTP-Method-Override';

    /**
     * --------------------------------------------------------------------------
     * Use Defined Routes Only?
     * --------------------------------------------------------------------------
     *
     * The Auto Routing (Improved) is enabled by default. If you set this value
     * to true, the system will only connect to defined routes, and will not
     * allow 'default' controller routing.
     *
     * This setting should be true for most applications. Set to false for
     * backwards compatibility with the prior Auto Routing.
     */
    public bool $autoRoute = false;

    /**
     * --------------------------------------------------------------------------
     * Use Auto Route (Improved)?
     * --------------------------------------------------------------------------
     *
     * The Auto Routing (Improved) is experimental. If you want to use it,
     * set this value to true, and set `$autoRoute` to false.
     */
    public bool $autoRouteImproved = false;

    /**
     * --------------------------------------------------------------------------
     * Priority of matched routes
     * --------------------------------------------------------------------------
     *
     * If you have defined multiple routes for the same segment, you can set
     * the priority here to control which route will be matched first.
     */
    public bool $prioritize = false;

    /**
     * --------------------------------------------------------------------------
     * Module routes files
     * --------------------------------------------------------------------------
     *
     * This is an array of modules route file paths
     */
    public array $moduleRoutes = [];
}
