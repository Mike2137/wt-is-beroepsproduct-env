<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
require_once 'includes/db_connection.php';

$connection = createConnection();

$sql = "
    SELECT name, price
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
            <!-- CARD 1 -->
            <article class="pizza-card">
                <img src="images/pizza-margherita.jpg" alt="Margherita pizza">
                <h3>Margherita</h3>
                <p>Tomato sauce, mozzarella and fresh basil.</p>
                <p>€12.95</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>

            <!-- CARD 2 -->
            <article class="pizza-card">
                <img src="images/pizza-quattro-stagioni.jpg" alt="Pizza quattro-stagioni">
                <h3>Quattro stagioni</h3>
                <p>Tomato sauce, mozzarella, ham, salami, mushroom and artichoke.</p>
                <p>€15.95</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>

            <!-- CARD 3 -->
            <article class="pizza-card">
                <img src="images/pizza-siciliana.jpg" alt="Pizza Siciliana">
                <h3>Siciliana</h3>
                <p>Tomato sauce, mozzarella, anchovies, fresh garlic, oregano and olives.</p>
                <p>€14.95</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>

            <!-- CARD 4 -->
            <article class="pizza-card">
                <img src="images/pizza-burrata-deluxe.jpg" alt="Pizza burrata deluxe">
                <h3>Burrata de Luxe</h3>
                <p>Tomato sauce, mozzarella, nduja, creamy burrata and fresh basil.</p>
                <p>€17.95</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>

            <!-- CARD 5 -->
            <article class="pizza-card">
                <img src="images/pizza-quattro-formaggi.jpg" alt="Pizza quattro formaggi">
                <h3>Quattro formaggi</h3>
                <p>Mozzarella, gorgonzola, Parmesan cheese and pecorino.</p>
                <p>€15.95</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>

            <!-- CARD 6 -->
            <article class="pizza-card">
                <img src="images/pizza-diavola.jpg" alt="Pizza Diavola">
                <h3>Diavola</h3>
                <p>Tomato sauce, mozzarella and spicy Italian salami.</p>
                <p>€15.50</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>

            <!-- CARD 7 -->
            <article class="pizza-card">
                <img src="images/pizza-capricciosa.jpg" alt="Pizza Capricciosa">
                <h3>Capricciosa</h3>
                <p>Tomato sauce, mozzarella, ham, mushrooms and olives.</p>
                <p>€16.50</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>

            <!-- CARD 8 -->
            <article class="pizza-card">
                <img src="images/pizza-prosciutto-rucola.jpg" alt="Pizza Prosciutto e Rucola">
                <h3>Prosciutto e Rucola</h3>
                <p>Tomato sauce, mozzarella, Parma ham, rocket and Parmesan cheese.</p>
                <p>€18.50</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>

            <!-- CARD 9 -->
            <article class="pizza-card">
                <img src="images/pizza-vegetariana.jpg" alt="Pizza Vegetariana">
                <h3>Vegetariana</h3>
                <p>Tomato sauce, mozzarella, bell peppers, zucchini, mushrooms and olives.</p>
                <p>€14.95</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>

            <!-- CARD 10 -->
            <article class="pizza-card">
                <img src="images/pizza-tartufo.jpg" alt="Pizza Tartufo">
                <h3>Tartufo</h3>
                <p>Mozzarella, truffle cream, mushrooms and Parmesan cheese.</p>
                <p>€19.95</p>
                <a href="shopping-cart.php" class="btn card-button">Order Now</a>
            </article>
        </div>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>