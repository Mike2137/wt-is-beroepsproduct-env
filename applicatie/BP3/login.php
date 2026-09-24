<?php

$pageTitle = "Login";

session_start();

require_once 'includes/db_connection.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';

$connection = createConnection();

// Process the login form when it is submitted.
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve the user by username using a prepared statement.
    $sql = "SELECT * FROM [User] WHERE username = :username";

    $statement = $connection->prepare($sql);
    $statement->execute([
        ':username' => $username
    ]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // Verify the password and create a session for the authenticated user.
    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['username'] = $user['username'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['role'] = $user['role'];

        // Redirect users to the appropriate page based on their role.
        if ($user['role'] === 'Personnel') {
            header("Location: staff-orders.php");
        } else {
            header("Location: my-orders.php");
        }

        exit;
    } else {

        $errorMessage = "Invalid username or password.";
    }
}

?>

<main>

    <section class="login-container">

        <div class="login-card">

            <h1>Login</h1>

            <p>Log in to place orders faster and manage your profile.</p>

            <form method="post">

                <label for="username">Username</label>

                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>

                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn">
                    Login
                </button>

                <?php if (isset($errorMessage)): ?>

                    <p class="error-message"><?= $errorMessage ?></p>

                <?php endif; ?>

            </form>

            <p class="register-link">

                Don't have an account?

                <a href="register.php">Register here</a>

            </p>

        </div>

    </section>

</main>

<?php

require_once 'includes/footer.php';

?>