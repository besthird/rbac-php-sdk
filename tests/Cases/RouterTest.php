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
        $res = $client->router->save(1, 1, 1, 1, '默认路由', '/', 'GET');

        $this->assertSame(0, $res[0]);
    }

    public function testRouterFind()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->router->find(1);

        $this->assertSame(0, $res[0]);
    }

    public function testRouterDelete()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->router->delete(2);

        $this->assertSame(0, $res[0]);
    }

    public function testRouterIndex()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->router->index();

        $this->assertSame(0, $res[0]);
    }
}
