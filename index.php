<?php

define('ROOT_DIR', __DIR__);

require_once(ROOT_DIR . "/view/header.php");

// if()

// if(isset($_COOKIE['buyer_submit']) != 120227) {
//   require_once("view/bayer/insert.php");
// } else {
  
// }

if  (isset($_GET['action']) == 'create_buyer') {
  if(isset($_COOKIE['buyer_submit']) != 120227) {
    require_once(ROOT_DIR . "/view/bayer/insert.php");
  } else {
    require_once(ROOT_DIR . "/view/bayer/index.php");
  }
} else {
  require_once(ROOT_DIR . "/view/bayer/index.php");
}


require_once(ROOT_DIR . "/view/footer.php");