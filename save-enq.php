<?php

extract($_POST);

if($name == '' || $email == ''){
  echo json_encode(['status' => 400]);
  exit;
}


include('config.php');

$n = new Helper;


echo $n->newContact($name, $email, $subject, $message);





?>