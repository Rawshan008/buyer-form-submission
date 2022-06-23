<?php

require_once("view/header.php");

if  (isset($_GET['action']) == 'create_buyer') {
  if(isset($_COOKIE['buyer_submit']) != 120227) {
    require_once("view/bayer/insert.php");
  } else {
    require_once("view/bayer/index.php");
  }
} else {
  require_once("view/bayer/index.php");
}


require_once("view/footer.php");