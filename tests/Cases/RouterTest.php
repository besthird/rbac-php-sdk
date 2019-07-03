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
class RouterTest extends AbstractTestCase
{
    public function testRouterSave()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->router->save(0, 1, 1, 1, '测试', '/name', 'POST');

        var_dump($res);
    }

    public function testRouterFind()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->router->find(1);

        var_dump($res);
    }

    public function testRouterDelete()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->router->delete(2);

        var_dump($res);
    }

    public function testRouterIndex()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->router->index();

        var_dump($res);
    }
}
