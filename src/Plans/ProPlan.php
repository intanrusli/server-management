<?php

namespace App\Plans;

use App\Entities\Server;
use App\Interfaces\PlanInterface;

class ProPlan implements PlanInterface
{
    public function canConnectMultipleServers(): bool
    {
        return true;
    }

    public function canConnectServer(Server $server): bool
    {
        return true;
    }

}

