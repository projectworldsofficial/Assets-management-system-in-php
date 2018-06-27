<?php
require 'core/init.php';
error_reporting(0);
if(logged_in() === false){

    session_destroy();
    header('Location:index.php');
    exit();

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Asset Management System</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css">
    <link rel="stylesheet" href="css/home.css" />

</head>
<body>

<div id="page">
    <header>
        <a title="asset" href="home.php">
            <div class="logo">
                <img src="images/logo.png" height="66px" weight="66px" />
                <span id="title">Asset Management System</span>
            </div>
        </a>

        <nav>


            <label for="email">Welcome <?php echo $user_data['first_name']; ?> </label>

            <input type="image" src="images/icons/home.png" title="home" value="Home" style="margin-left:10px;"/>
            <a href="profile.php"><input type="image" src="images/icons/user.png" title="Profile" value="settings " style="margin-left:10px;"/></a>
            <a href="logout.php"><input type="image" src="images/icons/logout.png" title="Logout" value="Sign Out" style="margin-left:10px;"/></a>


        </nav>


    </header>
    <?php $id=$_GET['id'];
    $asset_data=asset_data($con,$id);?>

    <div class="content-center">
        <div id="topic"><h3><?php echo $asset_data['title'];?></h3></div>


            <table border=0>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Details</th>
                </tr>
                <form action="" method="post">
                    <td><input style="text-align: center" type="text" value="<?php echo $asset_data['title'];?>" name="title"></td>
                    <td><input style="text-align: center" type="text" value="<?php echo $asset_data['category'];?>" name="category"></td>
                    <td><input style="text-align: center" type="number" value="<?php echo $asset_data['quantity'];?>" name="quantity"></td>
                    <td><input style="text-align: center" type="number" value="<?php echo $asset_data['price'];?>" name="price"></td>
                    <td><input style="text-align: center" type="text" value="<?php echo $asset_data['details'];?>" name="details"></td>
                    <td><input type="submit" name="update" value="update"></td>
                </form>
            </table>

        <?php
            if(isset($_POST['update'])===true and empty($_POST['update'])=== false){
                $update_data = array(

                    'title'     => $_POST['title'],
                    'category'  => $_POST['category'],
                    'quantity'  => $_POST['quantity'],
                    'price'  => $_POST['price'],
                    'details'   => $_POST['details']
                );


                update_assets($con,$update_data,$id);
                header('Location:home.php');
                exit();

            }



        ?>

    </div>

</div>
</body>
</html>
