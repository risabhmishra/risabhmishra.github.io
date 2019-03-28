<?php
$servername="localhost";
$username="root";
$password="root";
$mydb="Contact";

$conn = mysqli_connect($servername,$username,$password,$mydb);

$query="INSERT INTO CONTACTS VALUES '$firstname','$surname','$email','$phone','$message'";

if($conn)
{
  if(mysqli_query($conn,$query))
  {
    echo "Table data Inserted";
  }
  else die("Insertion Failed...");
}
else {
  die("Connection Error").mysqli_error($conn);
}

mysqli_close($conn);
?>
