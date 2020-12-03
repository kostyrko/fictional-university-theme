<?php 

  $droids = array('C3PO', 'R2D2');

  $count = 0;

  // while($count < 10) {
  //   echo "<li>$count</li>";
  //   $count++;
  // }

  while($count < count($droids)) {
    echo "<li>Hi my name is $droids[$count]</li>";
    $count++;
  }

?>

<p> I am: <?php echo $droids[1] ?></p>

