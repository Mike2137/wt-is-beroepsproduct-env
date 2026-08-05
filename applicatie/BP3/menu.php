<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $productName = $_POST['product_name'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$productName])) {
        $_SESSION['cart'][$productName]++;
    } else {
        $_SESSION['cart'][$productName] = 1;
    }
}


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

                    <form method="post">
                        <input
                            type="hidden"
                            name="product_name"
                            value="<?= htmlspecialchars($product['name']) ?>">

                        <button type="submit" class="btn card-button">
                            Order Now
                        </button>
                    </form>
                </article>
            <?php endforeach; ?>
        </div>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>