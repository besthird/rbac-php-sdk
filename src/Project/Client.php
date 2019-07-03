<?php

declare(strict_types=1);
/**
 * This file is part of besthird.
 *
 * @contact  l@hyperf.io
 */

namespace Besthird\RbacSdk\Project;

use Besthird\RbacSdk\Kernel\Client as KernelClient;

class Client extends KernelClient
{
    public function save($id, $key, $name, $comment)
    {
        // TODO: Added a user.
        $response = $this->client->post('/project/save', [
            'json' => [
                'id' => $id,
                'key' => $key,
                'name' => $name,
                'comment' => $comment,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
    public function info($id)
    {

        $response = $this->client->get('/project/info?id='.$id);

        return $this->format($response->getBody()->getContents());
    }

    public function delete($id)
    {
        $response = $this->client->post('/project/delete', [
            'json' => [
                'project_id' => $id,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
    public function index()
    {
        $response = $this->client->get('/project');
        return $this->format($response->getBody()->getContents());
    }

    public function routerList()
    {
        $response = $this->client->get('/project/router/list');
        return $this->format($response->getBody()->getContents());
    }
}
