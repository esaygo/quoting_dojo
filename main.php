<?php
session_start();
require_once('connection.php');

$query = "SELECT * FROM quotes ORDER BY quote DESC";
$show_quotes = fetch_all($query);

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QuotingDojo</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.css"> -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> -->
</head>
<body>
  <div id="wrapper">
    <h1>Here are the famous quotes!</h1>
    <div id="thank_you">
      <ul>
    <?php
      for($i=0; $i<count($show_quotes); $i++) { ?>
        <li><?php echo '"' . $show_quotes[$i]['quote'] . '"' ?></li>
        <p><?php echo '- ' . $show_quotes[$i]['name'] . ' at ' . $show_quotes[$i]['created_at']?><p>
        <div class="hline"></div>
      <?php } ?>
      </ul>

    </div>
      <button class="button-secondary pure-button"><a href="logout.php">Home</a></button>
    </div>
</body>
<html>
