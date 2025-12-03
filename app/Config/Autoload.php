<?php

namespace Config;

/**
 * --------------------------------------------------------------------
 * AUTO-LOADER CONFIGURATION
 * --------------------------------------------------------------------
 *
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 */
class Autoload
{
    /**
     * -------------------------------------------------------------------
     * Namespaces
     * -------------------------------------------------------------------
     * This maps the locations of any namespaces in your application
     * to their location on the file system. These are used by the
     * Autoloader to locate classes the first time they are called.
     *
     * @var array<string, array<int, string>|string>
     */
    public array $psr4 = [
        APP_NAMESPACE => APPPATH,                // For custom app namespace
        'Config'      => APPPATH . 'Config',
    ];

    /**
     * -------------------------------------------------------------------
     * Class Map
     * -------------------------------------------------------------------
     * The class map provides a map of class names and their exact
     * location on the drive. Classes loaded in this manner will have
     * slightly faster load times because the class will be loaded
     * directly.
     *
     * @var array<string, string>
     */
    public array $classmap = [];

    /**
     * -------------------------------------------------------------------
     * Files
     * -------------------------------------------------------------------
     * The $files array holds the names of files that should be loaded
     * on every request. These files can be helpers, functions, or
     * anything else that you might want to include globally.
     *
     * @var list<string>
     */
    public array $files = [];

    /**
     * -------------------------------------------------------------------
     * Helper Files
     * -------------------------------------------------------------------
     *
     * These are the files that contain helper functions. Helper files
     * are not automatically loaded, but can be loaded with the
     * helper() function.
     *
     * @var list<string>
     */
    public array $helpers = [];
}
