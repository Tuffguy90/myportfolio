<?php
include('../config.php');
extract($_POST);
$images = [];
if(!empty($_FILES['files'])){

  // var_dump($_FILES['files']);

  for($i=0;$i<count($_FILES['files']['name']);$i++){
    $fileName = $_FILES['files']['name'][$i];
    $fileTmp = $_FILES['files']['tmp_name'][$i];
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $path = time().'_'.$i.'.'.$ext;
    move_uploaded_file($fileTmp, '../images/'.$path);
    array_push($images, $path);  
  }
}

$save = new Helper;

$save->save_portfolio($title, $description, $tech_specs, $duration, $images);









?>