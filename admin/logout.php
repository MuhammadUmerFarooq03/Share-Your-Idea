<?php
session_start();
include("constants.php");
include("functions.php");
// print_r($_SESSION);
/* session_unset(); 
session_destroy();  */
unset($_SESSION['user_username']);
unset($_SESSION['user_id']);

// print_r($_SESSION);
// Go back to index page.
session_destroy();
redirect("../log.php?logout=true");
//die('logged out');



 ?>
