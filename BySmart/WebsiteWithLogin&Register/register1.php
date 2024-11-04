<?php
session_start();
include('includes1/header1.php');
include('includes1/navbar1.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="code.php" method="POST">
        <div class="modal-body">
        <div class="form-group">
            <label> Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label> Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label> Password</label>
            <input type="password" name="pwd" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label> Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password">
        </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
        </form>
    </div>
    </div>
</div>
    <div class="container-fluid">
    <div class= "card shadow mb-4">
<div class= "card-header py-3">
    <h6 class="font-weight:bold text:primary">Admin Profile
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
    Add Admin Profile </button>
    

</div>
<div class="card-body">
    <?php
    if(isset($_SESSION['success'])&& $_SESSION['success'] !='')
    {
        echo '<h2>'.$_SESSION['success'].'</h2>';
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
    {
        echo '<h2 class="bg-info">'.$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);
    }
    ?>
       
<div class="table-responsive">
<?php
           $connection =   mysqli_connect("localhost","root","","arunafashion");
              
               $query = "SELECT * FROM users";
               $query_run = mysqli_query($connection,$query);
               ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(mysqli_num_rows($query_run) >0)
{
                    while($row = mysqli_fetch_assoc($query_run))
                {
                 ?>
                 <tr>
                    <td><?php echo $row['usersId'];?></td>
                    <td><?php echo $row['usersName'];?></td>
                    <td><?php echo $row['usersEmail'];?></td>
                    <td><?php echo $row['usersPwd'];?></td>
                    <td>
                      
                        <form action="register1-edit.php" method="post">
                            <input type= "hidden" name="edit-id" value="<?php echo $row['usersId'];?>">
                        <button type="submit" name="edit-btn" class="btn btn-success">EDIT</button>
                </form>
             </td>
            <td>
            <form action="code.php" method="post">
             <input type="hidden" name="deleteid" value="<?php echo htmlspecialchars($row['usersId']); ?>">
            <button type="submit" name="deletebtn" class="btn btn-danger">DELETE</button>
                                        </form>
            </td></tr>
   <?php 
   }
} else {
    echo "no record found!";
}?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
<!--/.container-fluid -->
<?php
include('includes1/script1.php');
include('includes1/footer1.php');
?>