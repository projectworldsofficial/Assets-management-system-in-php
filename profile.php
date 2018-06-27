<?php require 'core/init.php';

if(logged_in() === false){

    session_destroy();
    header('Location:index.php');
    exit();

} else {

if(isset($_GET['first_name'])=== true and empty($_GET['first_name'])===false){
    $first_name= $_GET['first_name'];



}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Asset Management System</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css">


</head>
<body>

<div id="page">
    <header>
        <a title="asset" href="">
            <div class="logo">
                <img src="images/logo.png" height="66px" weight="66px" />
                <span id="title">Asset Management System</span>
            </div>
        </a>

        <nav>


            <label for="email"> <?php echo $user_data['first_name']; ?>'s Profile </label>

            <a href="home.php"><input type="image" src="images/icons/home.png" title="Home" value="home " style="margin-left:10px;"/></a>
            <input type="image" src="images/icons/user.png" title="Profile" value="settings " style="margin-left:10px;"/>
            <a href="settings.php"><input type="image" src="images/icons/settings.png" title="Settings" style="margin-left:10px;"></a>
            <a href="logout.php"><input type="image" src="images/icons/logout.png" title="Logout" value="Sign Out" style="margin-left:10px;"/></a>




        </nav>
    </header>

    <?php

    $id = $user_data['id'];
    $total=total($con,$id);


    ?>


    <div class="profile">
        <br><br>
       <center><h1>USER PROFILE</h1></center>
        <br><br>

         <div class="content">
                    <h2>First Name :</h2>
                <br>
                    <h2>Last Name :</h2>
                <br>
                    <h2>Email :</h2>
                <br>
                    <h2>Total Assets :</h2>

        </div>


            <div class="content" >
                    <h2><?php echo $user_data['first_name'];?></h2>
                <br>

                <h2><?php echo $user_data['last_name'];?></h2>
                <br>

                <h2><?php echo $user_data['email'];?></h2>
                <br>

                <h2><?php echo $total; ?></h2>

            </div>

        <a href="settings.php"><div id="report">Edit Profile</div></a>





    </div>



    <hr />


</div>



</body>
</html>



<?php }?>
