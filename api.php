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

    return $dataPost;
  }
  // $name = $_POST['name'];
  // $email = $_POST['email'];
  // $address = $_POST['address'];

  // $users = $user->dataInsert($name, $email,  $address, $ipaddress);

 }