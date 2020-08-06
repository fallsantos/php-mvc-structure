<?php
/**
 * User: Fall
 * Date: 20/07/2018
 * Time: 18:34
 */

echo $p['title'] . '<hr/>';

$user = new \App\model\User();
 

// Create ok
/*$json = '{ "email": "pla@hotmail.com", "password": "123456" }';
$obj = json_decode($json);
echo $user->create($obj);*/

// Read ok
/*$list = json_decode($user->read());
foreach ($list->data as $user){
    echo $user->id . " - " . $user->email;
    echo '<br/>';
}*/

// Show ok
//print_r(json_decode($user->show(1)));

// Update ok
/*$obj = (object) ["email" => "oxente2@hotmail.com"];
var_dump($user->update(10, $obj));*/
 
// Delete ok
//print_r(json_decode($user->delete(6)));