<?php include "header.php" ?>

<h3> 1. Write a php script to display courses as list. </h3>

<?php
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $c)
{
echo "$c, ";
}
sort($courses);
echo "<br>";
foreach ($courses as $y)
{
echo "<li>$y</li>";
}
echo "</br>";
?>
<br>

<h3> 2. Delete an element from the array. </h3>

<?php
$courses1=array(0 =>"PHP", 1 => "HTML", 2 => "JavaScript", 3 => "CMS", 4 => "Project");
unset($courses1[3]);
foreach ($courses1 as $c)
{
echo "$c, ";
}
sort($courses1);
echo "<br>";
foreach ($courses1 as $y)
{
echo "<li>$y</li>";
}
echo "</br>";
?>
<br>


<h3> 3. Sort the arrays. </h3>

<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
foreach ($courses3 as $c)
{
echo "$c, ";
}
asort($courses3);
echo "<br>";

ksort($courses3);
foreach ($courses3 as $c)
{
echo "$c, ";
}
ksort($courses3);
echo "<br>";

arsort($courses3);
foreach ($courses3 as $c)
{
echo "$c, ";
}
arsort($courses3);
echo "<br>";

krsort($courses3);
foreach ($courses3 as $c)
{
echo "$c, ";
}
krsort($courses3);
echo "<br>";
?>
<br>


<h3> 4. Changing the array's all values to upper case. </h3>

<?php
$courses4=array("php"=>"1","html"=>"2","javascript"=>"3", "cms"=>"4","project"=>"5");
print_r(array_change_key_case($courses4,CASE_UPPER));
?>
<br>


<h3> <br> 5. List all your favorite colors and their hexadecimal equivalents. </h3>

<?php
$arrColors = array(
	'Red'=>'ff0000',
	'Green'=>'00ff00',
	'Blue'=>'0000ff',
	'Yellow'=>'ffff00'
);
 
foreach($arrColors as $key=>$val) {
	echo ' '.$key.' - '.$val.'<br>';
}
?>



<?php


?>
<br>





<form action="" method="get">
    <input type="number" placeholder="Enter your first number" name="num1" required>
    <input type="number" placeholder="Enter your second number" name="num2" required>
    
    <select name="operator">
    <option value="add"> Add </option>
    <option value="sub"> Subtract </option>
    <option value="mul"> Mutliply </option>
    <option value="div"> Divide </option>
    </select>
    <input type="submit" name="cal" value="Calculate">
</form>


<?php 

if (isset($_GET["cal"])){

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
    switch($operator){
        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
            break;
        case "mul":
            $result = $num1 * $num2;
            break;
        case "div":
            $result = $num1 / $num2;
            break;

        default:
            $result = "Error: You have not selected the correct operator.";
    }

}

if (isset($result)) {
    echo "<h2> Result: $result </h2>";
}


?>


<?php include "footer.php" ?>