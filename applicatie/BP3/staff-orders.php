<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
require_once 'includes/db_connection.php';

$connection = createConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $orderId = $_POST['order_id'];
    $status = $_POST['status'];

    $sql = "
        UPDATE Pizza_Order
        SET status = :status
        WHERE order_id = :order_id
    ";

    $statement = $connection->prepare($sql);

    $statement->execute([
        ':status' => $status,
        ':order_id' => $orderId
    ]);

    header("Location: staff-orders.php");
    exit;
}

$sql = "
SELECT
    po.order_id,
    po.client_name,
    po.datetime,
    po.status,
    pop.product_name,
    pop.quantity,
    p.price
FROM Pizza_Order AS po
JOIN Pizza_Order_Product AS pop
    ON po.order_id = pop.order_id
JOIN Product AS p
    ON pop.product_name = p.name
ORDER BY po.datetime DESC;
";

$results = $connection->query($sql);

$orders = [];

foreach ($results as $row) {

    $orderId = $row['order_id'];

    if (!isset($orders[$orderId])) {
        $orders[$orderId] = [
            'client_name' => $row['client_name'],
            'datetime' => $row['datetime'],
            'status' => $row['status'],
            'products' => []
        ];
    }

    $orders[$orderId]['products'][] = [
        'name' => $row['product_name'],
        'quantity' => $row['quantity'],
        'price' => $row['price']
    ];
}
?>

<main class="staff-orders">
    <h1>Staff orders:</h1>
    <?php foreach ($orders as $orderId => $order): ?>

        <div class="order-card">

            <h2>Order #<?= $orderId ?></h2>

            <p>Customer: <?= htmlspecialchars($order['client_name']) ?></p>

            <p>Date: <?= $order['datetime'] ?></p>

            <p><strong>Items:</strong></p>

            <ul>
                <?php foreach ($order['products'] as $product): ?>
                    <li>
                        <?= $product['quantity'] ?>x
                        <?= htmlspecialchars($product['name']) ?>
                        - €<?= number_format($product['price'] * $product['quantity'], 2) ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <form method="POST">

                <input type="hidden" name="order_id" value="<?= $orderId ?>">

                <label for="status<?= $orderId ?>">Order Status</label>

                <select name="status" id="status<?= $orderId ?>">
                    <option value="1" <?= $order['status'] == 1 ? 'selected' : '' ?>>Received</option>
                    <option value="2" <?= $order['status'] == 2 ? 'selected' : '' ?>>Preparing</option>
                    <option value="3" <?= $order['status'] == 3 ? 'selected' : '' ?>>In Oven</option>
                    <option value="4" <?= $order['status'] == 4 ? 'selected' : '' ?>>Ready for Delivery</option>
                    <option value="5" <?= $order['status'] == 5 ? 'selected' : '' ?>>On The Way</option>
                    <option value="6" <?= $order['status'] == 6 ? 'selected' : '' ?>>Delivered</option>
                </select>

                <button type="submit">Update Status</button>

            </form>

        </div>

    <?php endforeach; ?>
</main>

<?php
require_once 'includes/footer.php';
?>