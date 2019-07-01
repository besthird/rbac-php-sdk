<?php

declare(strict_types=1);
/**
 * This file is part of besthird.
 *
 * @contact  l@hyperf.io
 */

namespace Besthird\RbacSdk\Auth;

use Besthird\RbacSdk\Kernel\Client as KernelClient;

class Client extends KernelClient
{
    /**
     * @param int|string $id 管理员ID或者KEY
     * @param int|string $projectId
     * @param string $method
     * @param string $route
     */
    public function check($id, $projectId, $method, $route)
    {
        $response = $this->client->post('/auth/check', [
            'json' => [
                'user_id' => $id,
                'project_id' => $projectId,
                'method' => $method,
                'route' => $route,
            ],
        ]);

        return $this->format($response->getBody()->getContents());
    }
}
