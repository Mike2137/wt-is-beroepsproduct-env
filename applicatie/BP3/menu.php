<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
require_once 'includes/db_connection.php';

$connection = createConnection();

$sql = "
    SELECT name, description, image, price
    FROM Product
    WHERE type_id = 'Pizza'
";

$products = $connection->query($sql);

?>

<main>
    <section class="menu-selection">
        <h1>OUR PIZZAS</h1>
        <h2>Experience the taste of Italy</h2>
        <hr>

        <div class="pizza-grid">
            <?php foreach ($products as $product): ?>
                <article class="pizza-card">
                    <img
                        src="images/<?= htmlspecialchars($product['image']) ?>"
                        alt="<?= htmlspecialchars($product['name']) ?>">

                    <h3><?= htmlspecialchars($product['name']) ?></h3>

                    <p><?= htmlspecialchars($product['description']) ?></p>

                    <p>€<?= number_format($product['price'], 2) ?></p>

                    <a href="shopping-cart.php" class="btn card-button">Order Now</a>
                </article>
            <?php endforeach; ?>
        </div>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>