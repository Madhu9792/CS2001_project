<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login & Registration</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Style for modal popup */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            background-color: rgba(0,0,0,0.5); 
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fefefe;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .login-option {
            display: none;
        }
    </style>
</head>
<body>
    <header>
        <h2 class="logo">BuySmart</h2>
        <nav class="navigation">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>

            <!-- Profile image with click event to open modal -->
            <a href="javascript:void(0);" onclick="showModal()">
                <img src="includes/profile.png" style="width: 30px; height:auto; margin-left:20px;" alt="Profile">
            </a>
            
            <!-- Logout form (only shown if logged in) -->
            <?php if (isset($_SESSION['username'])): ?>
                <a href="#"><form action="includes/logout.inc.php" style="padding-left:400px;">
                    <button class="btnLogin-popup">Logout</button>
                </form></a>
            <?php endif; ?>
        </nav>
    </header>

    <!-- Modal Popup for login -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Profile</h2>
            <!-- Radio buttons for choosing between user and admin -->
            <label>
                <input type="radio" name="login-type" value="user" onclick="showLoginOption('user')"> User
            </label>
            <label>
                <input type="radio" name="login-type" value="admin" onclick="showLoginOption('admin')"> Admin
            </label>

            <!-- Admin Login Form -->
            <div id="adminLogin" class="login-option">
                <h2>Admin Panel</h2>
                <form id="adminLoginForm">
                    <input type="text" id="adminUsername" placeholder="Username" required><br>
                    <input type="password" id="adminPassword" placeholder="Password" required><br>
                    <button type="submit">Submit</button>
                </form>
            </div>

            <!-- You can add a similar User login form here if needed -->
        </div>
    </div>

    <script>
        // Function to display the modal
        function showModal() {
            document.getElementById('loginModal').style.display = 'flex';
        }

        // Function to hide the modal
        function closeModal() {
            document.getElementById('loginModal').style.display = 'none';
        }

        // Function to show login form based on the selection
        function showLoginOption(option) {
            if (option === 'admin') {
                document.getElementById('adminLogin').style.display = 'block';
            } else {
                document.getElementById('adminLogin').style.display = 'none';
            }
            // You can implement logic for showing user form when "User" is selected.
        }

        // Handle Admin form submission
        document.getElementById('adminLoginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting the default way

            // Get input values
            const username = document.getElementById('adminUsername').value;
            const password = document.getElementById('adminPassword').value;

            // Check if the credentials are correct
            if (username === 'Admin123' && password === 'bysmart123') {
                // Set session data for logged-in user
                <?php $_SESSION['username'] = 'Admin123'; ?>

                // Redirect to the admin page
                window.location.href = 'admin/register1.php';
            } else {
                alert('Invalid Username or Password');
            }
        });
    </script>

</body>
</html>
