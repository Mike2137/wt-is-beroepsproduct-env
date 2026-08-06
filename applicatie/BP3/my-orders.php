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

$username = $_SESSION['username'];

$sql = "
    SELECT order_id, datetime, status
    FROM Pizza_Order
    WHERE client_username = :username
    ORDER BY datetime DESC
";

$statement = $connection->prepare($sql);

$statement->execute([
    ':username' => $username
]);

$orders = $statement->fetchAll(PDO::FETCH_ASSOC);
?>


<main>
    <section class="orders">

        <h1>My Orders</h1>

        <table>

            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Items</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($orders as $order): ?>

                    <?php
                    $sql = "
            SELECT product_name, quantity
            FROM Pizza_Order_Product
            WHERE order_id = :order_id
        ";

                    $statement = $connection->prepare($sql);

                    $statement->execute([
                        ':order_id' => $order['order_id']
                    ]);

                    $items = $statement->fetchAll(PDO::FETCH_ASSOC);

                    $itemList = [];

                    foreach ($items as $item) {
                        $itemList[] = $item['quantity'] . "x " . $item['product_name'];
                    }

                    switch ($order['status']) {
                        case 1:
                            $status = "Pending";
                            break;

                        case 2:
                            $status = "Preparing";
                            break;

                        case 3:
                            $status = "Delivered";
                            break;

                        default:
                            $status = "Unknown";
                    }
                    ?>

                    <tr>
                        <td>#<?= $order['order_id'] ?></td>

                        <td><?= date('d-m-Y', strtotime($order['datetime'])) ?></td>

                        <td><?= implode(", ", $itemList) ?></td>

                        <td><?= $status ?></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>

<?php
require_once 'includes/footer.php';
?>