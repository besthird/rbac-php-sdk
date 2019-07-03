<?php

declare(strict_types=1);
/**
 * This file is part of besthird.
 *
 * @contact  l@hyperf.io
 */

namespace Besthird\RbacSdk\Router;

use Besthird\RbacSdk\Kernel\Client as KernelClient;

class Client extends KernelClient
{
    public function save($id, $projectId, $groupId, $type, $name, $route, $method)
    {
        // TODO: Added a user.
        $response = $this->client->post('/router/save', [
            'json' => [
                'id' => $id,
                'project_id' => $projectId,
                'group_id' => $groupId,
                'type' => $type,
                'name' => $name,
                'route' => $route,
                'method' => $method,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
    public function find($id)
    {

        $response = $this->client->get('/router/find?id='.$id);

        return $this->format($response->getBody()->getContents());
    }

    public function delete($id)
    {
        $response = $this->client->post('/router/delete', [
            'json' => [
                'id' => $id,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
    public function index()
    {
        $response = $this->client->get('/router/index');
        return $this->format($response->getBody()->getContents());
    }
}
