<?php

session_start();

require_once('connection.php');

if(!empty($_POST['name']) && !empty($_POST['quote'])) {
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['quote'] = $_POST['quote'];
  $query = "INSERT INTO quotes(name,quote,created_at,updated_at) VALUES ('".$_POST['name']."','".$_POST['quote']."',NOW(),NOW())";

        if(run_mysql_query($query))
        {
            $_SESSION['message'] = "New quote has been added correctly! Thank you for your wisdom!";
            $_SESSION['show'] = "correct";
        }
        else
        {
            $_SESSION['message'] = "Failed to add quote";
        }

} else {
    $_SESSION['message'] = 'Please fill in both name and quote :)';
}

header('Location:index.php');

 ?>
