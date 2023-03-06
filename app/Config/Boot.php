<?php namespace Config;

use CodeIgniter\Config\BaseConfig;

class Boot extends BaseConfig
{
    /**
     * ----------------------------------------------------------------------
     * Auto-load helpers
     * ----------------------------------------------------------------------
     *
     * Any helper listed here will be automatically loaded by the system.
     * You can add your own helpers to this list or create your own autoload
     * file to include them.
     */
    public $helpers = [
        'form',
        'url',
        // Add any other helpers you want to autoload here
    ];
}
