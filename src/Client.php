<?php

declare(strict_types=1);
/**
 * This file is part of besthird.
 *
 * @contact  l@hyperf.io
 */

namespace Besthird\RbacSdk;

use Hyperf\Utils\Str;

/**
 * @property Auth\Client $auth
 * @property Group\Client $group
 * @property Project\Client $project
 * @property Role\Client $role
 * @property Router\Client $router
 * @property User\Client $user
 */
class Client
{
    /**
     * @var Kernel\Client[]
     */
    protected $clients;

    protected $options = [
        'base_uri' => 'http://ryan-chen.com:9502',
    ];

    public function __construct($options = [])
    {
        $this->options = $options;
    }

    public function __get($name)
    {
        if (isset($this->clients[$name]) && $this->clients[$name] instanceof Kernel\Client) {
            return $this->clients[$name];
        }

        $class = 'Besthird\\RbacSdk\\' . Str::studly($name) . '\\Client';

        $this->clients[$name] = new $class($this->options);

        return $this->clients[$name];
    }

    public function setGuzzleOptions($options)
    {
        $this->guzzleOptions = $options;
    }
}
