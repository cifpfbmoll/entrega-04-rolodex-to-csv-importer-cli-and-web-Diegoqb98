<?php

namespace Config;

use CodeIgniter\Modules\Modules as BaseModules;

/**
 * --------------------------------------------------------------------
 * Modules Configuration
 * --------------------------------------------------------------------
 *
 * This file defines the namespaces and locations of the modules
 * that are used by the application.
 */
class Modules extends BaseModules
{
    /**
     * --------------------------------------------------------------------------
     * Composer Packages locations
     * --------------------------------------------------------------------------
     *
     * This is an array of namespace => path mappings for Composer packages
     * that you want to be able to use PSR-4 style directory structures
     */
    public array $composerPackages = [];
}

