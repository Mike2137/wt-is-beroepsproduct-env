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

<?php
require_once 'includes/footer.php';
?>