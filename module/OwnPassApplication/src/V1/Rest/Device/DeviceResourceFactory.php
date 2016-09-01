<?php
/**
 * This file is part of OwnPass. (https://github.com/ownpass/)
 *
 * @link https://github.com/ownpass/ownpass for the canonical source repository
 * @copyright Copyright (c) 2016-2017 OwnPass. (https://github.com/ownpass/)
 * @license https://raw.githubusercontent.com/ownpass/ownpass/master/LICENSE MIT
 */

namespace OwnPassApplication\V1\Rest\Device;

use Doctrine\ORM\EntityManager;

class DeviceResourceFactory
{
    public function __invoke($services)
    {
        $entityManager = $services->get(EntityManager::class);

        return new DeviceResource($entityManager);
    }
}