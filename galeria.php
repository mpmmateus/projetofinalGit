<?php
include "header.php";
include "connection.php";
?>



<section id="galeria" class="container">
    <div class="row">
        <div class="col">
            <h2>Produtos</h2>
        </div>
    </div>
    <div class="row">


        <?php

        $sql = "SELECT ficheiro, titulo,preco
                    FROM produto
                    WHERE activo = 1
                    ORDER BY ordem DESC, id_produto ASC
                    ";


        $listaRegistos = mysqli_query($dbc, $sql);

        while ($value = mysqli_fetch_assoc($listaRegistos)) {
        ?>

            <div class="col-6 col-md-4 col-lg-3 col-xxl-2">
                <div class="item">
                    <img src="img/<?= $value["ficheiro"] ?>" class="card-img-top" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value["titulo"] ?></h5>
                        <p class="card-text">Preço: <?= $value["preco"] ?> €</p>
                        <form action="carrinho.php" method="post">
                            <input type="hidden" name="produto" value="<?= $value["titulo"]?>">
                            <input type="hidden" name="preco" value="<?= $value["preco"]?>">
                            <button type="submit" class="btn btn-secondary">Adicionar ao Carrinho</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

</section>



<?php include "footer.php"; ?>