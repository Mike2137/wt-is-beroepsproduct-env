<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login-customer.php");
    exit;
}

require_once 'includes/header.php';
require_once 'includes/navigation.php';
require_once 'includes/db_connection.php';

$connection = createConnection();
?>

<main>
    <section class="checkout">

        <h1>Delivery Information</h1>

        <form method="post">

            <label for="address">Delivery Address</label>
            <input
                type="text"
                id="address"
                name="address"
                placeholder="Street, house number, postal code, city"
                required>

            <button type="submit" class="btn">
                Place Order
            </button>

        </form>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>