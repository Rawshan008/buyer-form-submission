<?php 
require_once('application/Validation.php');
/**
 * Data Collect
 */
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $validation = new Validation();
  $validator = $validation->validator($_POST);

  if($validator) {
    print_r($validator);
    exit();
  } else {
    echo "Success";
  }
  // $name = $_POST['name'];
  // $email = $_POST['email'];
  // $address = $_POST['address'];

  // $users = $user->dataInsert($name, $email,  $address, $ipaddress);

 }