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

        $res = $client->group->save(0, "1", "测试");

        var_dump($res);

    }
    public function testGroupFind()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->group->find(1);

        var_dump($res);

    }

    public function testGroupDelete()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->group->delete(2);

        var_dump($res);

    }
    public function testGroupIndex()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->group->index();

        var_dump($res);

    }



}
