<?php

namespace EONConsulting\PHPSaasWrapper\src\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class PHPSaasWrapper
 * @package EONConsulting\PHPSaasWrapper\src\Facades
 */
class PHPSaasWrapper extends Facade {

    /**
     * Setup the Facade for the package
     * @return string
     */
    public static function getFacadeAccessor() {
        return 'phpsaaswrapper';
    }

}