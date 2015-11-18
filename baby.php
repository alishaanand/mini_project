<!DOCTYPE html>
<html lang='en'>
	

<head>
<style>
p {
    padding: 5px 15px; 
    border: 1px solid black; 
	background: blue;
}  
h2{
    padding: 0px 5px 10px 3px; 
    border: 1px solid black;
	background: white;
} 
</style>
</head>
		
		<meta charset="utf-8" />
		<title>HOME</title>
		<link type="text/css" rel="stylesheet" media="screen" href="layout.css"/>
        </head>
		<body background="baby.jpg">
			<h2><font color="blue">             WELCOME TO BABY NAME DATABASE</font></h2>
			<table id="nav">
				<tr>
					<td></td>
					<td><a href="baby.php">HOME</a></td>
					<td></td>
                    <td><a href="topname.php">TOP NAMES</a></td>
					<td></td>
					<td><a href="graph.php">POPULARITY CHART</a></td>
					<td>
					</td>
		<td></td>
		</tr>
		</table>
		<div>
		
						<form method="post" action="partsrch.php">
							Partial search:<input type="text" name="search" required="required" />
							<input type="submit" name="submit" value="search">
							</form>
		</div>
		</body>
		</html>
