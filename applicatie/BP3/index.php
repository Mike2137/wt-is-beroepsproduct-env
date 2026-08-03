<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main>
    <section class="hero">
        <div>
            <h1>SOLE MACHINA</h1>
            <p>
                Fresh ingredients, authentic recipes, and perfectly baked pizzas.
                Discover our handcrafted menu and enjoy the true taste of Italy,
                made with passion and served with a smile.
            </p>
            <a href="menu.php" class="btn hero-button">Order Now</a>
        </div>
    </section>

    <section class="top5">
        <h2>POPULAR PIZZAS</h2>
        <hr>

        <div class="pizza-grid">
            <!-- CARD 1 -->
            <article class="pizza-card">
                <img src="images/pizza-margherita.jpg" alt="Margherita pizza">
                <h3>Margherita</h3>
                <p>Tomato sauce, mozzarella and fresh basil.</p>
                <p>€12.95</p>
                <a href="menu.php" class="btn card-button">Order Now</a>
            </article>
            <!-- CARD 2 -->
            <article class="pizza-card">
                <img src="images/pizza-quattro-stagioni.jpg" alt="Pizza quattro-stagioni">
                <h3>Quattro stagioni</h3>
                <p>Tomato sauce, mozzarella, ham, salami, mushroom and artichoke.</p>
                <p>€15.95</p>
                <a href="menu.php" class="btn card-button">Order Now</a>
            </article>
            <!-- CARD 3 -->
            <article class="pizza-card">
                <img src="images/pizza-siciliana.jpg" alt="Pizza Siciliana">
                <h3>Siciliana</h3>
                <p>Tomato sauce, mozzarella, anchovies, fresh garlic, oregano and olives.</p>
                <p>€14.95</p>
                <a href="menu.php" class="btn card-button">Order Now</a>
            </article>
            <!-- CARD 4 -->
            <article class="pizza-card">
                <img src="images/pizza-burrata-deluxe.jpg" alt="Pizza burrata deluxe">
                <h3>Burrata de Luxe</h3>
                <p>Tomato sauce, mozzarella, nduja, creamy burrata and fresh basil.</p>
                <p>€17.95</p>
                <a href="menu.php" class="btn card-button">Order Now</a>
            </article>
            <!-- CARD 5 -->
            <article class="pizza-card">
                <img src="images/pizza-quattro-formaggi.jpg" alt="Pizza quattro formaggi">
                <h3>Quattro formaggi</h3>
                <p>Mozzarella, gorgonzola, Parmesan cheese and pecorino.</p>
                <p>€15.95</p>
                <a href="menu.php" class="btn card-button">Order Now</a>
            </article>
        </div>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>