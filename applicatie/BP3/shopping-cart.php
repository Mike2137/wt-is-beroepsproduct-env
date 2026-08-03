<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main>
    <section class="shopping-cart">

        <h1>Your Order</h1>

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
                <tr>
                    <td>Margherita</td>
                    <td>€12.95</td>
                    <td>
                        <input type="number" min="1" value="2">
                    </td>
                    <td>€25.90</td>
                </tr>

                <tr>
                    <td>Diavola</td>
                    <td>€15.50</td>
                    <td>
                        <input type="number" min="1" value="1">
                    </td>
                    <td>€15.50</td>
                </tr>
            </tbody>
        </table>

        <a href="checkout.php" class="btn">Checkout</a>

    </section>
</main>

<?php
require_once 'includes/footer.php';
?>