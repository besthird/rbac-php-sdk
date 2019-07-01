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

        $res = $client->auth->check(1, 1, 'GET', '/');

        var_dump($res);
    }
}
