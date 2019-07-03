<?php

declare(strict_types=1);
/**
 * This file is part of besthird.
 *
 * @contact  l@hyperf.io
 */

namespace Test\Cases;

use Besthird\RbacSdk\Client;

/**
 * @internal
 * @coversNothing
 */
class AuthTest extends AbstractTestCase
{
    public function testAuthCheck()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->auth->check(2, 2, 'GET', '/');

        var_dump($res);
    }

    public function testAuthRouters()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->auth->routers(1);

        var_dump($res);
    }
}
