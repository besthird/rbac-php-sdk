<?php

declare(strict_types=1);
/**
 * This file is part of besthird.
 *
 * @contact  l@hyperf.io
 */

namespace Besthird\RbacSdk\Group;

use Besthird\RbacSdk\Kernel\Client as KernelClient;

class Client extends KernelClient
{
    public function save($id, $projectId, $name)
    {
        // TODO: Added a user.
        $response = $this->client->post('/group/save', [
            'json' => [
                'id' => $id,
                'project_id' => $projectId,
                'name' => $name,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
    public function find($id)
    {

        $response = $this->client->get('/group/find?id='.$id);

        return $this->format($response->getBody()->getContents());
    }

    public function delete($id)
    {
        $response = $this->client->post('/group/delete', [
            'json' => [
                'id' => $id,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
    public function index()
    {
        $response = $this->client->get('/group');
        return $this->format($response->getBody()->getContents());
    }
}
