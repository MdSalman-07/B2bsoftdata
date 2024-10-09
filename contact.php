<?php
$con=mysqli_connect("http://b2bsoftdata.com","b2b_root","{4#ollYc0f$l");
mysqli_select_db($con,'b2b_contact');

if (isset($_POST['submit']))
 {
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
     $message=$_POST['message'];
     
    $q="INSERT INTO 'form'( 'name', 'subject','email', 'message') VALUES ('$name','$subject','$email','$message')";
    $query=mysqli_query($con,$q);
     

    if ($query)
      {
      echo "<script>alert('Your  Account Created Successfully')</script>";

      }
      else
      {
         
       echo "<script>alert('Your  Account Not Created  ')</script>";
      }
         
      }



?>