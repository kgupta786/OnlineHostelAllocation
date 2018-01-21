
<?php

include "headeradmin.php";
?>
<div class="container-fluid">



        <div class="row" style="padding-left: 400px;padding-right: 400px">
            <br><h1 class="text-center text-success">Add Departement</h1><br>
                <form action="insert_dept.php" method="post">

                    <div class="form-group">
                        Enter Name of Departement
                        <input type="text" data-rule-required="true" name="tbdepart" class="form-control" >
                    </div>

                    <div class="form-group">
                        Enter the location of departement
                        <input type="text" data-rule-required="true" name="tbloc" class="form-control" >
                    </div>
                    <div class="form-group">
                        Enter Description
                        <textarea type="text" data-rule-required="true" name="tbdes" class="form-control" >

                        </textarea></div>
                    <div class="form-group">

                    <div class="form-group">
                        Enter the Head of Departement
                        <input type="text" data-rule-required="true" name="tbhod" class="form-control" >
                    </div>
                    <input type="submit" class="btn btn-success" value="Add Departement">



                </form>

        </div>
    </div>

<?php

include "publicfooter.php";
?>
