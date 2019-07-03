<?php

declare(strict_types=1);
/**
 * This file is part of besthird.
 *
 * @contact  l@hyperf.io
 */

namespace Besthird\RbacSdk\Kernel;

use GuzzleHttp;

abstract class Client
{
    const OK = 0;

    /**
     * @var GuzzleHttp\Client
     */
    protected $client;

    public function __construct($config)
    {
        $this->client = new GuzzleHttp\Client($config);
    }

    protected function format(string $body): array
    {
        $data = json_decode($body, true);

        if ($data['code'] === self::OK) {
            return [$data['code'], $data['data']];
        }

        return [$data['code'], $data['message']];
    }
}
