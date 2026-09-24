<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Sole Machina</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <header>
        <nav>
            <ul class="nav-left">
                <li><a href="../index.html">HOME</a></li>
                <li><a href="../pages/menu.html">MENU</a></li>
            </ul>

            <a href="../index.html" class="logo">
                <img src="../images/logo.png" alt="Sole Machina logo">
            </a>

            <ul class="nav-right">
                <li><a href="../pages/login-customer.html">LOGIN | REGISTER</a></li>

            </ul>
        </nav>
    </header>

    <main>
        <section class="register-container">

            <div class="register-card">

                <h1>Create Account</h1>

                <p>
                    Create an account to save your delivery information and order faster.
                </p>

                <form action="profile.html" method="post">

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
                    <a href="../pages/login-customer.html">Login here</a>
                </p>

            </div>

        </section>
    </main>

    <footer>
        <section>
            <h2>CONTACT</h2>
            <p>123 Pizza Street, 6868PA, Arnhem</p>
            <p>+31 6 12345678</p>
        </section>

        <section>
            <h3>OPENING HOURS</h3>
            <p>Mon - Thu: 16:00 - 22:00</p>
            <p>Fri - Sun: 12:00 - 23:00</p>
        </section>

        <section>
            <h3>Information</h3>
            <a href="../pages/privacy-statement.html">Privacy Policy</a>
        </section>
    </footer>
</body>

</html>