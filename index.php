<?php 
      include 'quotes.php';
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $randomQuote = array_rand($quotes, 1);
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <title>Quote-a-Quote</title>
</head>
<body>
  <main>
    <h1>Welcome to the Random Quote Generator!</h1>
      <p>Everytime you press the button, a new quote will be randomly selected for you. Please give it a try!</p>
      <form method="POST" action="#">
        <input class="button" type="submit" name="randomQuote" value="Randomize me!">
        <input class="button" type="submit" name="clearQuote" value="Clean Screen">
      </form>
      <div class="random">
        <h2 class="quote">
          <?php 
            if(isset($_POST['randomQuote'])) {
              echo $quotes[$randomQuote][0];
            } else if(isset($_POST['clearQuote'])) {echo '';}?>
        </h2>
        <p class="author">
          <?php 
            if(isset($_POST['randomQuote'])) {
              echo " by " . $quotes[$randomQuote][1]; 
            } else if(isset($_POST['clearQuote'])) {echo '';} ?>
        </p>
      </div>
  </main>
</body>
</html>