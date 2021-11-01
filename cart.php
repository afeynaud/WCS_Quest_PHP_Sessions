<?php
require 'inc/head.php';
require 'inc/data/products.php';
?>

<?php
if(empty($_SESSION['name'])) {
header('Location: /login.php');
exit();
}
?>

<section class="cookies container">
    <div class="row">
        <ul>
            <?php
            $cookiesTotal = array_count_values($_SESSION['add_to_cart']);
            foreach ($cookiesTotal as $cookie => $value) {
                echo '<li class="list-group-item">' . $catalog[$cookie]['name'] . '<br>Quantities: ' . $value . '</li>';
                }
            ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
