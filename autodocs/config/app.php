<?php

declare(strict_types=1);

return [
    /****************************************************************************
     * Application Settings
     * --------------------------------------------------------------------------
     *
     * These are the core settings for your application.
     *****************************************************************************/

    'app_name' => envconfig(
        'MINICLI_APP_NAME',
        '
             _            _
            | |          | |
  __ _ _   _| |_ ___   __| | ___   ___ ___
 / _` | | | | __/ _ \ / _` |/ _ \ / __/ __|
| (_| | |_| | || (_) | (_| | (_) | (__\__ \
 \__,_|\__,_|\__\___/ \__,_|\___/ \___|___/
             maintenance tools              '
    ),

    'app_path' => [
        __DIR__.'/../app/Command',
        '@minicli/command-help'
    ],

    'theme' => '',

    'debug' => true,

    ############################################################################
    # Librarian Configuration
    ############################################################################
    'data_path' => __DIR__ . '/../../content',
    'cache_path' => sys_get_temp_dir() . '/minicli-cache',
];
