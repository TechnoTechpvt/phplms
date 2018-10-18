


<!DOCTYPE html>
<html lang="en">
<head>
    

    <title>Student Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1>User Login Form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit1" value="Login">
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="registration.html"> Create Account </a>
                </p> 

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>


</div>




</body>
</html>
<?php

if(isset($_POST['submit1']))
{
    $count=0;
     $con = mysqli_connect('localhost','root','','library_managment_system');
   $username = $_POST['username']; 
   $password = $_POST['password'];
    $qry="SELECT * FROM `student_regstration` WHERE `username`=`$username` AND `password`=`$password`";
    
    $run=mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    
    if($row <1)
      {
        ?>
        <script>
            alert('Username and password does nnt match');
            window.open('login.php','_self');
         </script>
       <?php
      }
    else
       {
        window.open('regstration.php','_self');
        $data=mysqli_fetch_assoc($run);
        
        $id=$data['id']; 
        echo "id=".$id;
       }   
    
 
}
?>