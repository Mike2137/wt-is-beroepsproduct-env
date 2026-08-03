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

            <form action="profile.php" method="post">

                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" required>

                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">

                <label for="street">Street Address</label>
                <input type="text" id="street" name="street" required>

                <label for="house-number">House Number</label>
                <input type="text" id="house-number" name="house-number" required>

                <label for="postal-code">Postal Code</label>
                <input type="text" id="postal-code" name="postal-code" required>

                <label for="city">City</label>
                <input type="text" id="city" name="city" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

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