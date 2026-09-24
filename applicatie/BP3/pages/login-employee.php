<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Employee | Sole Machina</title>
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
        <section class="login-container">

            <div class="login-card">

                <h1>Employee Login</h1>

                <p>
                    Access the staff dashboard and manage customer orders.
                </p>

                <form action="staff-orders.html" method="post">

                    <label for="email">Employee Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>

                    <label for="authenticator">
                        Authenticator Code
                    </label>
                    <input type="text" id="authenticator" name="authenticator" maxlength="6" placeholder="123456"
                        required>

                    <button type="submit" class="btn">
                        Login
                    </button>

                </form>

                <p class="customer-link">
                    <a href="login-customer.html">Customer Login</a>
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