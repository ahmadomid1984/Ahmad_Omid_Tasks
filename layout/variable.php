<?php include "header.php" ?>

  <h3> Exe3. In-class Task Variable & Operators </h3> <br>
  <h3> No 1 & 2. </h3>
  <h2> Welcome to my website. <br> It is a test to see how is it work. </h2>
  
<form action="action.php" method="post">

<div class="row">
    <div class="col">
    <input type="text" name="fname" required placeholder="First Name" class="form-control">
    </div>

    <div class="col">
    <input type="text" name="lname" required placeholder="Last Name" class="form-control">
    </div>
</div>

<div class="row">
    <div class="col">
    <input type="date" name="bdate" required placeholder="Birth Date" class="form-control">
    </div>

    <div class="col">
    <input type="color" name="color" required placeholder="Favourite Color" class="form-control">
    </div>
</div>

<div class="col">
    <br> <input type="submit" value="Submit"> <br> <br>
</div>

<br>
<h3> No3. Prepare a simple html table and apply bootstrap style to the table. </h3>

<table class="table table-striped table-light">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Number</th>
      <th scope="col">First</th>
      <th scope="col">Second</th>
      <th scope="col">Third</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ahmad</td>
      <td>Omid</td>
      <td>@Omid</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Deepack</td>
      <td>KC</td>
      <td>@KC</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Tommy</td>
      <td>Saksa</td>
      <td>@Tommy</td>
    </tr>
  </tbody>
</table>

</form>

<br>
<h3> No4. Prepare a simple html table and apply bootstrap style to the table. </h3>

<?php
$fname = "Ahmad";
$lname = "Omid";
echo $fname . "  " . $lname . "<br>";
echo strlen($fname) + strlen($lname) ."<br>";
?>

<br>
<h3> No5. Write a script to add up the numbers: 298, 234, 46. </h3>

<?php
$var1 = 298;
$var2 = 234;
$var3 = 46;

$sum = $var1+$var2+$var3;
echo $var1."+".$var2."+".$var3."=". $sum ."<br>";
?>

<br>
<h3> No6. Write a PHP script to detect the browser being used to view your pages. </h3>

<?php
echo $_SERVER['HTTP_USER_AGENT'] ."<br>";
?>

<br>
<h3> No7. Write a PHP script in the footer section of your universal footer. </h3>
<div class="footer-copyright text-center py-3">
<h3> See the footer </h3>
</div>



<?php include "footer.php" ?>