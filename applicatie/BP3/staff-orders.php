<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main class="staff-orders">
    <h1>Staff orders:</h1>
    <div class="order-card">
        <h2>Order #1001</h2>

        <p>Customer: Mike Winner</p>
        <p>Items: Margherita Pizza, Cola</p>

        <label for="status1001">Order Status</label>

        <select id="status1001">
            <option>Received</option>
            <option selected>Preparing</option>
            <option>In Oven</option>
            <option>Ready for Delivery</option>
            <option>On The Way</option>
            <option>Delivered</option>
        </select>

        <button>Update Status</button>
    </div>


</main>

<footer>
    <section>
        <h3>CONTACT</h3>
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