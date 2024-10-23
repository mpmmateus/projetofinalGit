<?php include "header.php";
include "connection.php"; ?>

<section id="galeria" class="container">
    <div class="row">
        <div class="col">
            <h2>Carrinho</h2>
        </div>
    </div>
    <div class="row">
        <div class="container mt-5">

            <?php
            session_start();

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $produto = $_POST['produto'];
                $preco = $_POST['preco'];

                $_SESSION['carrinho'][] = [
                    'produto' => $produto,
                    'preco' => $preco
                ];
            }

            if (isset($_SESSION['carrinho'])) {
                foreach ($_SESSION['carrinho'] as $item) {
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $item['produto'] . '</h5>';
                    echo '<p class="card-text">Preço: ' . $item['preco'] . ' €</p>';
                    echo '</div></div>';
                }
                $total = array_sum(array_column($_SESSION['carrinho'], 'preco'));
                echo '<div class="mt-3">Total:' . $total . ' € </div>';
            } else {
                echo '<p class="mt-3">Carrinho vazio</p>';
            }
            ?>
            <a href="galeria.php" class="btn btn-secondary mt-3">Continuar a comprar</a>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>