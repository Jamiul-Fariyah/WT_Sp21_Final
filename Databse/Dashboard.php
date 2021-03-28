 <?php
      session_start();
      if(!isset($_SESSION["loggedin"])){
		  header("Location: login.php");
	  }
      require_once "db_config.php";
	   
	   $query="select * from admin";
	   $result = get($query);
  
	   
	   ?>
	   <table border="1" style="border-collapse:collapse;">
	   <tr>
	   <th>name</th>
	   <th>username</th>
	   <th>password</th>
	   </tr>
<?php	   
	  foreach($result as $row){
		   echo "<tr>"
		   echo "<td>".$row["id"]."</td>";
		   echo "<td>".$row["username"]."</td>";
		   echo "<td>".$row["type"]."</td>";
		   echo "</tr>";
		   
	   } */
	  // $var =mysqli_fetch_assoc($result);
	  // print_r($var);
	   //$var2 =mysqli_fetch_assoc($result);
	   //echo "<br>";
	   //print_r($var2);
	   
?>	  
    </table> 
	
	<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<a href="Allstudents.php">Allstudents</a>
		<a href="Addstudent.php">Addstudent</a>
		<a href="Alldepartments.php">Alldepartments</a>
		<a href="Adddepartment.php">Adddepartment</a>
		

	</body>
</html>