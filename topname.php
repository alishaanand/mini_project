<?php  
include"home.php";
print <<<HERE
<h2 align="center"> Fields Required </h2>
<form id="my form"  align="center" method="post">
<div>
<label for="year">Year:</label>
<input type="text" name="year" required="required">
</div>
<div>
<label for="gender">Gender:</label>
<input type="text" name="gender" required="required">
</div>
<div>
<label align="center" for="choice">Top:</label>
<input type="text" name="choice" required="required">
</div>
<div id="my submit">
<input type="submit" name="submit" value="submit">
</div>
</form>
HERE;
include("connect.php");
if(isset($_POST['submit']))
{
	$Year=$_POST['year'];
	$gender=$_POST['gender'];
	$choice=$_POST['choice'];
	if($gender=='both')
	{
	$sql="SELECT * from names WHERE year ='".$Year."' and gender ='male' and position between 0 and ".$choice."";
	$result=@mysql_query($sql) or die(@mysql_error());
	$numrow =@mysql_num_rows($result);
	echo "<h4> TOP: ".$numrow." Male </h4> ";
	
	$id=1;
	$s="   	";
	echo"<div><table class='table'><thead><tr><th>Position</th><th>Name</th><th>Amount</th></tr></thread><tbody> ";
	while($res=mysql_fetch_array($result))
	{
		echo " ";
	  echo " <tr><td>".$id."</td><td>".$res["given_name"]."</td><td>".$res["amount"]."</td></tr>";
		$id++;
	}
	echo"</tbody></table></div>";
	
    $sql="SELECT * from names WHERE year ='".$Year."' and gender ='female' and position between 0 and ".$choice." ";
	$result=@mysql_query($sql) or die(@mysql_error());
	$numrow =@mysql_num_rows($result);
	echo "<h4> TOP:".$numrow." FEMALE</h4> ";
	
	$id=1;
	$s="   	";
	echo"<table class='table'><thead><tr><th>Position</th><th>Name</th><th>Amount</th></tr></thread><tbody> ";
	while($res=mysql_fetch_array($result))
	{
		echo " ";
	  echo " <tr><td>".$id."</td><td>".$res["given_name"]."</td><td>".$res["amount"]."</td></tr>";
		$id++;
	}
	echo"</tbody></table>";
	}
	else{
		$sql="SELECT * from names WHERE year ='".$Year."' and gender ='".$gender."' LIMIT ".$choice." ";

	$result=@mysql_query($sql) or die(@mysql_error());
	$numrow =@mysql_num_rows($result);
	echo "<h4> TOP: ".$numrow." Result</h4> ";
	$id=1;
	$s="   	";
	echo"<table class='table'><thead><tr><th>Position</th><th>Name</th><th>Amount</th></tr></thread><tbody> ";
	while($res=mysql_fetch_array($result))
	{
		echo " ";
	  echo " <tr><td>".$id."</td><td>".$res["given_name"]."</td><td>".$res["amount"]."</td></tr>";
		$id++;
	}
	echo"</tbody></table>";
	}

}
?>

