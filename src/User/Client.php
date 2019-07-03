<?php

declare(strict_types=1);
/**
 * This file is part of besthird.
 *
 * @contact  l@hyperf.io
 */

namespace Besthird\RbacSdk\User;

use Besthird\RbacSdk\Kernel\Client as KernelClient;

class Client extends KernelClient
{
    public function save($id, $key, $password, $name, $role_id = [], $mobile, $status)
    {
        // TODO: Added a user.
        $response = $this->client->post('/user/save', [
            'json' => [
                'id' => $id,
                'key' => $key,
                'name' => $name,
                'password' => $password,
                'role_id' => $role_id,
                'mobile' => $mobile,
                'status' => $status,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
    public function find($id)
    {
        $response = $this->client->get('/user/find?id='.$id);

        return $this->format($response->getBody()->getContents());
    }
    public function status($id)
    {
        $response = $this->client->post('/user/status', [
            'json' => [
                'id' => $id,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
    public function delete($id)
    {
        $response = $this->client->post('/user/delete', [
            'json' => [
                'id' => $id,
            ],
        ]);
        return $this->format($response->getBody()->getContents());
    }
    public function index($id, $name, $mobile, $status, $limit, $offset)
    {
        $response = $this->client->get('/user', [
            'json' => [
                'id' => $id,
                'mobile' => $mobile,
                'name' => $name,
                'status' => $status,
                'limit' => $limit,
                'offset' => $offset,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
}
