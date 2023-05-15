<?php 

include 'connection.php';

$msg='';

if(isset($_POST['submit'])){

    if(!empty($_POST['username'])  && !empty($_POST['password'])){

    $username= $_POST['username'];
    $password= $_POST['password'];
    $q= "INSERT INTO `customers`(`username`, `password`) VALUES ('$username', '$password')";

    $query = mysqli_query($conn, $q);
   $msg='Your data is successfully inserted :)';
  

    }

else{
    $msg="Notice: Please make sure all input fields are filled before submission !!";
    
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Insert Data</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>
<body>
<header>
    <div class='logo'>
        <a href="index.php"><img src="assets/mylogo.png" alt='my logo'></a>
    </div>
<h1>INSERT PAGE</h1>
<div class="nav" >
    <li><a href="index.php">Home</a></li>
    <li><a href="display.php">Display</a></li>
    
</div>
</header>

<form method="post"><br>

<div class="card-container">

    <div class="card">
            <h2>Insert Information</h2> 

            <label >Username</label>
            <input type="text" name="username"> <br><br>
            
            <label >Password</label>
            <input class="input-password" type="text" name="password"> <br>

            <br><button class="btn" type="submit" name="submit">Submit</button><br>
            </div>
    </div>

    <div class="msg"><?php echo $msg ?></div>


</form>



</body>
</html>

<style><?php include 'css/insert-update.css'?></style>