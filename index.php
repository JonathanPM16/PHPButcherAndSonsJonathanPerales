<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <h1 style="text-align:center;">Empleados</h1>
  <table>
	  <tr>
      <td>ID</td>
      <td>Nombre</td>
      <td>Apellidos</td>
      <td>Correo</td>
      </tr>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from empleados";
  $result = $conn->query($sql);
	  
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td><?php echo $row['employee_id']?></td>
      <td><?php echo $row['first_name']?></td>
      <td><?php echo $row['last_name']?></td>
      <td><?php echo $row['email']?></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </body>
 </html>
