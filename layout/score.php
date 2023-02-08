<?php include "header.php" ?>

<?php
  $percent = $_POST['percent'];
  if ($percent >= 80  && $percent <=100) {
        echo "Grade: Excellent.";
  } elseif ($percent >= 70 && $percent <80) {
        echo "Grade: Great.";
  } elseif ($percent >= 60 && $percent <70) {
        echo "Grade: Good.";
  } elseif ($percent >= 50 && $percent <60) {
        echo "Grade: Pass.";
  } elseif ($percent < 50) {
        echo "Grade: Fail.";
  } else  {
        echo "Grade: Your score is not in the range";
  }
?>


<?php include "footer.php" ?>