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
class GroupTest extends AbstractTestCase
{
    public function testGroupSave()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->group->save(1, '1', '默认小组');

        $this->assertSame(0, $res[0]);
    }

    public function testGroupFind()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->group->find(1);

        $this->assertSame(0, $res[0]);
    }

    public function testGroupDelete()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->group->delete(2);

        $this->assertSame(0, $res[0]);
    }

    public function testGroupIndex()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->group->index();

        $this->assertSame(0, $res[0]);
    }
}
