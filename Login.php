<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('db.php');

    $Name=$_POST['name'];
    $Password=$_POST['password'];
    $query=mysqli_query($con,"select * from student where  Firstname='$Name' and Password='$Password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['name']=$ret['FirstName'];
     header('location:welcome.php');
    }
    else{
        echo "<h4>Invalid User Details</h4>";
    }


    ?>
    
</body>
</html>