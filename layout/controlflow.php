<?php include "header.php" ?>

<h3> 1. Write a script that gets the current month </h3>

<?php
  $month = date('F', time());
  if ($month == 'August')
  {
    echo "It's August, so it's still holiday.";
  }
  else
  {
    echo "Not August, this is February so I don't have any holidays.";
  }
?> 

<h3> <br> 2. Assign colour red to a variable name $color </h3>

<?php
  $color = "red";
  if ($color == 'red')
  {
    echo "The color is red.";
  }
  else
  {
    echo "The color is not red.";
  }
  ?> <br>

  <?php
  $color = "red";
  if ($color == '!red')
  {
    echo "The color is red.";
  }
  else
  {
    echo "The color is not red.";
  }
?> <br>

<h3> <br> 3. Write a program to grade students based on their total score for a subject. </h3>


    <form method="POST" action="score.php">
    Please enter your garde:
    <p><input type="text" name="percent"></p>
    <input type="submit" name="submit">

    
    <h3> <br> 4. Write a program to get inputs (age and name). </h3>


    <h3> <br> 5. Use Switch statement with strops function. </h3>



<?php include "footer.php" ?>