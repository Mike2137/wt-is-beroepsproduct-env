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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $address = $_POST['address'];

    $username = $_SESSION['username'];

    $sql = "
    SELECT first_name, last_name
    FROM [User]
    WHERE username = :username
";

    $statement = $connection->prepare($sql);

    $statement->execute([
        ':username' => $username
    ]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    $clientName = $user['first_name'] . " " . $user['last_name'];

    $status = 1;

    $sql = "
    INSERT INTO Pizza_Order (
        client_username,
        client_name,
        personnel_username,
        datetime,
        address,
        status
    )
    VALUES (
        :client_username,
        :client_name,
        :personnel_username,
        GETDATE(),
        :address,
        :status
    )
";

    $statement = $connection->prepare($sql);

    $statement->execute([
        ':client_username' => $username,
        ':client_name' => $clientName,
        ':personnel_username' => 'abrouwer',
        ':address' => $address,
        ':status' => $status
    ]);

    $sql = "
    SELECT MAX(order_id) AS order_id
    FROM Pizza_Order
";

    $statement = $connection->query($sql);

    $order = $statement->fetch(PDO::FETCH_ASSOC);

    $orderId = $order['order_id'];

    $sql = "
    INSERT INTO Pizza_Order_Product (
        order_id,
        product_name,
        quantity
    )
    VALUES (
        :order_id,
        :product_name,
        :quantity
    )
";

    $statement = $connection->prepare($sql);

    foreach ($_SESSION['cart'] as $productName => $quantity) {

        $statement->execute([
            ':order_id' => $orderId,
            ':product_name' => $productName,
            ':quantity' => $quantity
        ]);

        unset($_SESSION['cart']);
        header("Location: my-orders.php");
        exit;
    }
}


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