
<?php 
session_start();
include('header.php');
include('navbar.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addadminprofile">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Admin Data</h1>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">

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

         <div class="form-group">
            <label for="username">Confirm Password</label>
            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter Username">
         </div>


      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="registrationbtn" class="btn btn-primary">Save</button>
      </div>

      </form>
    </div>
  </div>
</div>

<div class="container-fluid">
    <!--Datatables--Example-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Profile
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addadminprofile">
                 Add Admin Profile
                </button>
            </h6>
    </div>

    <div class="card-body">

    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] != '')
    {
        echo '<h4>'.$_SESSION['success'].'</h4>';
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
    {
        echo '<h4>'.$_SESSION['status'].'</h4>';
        unset($_SESSION['status']);
    } 

     ?>
        <div class="table-responsive">
         <?php
            $connection= mysqli_connect("localhost","root","","adminpanel");

            $query= "SELECT * FROM register";
            $query_run= mysqli_query($connection, $query);
         ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        if(mysqli_num_rows($query_run)> 0 )
                        {
                          while($row= mysqli_fetch_assoc($query_run))
                          {
                            ?>
                           
                         <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td>
                              <form action="register_edit.php" method="POST">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                              <button type="submit"  name="edit_btn" class="btn btn-success">EDIT</button>
                              </form>
                            </td>
                            <td>
                              <button type="submit" class="btn btn-danger">DELETE</button>
                            </td>
                         </tr>
                        <?php
                        }
                      }
                      else
                      {
                        echo "No Record Found";
                        }
                      ?>
                    </tbody>
            </table>
        </div>
    </div>

  </div>

<!--Container-fluid-end-->

<?php
   include('scripts.php');
   include('footer.php');
?>