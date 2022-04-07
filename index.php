<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2>Basic Database connection</h2>
    <form action="" name=form1 method="post" >
        <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter Firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact">
        </div>
        <button type="submit" name="insert"class="btn btn-default">Insert</button>
        <button type="submit" name="update"class="btn btn-default">Update</button>
        <button type="submit" name="delete"class="btn btn-default">Delete</button>
    </form>
    </div>
    <?php 
    if(isset($_POST['insert'])){
        mysqli_query($link, "INSERT INTO table1 values (null,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]')");
    }
    ?>
</body>
</html>