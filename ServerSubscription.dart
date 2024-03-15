/*
|--------------------------------------------------------------------------
| OOP Practice
|--------------------------------------------------------------------------
|
| Problem Statement : You are developing a simplified server subscription for
| your customer.
| 
| Basic Plan : User is only allowed to subscribe only dedicated IP server.
| Pro Plan : User is allowed to subscribe multiple dedicated IP server.
|

| Below are simplified version of what user can do in Server Management Panel.
| Please write underlying Class and Functions necessary to make the Code Snippet below works.
|
| * Bonus Point for Proper File/Folder Architecture
| * Bonus Point for using abstract/interface for Plan's Class

 */

/**
 * OOP Server Management Panel Simplified Version.
 *
 * Please Execute Dart Statement's Below using your own Implementation.
 * You may do anything to let the code below work without changing anything.
 * 
 * 
 */

void main() {
  User user = new User();
  user.name = 'Haziq Zahari';

  Server server1 = new Server();
  server1.name = 'Server 1';
  server1.ipAddress = '192.168.0.1';

  Server server2 = new Server();
  server2.name = 'Server 2';
  server2.ipAddress = '192.168.0.2';

  /*
 * Flow 1 - Basic Plan
 */

  print( "Flow #1 Basic Plan Subscription !\n\n");
 
  user.subscribe(new BasicPlan());
 
  user.connectServer(server1);
  user.connectServer(server2); // fail

  /*
 * Flow 2 - Pro Plan
 */

  print( "Flow #2 Pro Plan Subscription !\n\n");
 
  user.subscribe(new ProPlan());
 
  user.connectServer(server1);
  user.connectServer(server2); // success

  /*
 * Flow 3 - Unsubscribe
 */

  print( "Flow #3 Unsubscribe Plan Subscription !\n\n");
 
 
  user.unsubscribe();
  user.connectServer(server2); // fail

   /*
  |
  | Please submit to your github by 12pm
  |
  */
}
