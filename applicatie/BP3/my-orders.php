<?php
require_once 'includes/header.php';
require_once 'includes/navigation.php';
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

                <tr>
                    <td>#1001</td>
                    <td>22-06-2026</td>
                    <td>2x Margherita, 1x Diavola</td>
                    <td>In Oven</td>
                </tr>

                <tr>
                    <td>#1000</td>
                    <td>21-06-2026</td>
                    <td>1x Quattro Formaggi</td>
                    <td>Delivered</td>
                </tr>

                <tr>
                    <td>#999</td>
                    <td>20-06-2026</td>
                    <td>1x Siciliana</td>
                    <td>On The Way</td>
                </tr>

            </tbody>

        </table>

    </section>

</main>

<?php
require_once 'includes/footer.php';
?>