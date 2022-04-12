<?php
include "connection.php";
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
    <style>
        .container{
            display: grid;
            place-items: center;
        }
    </style>
</head>
<body>
    
    <div class="container">
    <div class="col-lg-4 ">
    <h2>Basic Database connection</h2>
    <form action="" name="form1" method="post" >
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
    </div>
    <br>
    <div class="col-lg-12">     
    <table class="table table-bordered">
        
        <thead>
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $res=mysqli_query($link, "select * from table1");
        while ($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>"; echo $row["Id"]; echo "</td>";
            echo "<td>"; echo $row["firstname"]; echo "</td>";
            echo "<td>"; echo $row["lastname"]; echo "</td>";
            echo "<td>"; echo $row["email"]; echo "</td>";
            echo "<td>"; echo $row["contact"]; echo "</td>";
            echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["Id"]; ?>"<button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
            echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["Id"]; ?>"<button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
            echo "</tr>";
            
        }
        
        ?>
        </tbody>
    </table>
    </div>
</body>

<?php
    if(isset($_POST["insert"]))
    {
    mysqli_query($link,"insert into table1 values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]')");
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
    }
    if(isset($_POST["delete"]))
    {
    mysqli_query($link, "delete from table1 where firstname='$_POST[firstname]'") or die(mysqli_error($link));
    
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
    }
    if(isset($_POST["update"]))
    {
    mysqli_query($link, "update table1 set firstname='$_POST[lastname]' where firstname='$_POST[firstname]'") or die(mysqli_error($link));
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
    }
?>

</html>