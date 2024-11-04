<?php
session_start();
include('includes1/header1.php');
include('includes1/navbar1.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="font-weight-bold text-primary">EDIT Admin Profile</h6>
        </div>
        <div class="card-body">
            <?php
            $connection = new mysqli("localhost", "root", "", "arunafashion");

            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            if (isset($_POST['edit-btn'])) {
                $id = intval($_POST['edit-id']);

                // Use prepared statement to prevent SQL injection
                $stmt = $connection->prepare("SELECT * FROM users WHERE usersId=?");
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($row = $result->fetch_assoc()) {
                    ?>
                    <form action="code.php" method="POST">
                        <input type="hidden" name="edit-id" value="<?php echo htmlspecialchars($row['usersId']); ?>">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="editusername" value="<?php echo htmlspecialchars($row['usersName']); ?>" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="editemail" value="<?php echo htmlspecialchars($row['usersEmail']); ?>" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="editpwd" class="form-control" placeholder="Enter New Password">
                            <small class="form-text text-muted">Leave blank if you do not wish to change the password.</small>
                        </div>
                        <a href="register1.php" class="btn btn-danger">CANCEL</a>
                        <button type="submit" name="update-btn" class="btn btn-primary">UPDATE</button>
                    </form>
                    <?php
                } else {
                    echo '<p class="text-danger">User not found.</p>';
                }

                $stmt->close();
            }

            $connection->close();
            ?>
        </div>
    </div>
</div>

<?php
include('includes1/script1.php');
include('includes1/footer1.php');
?>