<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | Sole Machina</title>
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
        <section class="shopping-cart">

            <h1>Your Order</h1>

            <table>
                <thead>
                    <tr>
                        <th>Pizza</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Margherita</td>
                        <td>€12.95</td>
                        <td>
                            <input type="number" min="1" value="2">
                        </td>
                        <td>€25.90</td>
                    </tr>

                    <tr>
                        <td>Diavola</td>
                        <td>€15.50</td>
                        <td>
                            <input type="number" min="1" value="1">
                        </td>
                        <td>€15.50</td>
                    </tr>
                </tbody>
            </table>

            <a href="checkout.html" class="btn">Checkout</a>

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