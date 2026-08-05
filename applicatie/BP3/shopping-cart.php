<?php
session_start();

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
                    <?php foreach ($_SESSION['cart'] as $productName): ?>

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
                        ?>

                        <tr>
                            <td><?= htmlspecialchars($product['name']) ?></td>

                            <td>€<?= number_format($product['price'], 2) ?></td>

                            <td>1</td>

                            <td>€<?= number_format($product['price'], 2) ?></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>

        <a href="checkout.php" class="btn">Checkout</a>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>