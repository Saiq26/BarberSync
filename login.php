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
        header("Location: retrieve.php"); // Redirect to a welcome page or dashboard
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
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <script src="js/script.js"></script>
</head>
<body style="background-image: url('assets/barbershop.jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh; margin: 0;">
    <nav class="navbar">
        <div class="logo">BarberSync</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>>
<header>
        <h1>Barber Login</h1>
       
        </header>
        
    <div class="login-container">
        <h2><i class="fas fa-sign-in-alt"></i> Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="username"><i class="fas fa-user"></i> Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password"><i class="fas fa-lock"></i> Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div id="demo">
            <button type="submit"><i class="fas fa-paper-plane"></i> Login</button><br>
            </div>
            <a href="register.php" class="register-btn">I Don't have an Account</a>
        </form>
        
        <?php
    if ($login_error) {
        echo '<div style="color: red;">' . $login_error . '</div>';
    }
    ?>
    </div>
</body>
</html>
