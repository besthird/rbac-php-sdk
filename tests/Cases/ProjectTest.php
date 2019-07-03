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

        $res = $client->project->save(2, "test", "测试项目", "啦啦啦啦啦");

        var_dump($res);

    }
    public function testProjectInfo()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->project->info(1);

        var_dump($res);

    }

    public function testProjectDelete()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->project->delete(2);

        var_dump($res);

    }
    public function testProjectIndex()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->project->index();

        var_dump($res);

    }
    public function testProjectRouterList()
    {
        $client = new Client($this->defaultConfig);

        $res = $client->project->routerList();

        var_dump($res);

    }


}
