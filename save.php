<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "djbookings";
  echo "Server connection Error";
if(isset($_POST['submit']))
{
  $con=mysqli_connect($servername, $username, $password, $dbname);
  if(!$con)
  {
    echo "Server connection Error";
  }
  else {
    echo "Succesfull booking";
  }
  $fname=$_POST['fullname'];
  $email=$_POST['email'];
  $regevent=$_POST['event'];
  $mbnumer=$_POST['mobilenumber'];
  $theirgender=$_POST['rdo'];
  $sql="INSERT INTO bookings(name, email, eventname, mobilenum, gender) VALUES ('$fname','$email','$regevent','$mbnumer','$thegender')";
  if (mysqli_query($con,$sql))
  {
    echo "Please check your mail";
  }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

  }
}
?>
