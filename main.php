<!DOCTYPE html>
<html lang='en'>
	

<head>
	
<style>
p {
    padding: 5px 15px; 
    border: 1px solid black; 
}  
h2{
    padding: 0px 5px 10px 3px; 
   
	align:center;
} 
</style>
</head>
		
		<meta charset="utf-8" />
		<title>HOME</title>
		<link type="text/css" rel="stylesheet" media="screen" href="layout.css"/>
        </head>
		<body background="book.jpg">
			<div class="container">
				<h2 align="center"><font color="black">BABY  NAME  FINDER</font></h2>
				<ul class="nav nav-tabs">
				<li class="active"> <a href="main.php">HOME</a></li>
				<li class="active"><a href="top.php">TOP</a></li>
				<li class="active"><a href="graph.php">POPULARITY</a></li>
				<li class="active"><a href="about.php">ABOUT</a></li>
				</ul>
				</div>
			<h2 align="center"><font color="black">Please read ABOUT before proceeding</font></h2>	
		<div>
		
						<form align="center" method="post" action="ptsh.php">
							Partial search:<input type="text" name="search" required="required" />
							<input type="submit" name="submit" value="search">
							</form>
		</div>
		</body>
		</html>
