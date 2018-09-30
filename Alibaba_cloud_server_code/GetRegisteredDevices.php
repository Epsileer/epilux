<?php 
 
 require_once 'DbOperation.php';
 
 $db = new DbOperation(); 
 
 $devices = $db->getAllUser();
 
 $response = array(); 
 
 $response['error'] = false; 
 $response['devices'] = array(); 
 
 while($device = $devices->fetch_assoc()){
 $temp = array();
 $temp['username']=$device['username'];
 $temp['device']=$device['device'];
 array_push($response['devices'],$temp);
 }
 
 echo json_encode($response);

 ?>