<?php
  function greet($name, $planet)
  {
      echo "<p>Hi, my name $name and I from planet $planet</p>";
  }

  greet('R2D2', 'Naboo');
  greet('C-3PO', 'Tatooine');
?>

<h1> <?php bloginfo('name'); ?> </h1>

<p> <?php bloginfo('description'); ?> </p>