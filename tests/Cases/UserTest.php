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
class UserTest extends AbstractTestCase
{
    public function testUserSave()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->user->save(1, 'admin', 'besthird', '超级管理员', [1, 3], '15963611521', 1);

        $this->assertSame(0, $res[0]);
    }

    public function testUserFind()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->user->find(1);

        $this->assertSame(0, $res[0]);
    }

    public function testUserStatus()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->user->status(1);

        $this->assertSame(0, $res[0]);
    }

    public function testUserDelete()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->user->delete(2);

        $this->assertSame(0, $res[0]);
    }

    public function testUserIndex()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->user->index();

        $this->assertSame(0, $res[0]);
    }
}
