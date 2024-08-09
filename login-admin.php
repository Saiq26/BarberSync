<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myWeb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id FROM regForm WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    
    // Execute the statement
    $stmt->execute();
    $stmt->store_result();

    // Check if a record is found
    if ($stmt->num_rows > 0) {
        // User found
        $_SESSION['username'] = $username;
        header("#"); // Redirect to a welcome page or dashboard
    } else {
        // User not found
        echo "Invalid username or password";
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/css.css">
</head>

<body
    style="background-image: url('assets/barbershop.jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh; margin: 0;">
    <nav class="navbar">
        <div class="logo">BarberSync</div>
        <ul class="nav-links">
            <li><a href="welcome.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="welcome-container">
        <div class="welcome-message">
            <h1><i class="fas fa-sign-in-alt"></i> Login</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="username"><i class="fas fa-user"></i> Username</label>
                <input type="text" id="username" name="username" required>
            </div><br>
            <div class="form-group">
                <label for="password"><i class="fas fa-lock"></i> Password</label>
                <input type="password" id="password" name="password" required>
            </div><br>
            <div id="demo">
            <button type="submit"><i class="fas fa-paper-plane"></i> Login</button><br>
            </div><br>
            <a href="register.php" class="register-btn">I Don't have an Account</a>
        </form>

            


            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 BarberSync. All rights reserved.</p>
    </footer>
        
        <?php
    if ($login_error) {
        echo '<div style="color: red;">' . $login_error . '</div>';
    }
    ?>
    </div>
    <script src="js/js.js"></script>
</body>
</html>
