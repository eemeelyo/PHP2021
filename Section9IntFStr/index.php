<?php

if (isset($_POST['count'])) {

  $textBox = $_POST['textBox'];
  $spaces = $_POST['spaces'];


  if ($spaces == "noSpace") {
    $lettercount = strlen(str_replace(' ', '', $textBox));
    echo $textBox . ' contains ' . $lettercount . ' letters only and no spaces.';
  } else {
    echo $textBox . " contains " . strlen($textBox) . " characters long including spaces.";
    echo "<br>";
  }
}
echo "<br>";

?>

<form action="index.php" method="POST">
  <input type="text" name="textBox">;
  Count spaces<input type="radio" name="spaces" value="yesSpace">;
  Don't Count spaces<input type="radio" name="spaces" value="noSpace">;
  <input type="submit" name="count" value="count">;
</form> -->