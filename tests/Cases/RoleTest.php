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
class RoleTest extends AbstractTestCase
{
    public function testRoleSave()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->role->save(0, 'test', '测试角色', 1, [1]);

        $this->assertSame(0, $res[0]);
    }

    public function testRoleInfo()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->role->info(1);

        $this->assertSame(0, $res[0]);
    }

    public function testRoleDelete()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->role->delete(2);

        $this->assertSame(0, $res[0]);
    }

    public function testRoleIndex()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->role->index();

        $this->assertSame(0, $res[0]);
    }

    public function testRoleRouterList()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->role->routerList(1);

        $this->assertSame(0, $res[0]);
    }

    public function testRoleStatus()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->role->status(1);

        $this->assertSame(0, $res[0]);
    }
}
