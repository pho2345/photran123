<!DOCTYPE html>
<html>
<body>
<?php
if(!empty($_POST['firstname'])  && !empty($_POST['Birthdate']) && !empty($_POST['dowhat'])){
    $firstname=$_POST['firstname'];
$birthdate=$_POST['Birthdate'];
echo "Sucessful <br />";
print "Congrats $firstname. ! <br />";
$button=$_POST['dowhat'];
print "The button clicked= '$button'.";
$birthday=date("Y", strtotime($_POST['Birthdate']));

$today=getdate();
    $tuoi= $today['year']-$birthday;

echo "Tuổi:".$tuoi;
}

?>
<form method="post" action="t.php" >
Name <input type="text" name="firstname"  /> </br> </br>
Birthdate <input type="date" name="Birthdate" > </br> </br>
<input type="submit" name="dowhat" value="Send the Data" />
</form>
</body>
</html>