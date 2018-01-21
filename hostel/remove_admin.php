<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container">

    <?php
    $s1="select * from admins";

    $s="delete from admins where email='".$_GET["dept"]."'";

   include "connection.php";
    $result=mysqli_query($conn,$s1);
    $flag=0;

    while($row=mysqli_fetch_array($result))
    {
        if($row[1]==$_GET["dept"])
        {
            $flag=1;
            break;
        }
    }

    if($flag==1)
    {
        mysqli_query($conn, $s);

        header("location: viewadmin.php");

    }

    ?>
</div>
</body>
</html>
