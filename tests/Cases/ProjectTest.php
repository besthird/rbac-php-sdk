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
class ProjectTest extends AbstractTestCase
{
    public function testProjectSave()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->project->save(1, 'default', '默认项目', '默认项目');

        $this->assertSame(0, $res[0]);
    }

    public function testProjectInfo()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->project->info(1);

        $this->assertSame(0, $res[0]);
    }

    public function testProjectDelete()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->project->delete(2);

        $this->assertSame(0, $res[0]);
    }

    public function testProjectIndex()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->project->index();

        $this->assertSame(0, $res[0]);
    }

    public function testProjectRouterList()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->project->routerList();

        $this->assertSame(0, $res[0]);
    }
}
