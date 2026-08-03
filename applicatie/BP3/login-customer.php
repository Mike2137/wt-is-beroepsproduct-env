<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main>
    <section class="login-container">

        <div class="login-card">

            <h1>Login</h1>
            <p>Log in to place orders faster and manage your profile.</p>

            <form action="../pages/my-orders.html" method="post">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn">
                    Login
                </button>

            </form>

            <p class="register-link">
                Don't have an account?
                <a href="register.html">Register here</a>
            </p>

            <p class="employee-link">
                Employee?
                <a href="login-employee.html">Staff Login</a>
            </p>

        </div>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>