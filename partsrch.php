
    
<?php 
include"connect.php";
if(isset($_POST['search']))
{
$search=$_POST['search'];
$sql="SELECT given_name from names WHERE given_name LIKE '".$search."%'";
$result=@mysql_query($sql) or die(@mysql_error());
$number =@mysql_num_rows($result);
include"home.php";
print <<< HERE
<h2>RESULT</h2>
<h3> $number $search EXISTS IN DATABASE</h3> 
<table cellpadding="15">
HERE;
$id=1;

	echo"<div><table class='table'><thead><tr><th>S.No</th><th>Name</th></tr></thread><tbody> ";
	while($res=mysql_fetch_array($result))
	{
		echo " ";
	  echo " <tr><td>".$id."</td><td>".$res["given_name"]."</td></tr>";
		$id++;
	}
	echo"</tbody></table></div>";
	
}
?>
