<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Entities\Server;
use App\Entities\User;
use App\Plans\BasicPlan;
use App\Plans\ProPlan;

print "\n\nOOP Practice !\n\n";

$user = new User();
$user->name = 'Justin Bieber';

$server_1 = new Server();
$server_1->name = 'Server 1';
$server_1->ipAddress = '192.168.0.1';

$server_2 = new Server();
$server_2->name = 'Server 2';
$server_2->ipAddress = '192.168.0.2';

print "Flow #1 Basic Plan Subscription !\n\n";

$user->subscribe(new BasicPlan());

$user->connectServer($server_1);
$user->connectServer($server_2); // fail

print "Flow #2 Upgrade Plan Subscription !\n\n";

$user->subscribe(new ProPlan());
$user->connectServer($server_2); // success

print "Flow #3 Unsubscribe Plan Subscription !\n\n";

$user->unsubscribe();
$user->connectServer($server_2); // fail
