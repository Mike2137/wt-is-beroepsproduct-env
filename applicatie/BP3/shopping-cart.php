<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $productName = $_POST['product_name'];
    $quantity = (int) $_POST['quantity'];

    if ($quantity <= 0) {
        unset($_SESSION['cart'][$productName]);
    } else {
        $_SESSION['cart'][$productName] = $quantity;
    }

    header("Location: shopping-cart.php");
    exit;
}

require_once 'includes/header.php';
require_once 'includes/navigation.php';
require_once 'includes/db_connection.php';

$connection = createConnection();
?>

<main>
    <section class="shopping-cart">

        <h1>Your Order</h1>

        <?php if (empty($_SESSION['cart'])): ?>

            <p>Your shopping cart is empty.</p>

        <?php else: ?>

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
                    <?php $total = 0; ?>

                    <?php foreach ($_SESSION['cart'] as $productName => $quantity): ?>

                        <?php
                        $sql = "
            SELECT name, price
            FROM Product
            WHERE name = :name
        ";

                        $statement = $connection->prepare($sql);

                        $statement->execute([
                            ':name' => $productName
                        ]);

                        $product = $statement->fetch(PDO::FETCH_ASSOC);

                        $subtotal = $product['price'] * $quantity;
                        $total += $subtotal;
                        ?>

                        <tr>
                            <td><?= htmlspecialchars($product['name']) ?></td>

                            <td>€<?= number_format($product['price'], 2) ?></td>

                            <td>
                                <form method="post">
                                    <input
                                        type="hidden"
                                        name="product_name"
                                        value="<?= htmlspecialchars($productName) ?>">

                                    <input
                                        type="number"
                                        name="quantity"
                                        min="0"
                                        value="<?= $quantity ?>">

                                    <button type="submit" name="action" value="update">
                                        Update
                                    </button>
                                </form>
                            </td>
                            <td>€<?= number_format($subtotal, 2) ?></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
            <h2>Total: €<?= number_format($total, 2) ?></h2>

            <div>
                <a href="checkout.php" class="btn">Checkout</a>
            </div>

        <?php endif; ?>


    </section>
</main>

<?php
require_once 'includes/footer.php';
?>