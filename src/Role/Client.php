<?php

declare(strict_types=1);
/**
 * This file is part of besthird.
 *
 * @contact  l@hyperf.io
 */

namespace Besthird\RbacSdk\Role;

use Besthird\RbacSdk\Kernel\Client as KernelClient;

class Client extends KernelClient
{
    public function save($id, $name, $comment, $status, $routerList)
    {
        // TODO: Added a user.
        $response = $this->client->post('/role/save', [
            'json' => [
                'id' => $id,
                'name' => $name,
                'comment' => $comment,
                'status' => $status,
                'router_list' => $routerList,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }

    public function info($id)
    {
        $response = $this->client->get('/role/info?id=' . $id);

        return $this->format($response->getBody()->getContents());
    }

    public function delete($id)
    {
        $response = $this->client->post('/role/delete', [
            'json' => [
                'id' => $id,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }

    public function index()
    {
        $response = $this->client->get('/role');
        return $this->format($response->getBody()->getContents());
    }

    public function status($id)
    {
        $response = $this->client->post('/role/status', [
            'json' => [
                'id' => $id,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }

    public function routerList($id)
    {
        $response = $this->client->get('/role/router/list?id=' . $id);
        return $this->format($response->getBody()->getContents());
    }
}
