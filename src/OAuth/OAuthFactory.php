<?php
/**
 * Created by PhpStorm.
 * User: vamoose
 * Date: 2016/11/28
 * Time: 1:35 PM
 */

namespace EONConsulting\PHPSaasWrapper\src\OAuth;


use EONConsulting\PHPSaasWrapper\src\Factories\AdapterFactory;
use EONConsulting\PHPSaasWrapper\src\Factories\Factory;

class OAuthFactory implements Factory {

    protected $adapter;
    /**
     * TextFactory constructor.
     * @param AdapterFactory $adapter
     */
    public function __construct(AdapterFactory $adapter) {
        $this->adapter = $adapter;
    }
    /**
     * Return a new Text object with the correct adapter
     * @param $config
     * @return Text
     */
    public function make($config) {
        return new Service($this->adapter->make($config));
    }

}