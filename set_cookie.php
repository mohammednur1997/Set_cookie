	
	
	<?php
	if(isset($_COOKIE['vesite']))
	{
		//you are re-visiteing our site,,thank you very much
	    $name="vesite";
		$count=$_COOKIE['vesite']+1;
		$expair=time()+(60*60*24*7*1);
	    setcookie($name,$count,$expair);

		
	}else
	{
		$name="vesite";
     	$count=1;
	    $expair=time()+(60*60*24*7*1);
	    setcookie($name,$count,$expair);
	}
	?>

	<!DOCTYPE HTML>
		<html lang="en-US">
		<head>
			<meta charset="UTF-8">
			<title></title>
		</head>
		<body>
		<h1>Set Cookie For your website.......</h1>
		
		   <h3>
		  <?php
		  echo "You visite our site=".$_COOKIE['vesite']."-time(s)";
		  ?>
		 </h3>
		 
		</body>
		</html>