<?php

namespace App\Plans;

use App\Interfaces\PlanInterface;
use App\Server;

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

