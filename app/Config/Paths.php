<?php

namespace Config;

/**
 * Paths
 *
 * Provides a location-aware configuration of the
 * directories used by the application.
 */
class Paths
{
    /**
     * ---------------------------------------------------------------
     * SYSTEM DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "system" directory.
     * By default the system directory is located in your project root.
     */
    public string $systemDirectory = __DIR__ . '/../../vendor/codeigniter4/framework/system';

    /**
     * ---------------------------------------------------------------
     * APPLICATION DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * If you want this front controller to use a different "app"
     * folder than the default one you can set its name here. The folder
     * can also be renamed or relocated anywhere on your server.
     * For more info please see the user guide:
     * https://codeigniter.com/user_guide/general/managing_apps.html
     */
    public string $appDirectory = __DIR__ . '/..';

    /**
     * ---------------------------------------------------------------
     * WRITABLE DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "writable" directory.
     * By default the "writable" directory is located inside your
     * application directory.
     */
    public string $writableDirectory = __DIR__ . '/../../writable';

    /**
     * ---------------------------------------------------------------
     * TESTS DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "tests" directory.
     * By default the "tests" directory is located inside your
     * application directory.
     */
    public string $testsDirectory = __DIR__ . '/../../tests';

    /**
     * ---------------------------------------------------------------
     * VIEW DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of the directory that
     * contains the view files used by your application. By default
     * this is in "app/Views". This value is used by the core View
     * class when locating view files.
     */
    public string $viewDirectory = __DIR__ . '/../Views';
}
