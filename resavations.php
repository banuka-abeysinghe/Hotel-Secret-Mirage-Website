<?php
session_start();
$server_name="localhost";

$username="root";

$password="";

$database_name="secreat_mirage";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
// check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}

if(isset($_POST['save']))
{
$Full_Name = $_POST['Full_Name'];
$E_mail = $_POST['E_mail'];
$Phone = $_POST['Phone'];
$CheckIn = $_POST['CheckIn'];
$CheckOut = $_POST['CheckOut'];
$Room_Type = $_POST['Room_Type'];
$Adults = $_POST['Adults'];
$Children = $_POST['Children'];
$Special_Request = $_POST['Special_Request'];

$sql = "SELECT * FROM resavations WHERE ((CheckIn BETWEEN '$CheckIn' AND '$CheckOut') or (CheckOut BETWEEN '$CheckIn' AND '$CheckOut') or (CheckIn and checkOut BETWEEN '$CheckIn' AND '$CheckOut')) AND status = 0 AND Room_Type = '{$Room_Type}'";

$result = $conn->query($sql);
if ($result->num_rows < 3) {
  //For inserting the values to mysql database 
   $sql_query = "INSERT INTO resavations (Full_Name,E_mail,Phone,CheckIn,CheckOut,Room_Type,Adults,Children,Special_Request)
   VALUES ('$Full_Name','$E_mail','$Phone','$CheckIn','$CheckOut','$Room_Type','$Adults','$Children','$Special_Request')";

   if (mysqli_query($conn, $sql_query))
   {
      $_SESSION["successbook"] = 1;
      header("Location:./Rooms.php");
   }

   else
   {
      echo "Error: " . $sql . "" . mysqli_error($conn);
   }
}
else {
   $_SESSION["chechdate"] = 1;
   echo "<script>window.history.back()</script>";
  //echo "0 results";
}


mysqli_close($conn);
}
?>