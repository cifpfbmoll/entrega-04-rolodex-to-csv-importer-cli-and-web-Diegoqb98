<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use CodeIgniter\Boot;
use Config\Paths;

/*
 *---------------------------------------------------------------
 * SETUP OUR PATH CONSTANTS
 *---------------------------------------------------------------
 *
 * The path constants provide convenient access to the folders
 * throughout the application. We have to setup them up here
 * so they are available in the config files that are loaded.
 */

// Location of the framework bootstrap file.
require realpath(__DIR__ . '/../app/Config/Paths.php') ?: __DIR__ . '/../app/Config/Paths.php';

$paths = new Paths();

// Location of the framework bootstrap file.
require $paths->systemDirectory . '/Boot.php';

exit(Boot::bootWeb($paths));

