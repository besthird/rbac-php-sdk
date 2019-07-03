<<<<<<< HEAD
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

        $res = $client->user->save(0, 'admin2', 'besthird', 'besthird', [1, 3], '15904435046', 1);

        var_dump($res);

    }
    public function testUserFind()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->user->find(1);

        var_dump($res);

    }
    public function testUserStatus()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->user->status(1);

        var_dump($res);

    }
    public function testUserDelete()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->user->delete(2);

        var_dump($res);

    }
    public function testUserIndex()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->user->index();

        var_dump($res);

    }



}
