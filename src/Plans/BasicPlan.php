<?php

namespace App\Plans;

use App\Server;
use App\Interfaces\PlanInterface;

class BasicPlan implements PlanInterface
{
    private $connectedServer = false; // Track if the user is already connected to a server

    public function canConnectServer(Server $server): bool
    {
        if ($this->connectedServer) {
            return false;
        }

        $this->connectedServer = true;
        return true;
    }

    public function canConnectMultipleServers(): bool
    {
        return true;
    }
}
