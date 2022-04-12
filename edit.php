<?php
include "connection.php";
$id=$_GET["id"];
$firstname="";
$lastname="";
$email="";
$contact="";
$res=mysqli_query($link,"select * from table1 where Id=$id");
while($row=mysqli_fetch_array($res))
{
$firstname=$row["firstname"];
$lastname=$row["lastname"];
$email=$row["email"];
$contact=$row["contact"];
}
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
    <form action="" name="form1" method="post" >
        <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter Firstname" name="firstname" value="<?php echo $firstname; ?>">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname" name="lastname"value="<?php echo $lastname; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact" value="<?php echo $contact; ?>">
        </div>
        
        <button type="submit" name="update"class="btn btn-default">Update</button>
        
    </form>
    </div>
    <br>
    
</body>

<?php
if(isset($_POST["update"]))
{
    mysqli_query($link,"update table1 set firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',contact='$_POST[contact]' where id=$id");
    ?>
    <script type="text/javascript">
    window.location="index.php";
    </script>
    <?php
}
?>

</html>