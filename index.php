<?php

require_once("view/header.php");

if  (isset($_GET['action']) == 'create_buyer') {
  require_once("view/bayer/insert.php");
} else {
  require_once("view/bayer/index.php");
}


require_once("view/footer.php");