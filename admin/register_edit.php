<?php 
session_start();
include('header.php');
include('navbar.php');
?>
<div class="container-fluid">
    <!--Datatables--Example-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile</h6>
        </div>

    <div class="card-body">

    <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
         </div>

         <div class="form-group">
            <label for="username">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
         </div>

         <div class="form-group">
            <label for="username">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
         </div>

    
    </div>
    </div>

  </div>
</div>

<!--Container-fluid-end-->


<?php
   include('scripts.php');
   include('footer.php');
?>




















<?php
if(isset($_POST['edit_btn']))
   {
    $id=$_POST['edit_id'];
   $query= "SELECT * FROM register WHERE id='$id'";
   $query_run= mysqli_query($connection, $query);
   $row= mysqli_fetch_assoc($query_run);
   $_SESSION['edit_id']=$id;
   }
   ?>