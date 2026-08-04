<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main>
    <section class="register-container">

        <div class="register-card">

            <h1>Create Account</h1>

            <p>
                Create an account to save your delivery information and order faster.
            </p>

            <form method="post">

                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" required>

                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" required>

                <label for="username">Email Address</label>
                <input type="email" id="username" name="username" required>

                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Street and house number" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit" class="btn">
                    Register
                </button>

            </form>

            <p class="login-link">
                Already have an account?
                <a href="login-customer.php">Login here</a>
            </p>

        </div>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>