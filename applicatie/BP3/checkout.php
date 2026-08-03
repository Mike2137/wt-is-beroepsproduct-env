<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main>
    <section class="checkout">

        <h1>Delivery Information</h1>

        <form action="my-orders.php" method="post">

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

<?php
require_once 'includes/footer.php';
?>