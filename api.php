<?php 
require_once('application/Validation.php');
require_once('application/model/Buyer.php');
/**
 * Data Collect
 */
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $validation = new Validation();
  $validator = $validation->validator($_POST);

  $bauyer = new Buyer();


  if($validator) {
    print_r($validator);
    exit();
  } else {
    $dataPost = $bauyer->insert($_POST);
    setcookie('buyer_submit', 120227, time()+86400);

    return $dataPost;
  }

 }
