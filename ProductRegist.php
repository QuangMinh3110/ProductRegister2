<!DOCTYPE html>
<html>
<head>
	<title>Processing</title>
</head>
<body>
	<?php
		$productid = $_POST["txtid"];	 
		$name = $_POST["txtName"];
		$price = $_POST["txtprice"];	
		echo $name;
		
		//Refere to database 
	   $db = parse_url(getenv("DATABASE_URL"));
	   $pdo = new PDO("pgsql:" . sprintf(
	        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	        $db["host"],
	        $db["port"],
	        $db["user"],
	        $db["pass"],
	        ltrim($db["path"], "/")
	   ));
	   $data = [
		    'productid' => $producid,
		    'name' => $name,
		    'price' => $price,
		];
		$stmt =  $pdo->prepare("INSERT INTO product (productid, name, price) VALUES (:productid,:name,:price)");	
		$stmt->execute($data);
	 ?>
	 <h2>Thank you <?php echo $name?>  for registering 
	 		<?php echo $name?>
	 </h2>
	 <ul>
	 	<li><?php echo $productid?></li>
	 	<li><?php echo $name?></li>
	 	<li><?php echo $price?></li>
	 </ul>
	 <a href="index.php">Index</a>
</body>
</html>