<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    
<?php
include('db.php');

    $FirstName=$_POST['FirstName'];
    $Password=$_POST['password'];
    $DOB=$_POST['dob'];
    $Gender=$_POST['gender'];
    $Email=$_POST['email'];
    $PhoneNumber=$_POST['phonenumber'];
    //$RPassword=$_POST['RepeatPassword'];
   
    $query=mysqli_query($con, "insert into student(FirstName, Password, DOB, Gender,Email , PhoneNumber) value('$FirstName', '$Password', '$DOB', '$Gender', '$Email','$PhoneNumber' )");
    if ($query) {
    $msg="You have successfully registered";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  


  

  ?>

  <center><h1><?php 
  
  
//   echo $FirstName." ".$Password." ".$DOB." ".$Gender." ".$Email." ".$PhoneNumber
  

  ?></h1></center>
 <script>
     window.location.replace("index.html");
 </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>

