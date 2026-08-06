<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header>
    <nav>
        <ul class="nav-left">
            <li><a href="index.php">HOME</a></li>
            <li><a href="menu.php">MENU</a></li>
        </ul>

        <a href="index.php" class="logo">
            <img src="images/logo.png" alt="Sole Machina logo">
        </a>

        <ul class="nav-right">
            <li><a href="shopping-cart.php">CART</a></li>

            <?php if (isset($_SESSION['username'])): ?>

                <li><a href="my-orders.php">MY ORDERS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>

            <?php else: ?>

                <li><a href="login-customer.php">LOGIN | REGISTER</a></li>

            <?php endif; ?>

        </ul>
    </nav>
</header>