<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Display Data</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
</head>
<body>
<header>
    <div class='logo'>
    <a href="index.php"><img src="assets/mylogo.png" alt='my logo'></a>
    </div>
<h1>DISPLAY PAGE</h1>
<div class="nav" >
    <li><a href="index.php">Home</a></li>
    <li><a href="insert.php">Insert</a></li>
    
</div>
</header>
<div class="container">
      <div>
        
        <h2>Display Table Data</h2>
        <p>Delete or Update data by clicking respective buttons !</p><br>

        <table class="table">

        <tr class="heading-row">
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>


 <?php 

include 'connection.php';

    $q= "select * from customers ";

    $query = mysqli_query($conn, $q);

    while($result=mysqli_fetch_array($query)){

?>

        <tr class="data-row">
            <td><?php echo $result['id'];?></td>
            <td><?php echo $result['username'];?></td>
            <td><?php echo $result['password'];?></td>
            <td> <button class="delete-btn"> <a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></button></td>
            <td> <button class="update-btn"> <a href="update.php?id=<?php echo $result['id']; ?>">Update</a></button></td>
        </tr>

        <?php
        }
        ?>

        </table>

      </div>
      
</div>

</body>

</html>

<style><?php include 'css/display.css'?></style>
