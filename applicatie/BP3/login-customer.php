<?php
session_start();

require_once 'includes/db_connection.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';

$connection = createConnection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM [User] WHERE username = :username";

    $statement = $connection->prepare($sql);

    $statement->execute([
        ':username' => $username
    ]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['role'] = $user['role'];

        header("Location: my-orders.php");
        exit;
    } else {
        echo "Invalid username or password.";
    }
}

?>

<main>
    <section class="login-container">

        <div class="login-card">

            <h1>Login</h1>
            <p>Log in to place orders faster and manage your profile.</p>

            <form method="post">

                <label for="username">Email Address</label>
                <input type="email" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn">
                    Login
                </button>

            </form>

            <p class="register-link">
                Don't have an account?
                <a href="register.php">Register here</a>
            </p>

            <p class="employee-link">
                Employee?
                <a href="login-employee.php">Staff Login</a>
            </p>

        </div>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>