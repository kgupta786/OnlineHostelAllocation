<?php
include "connection.php";

$s="select * from booking where rollno='".$_SESSION["roll"]."' and status='pending'and'booked'";
$result=mysqli_query($conn,$s);
if($result!=null)
{

    header("location:alreadybooked.php");

}
else{
    session_start();
    if(!isset($_SESSION["email"]))
    {
        header("location:student_login.php");
    }}
?>

    <div class="container-fluid">

        <?php


        include "studentpage.php";
        ?>

    <div class="row" style="min-height: 500px;">
     <h2>Select the Block</h2>
        <form action="bookhostel.php" method="post">
        <select name="block" class="form-control">

            <?php
            include "connection.php";
            $list="select * from block where type='".$_SESSION["gender"]."' ";
            $result = mysqli_query($conn,$list);
            while($row_list=mysqli_fetch_array($result)){
                ?>
                <option>
                    <?php echo $row_list[0]; ?>
                </option>
                <?php
            }
            ?>
        </select><br><br>
<input type="submit" class="btn btn-success" width="200px" value="Select the block">
        </form></div>


</div>

<?php
include "publicfooter.php";
?>