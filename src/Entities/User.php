<?php

namespace App\Entities;

use App\Interfaces\PlanInterface;
use App\Plans\BasicPlan;
use App\Plans\ProPlan;

class User
{
    public $name;
    private $subscriptionPlan;
    private $connectedServers = [];

    public function subscribe(PlanInterface $plan)
    {
        $this->subscriptionPlan = $plan;
    }

    public function unsubscribe()
    {
        $this->subscriptionPlan = null;
        $this->connectedServers = [];
    }

    public function connectServer(Server $server)
    {
        if ($this->subscriptionPlan === null) {
            echo "{$this->name} cannot connect to {$server->name}. Subscription plan does not allow.\n";
            return;
        }

        if ($this->subscriptionPlan instanceof BasicPlan) {
            if ($this->subscriptionPlan->canConnectServer($server)) {
                $this->connectedServers[] = $server;
                echo "{$this->name} connected to {$server->name} (IP: {$server->ipAddress}) successfully.\n";
            } else {
                echo "{$this->name} cannot connect to {$server->name}. Subscription plan does not allow.\n";
            }
        } elseif ($this->subscriptionPlan instanceof ProPlan) {
            if ($this->subscriptionPlan->canConnectServer($server)) {
                $this->connectedServers[] = $server;
                echo "{$this->name} connected to {$server->name} (IP: {$server->ipAddress}) successfully.\n";
            } else {
                echo "{$this->name} cannot connect to {$server->name}. Subscription plan does not allow.\n";
            }
        } else {
            echo "{$this->name} has an invalid subscription plan.\n";
        }
    }
}
