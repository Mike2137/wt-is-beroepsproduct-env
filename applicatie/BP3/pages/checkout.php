<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Sole Machina</title>
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
        <section class="checkout">

            <h1>Delivery Information</h1>

            <form action="order-confirmation.html" method="post">

                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="street">Street Address</label>
                <input type="text" id="street" name="street" required>

                <label for="house-number">House Number</label>
                <input type="text" id="house-number" name="house-number" required>

                <label for="postal-code">Postal Code</label>
                <input type="text" id="postal-code" name="postal-code" required>

                <label for="city">City</label>
                <input type="text" id="city" name="city" required>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>

                <button type="submit" class="btn">
                    Place Order
                </button>

            </form>

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