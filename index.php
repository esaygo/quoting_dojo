<?php
  session_start();
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
  <h1>Welcome to Quoting Dojo!</h1>
  <?php if(isset($_SESSION['message'])) {
    echo '<div id="message">' . $_SESSION['message'] . '</div>';
  }?>
    <form class="pure-form pure-form-aligned" action="process.php" method="post">
        <div class="pure-control-group">
            <label for="color">Your name</label>
            <input id="name" type="text" name="name" placeholder="name">
        </div>

        <div class="pure-control-group">
            <label for="quote">Your quote</label>
            <input class="pure-input-1-2" type="textarea" name="quote" placeholder="Write your quote here">
        </div>
            <button id="add_quote" type="submit" class="pure-button pure-button-primary">Add my quote</button>
            <button id="show_quotes" type="submit" class="pure-button pure-button-primary"><a href="main.php">Skip to quotes</a></button>
        </div>

        <!-- <button class="button-error pure-button"><a href="logout.php">Destroy session</a></button> -->

</form>
</body>
</html>
