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

        $res = $client->auth->check('admin', 1, 'GET', '/');

        $this->assertSame(0, $res[0]);
    }

    public function testAuthRouters()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->auth->routers(1);

        $this->assertSame(0, $res[0]);
    }
}
