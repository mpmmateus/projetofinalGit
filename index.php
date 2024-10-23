<?php
    include "header.php";
    include "connection.php";
?>
    <section class="container">
        <div class="row">
            <div class="col p-0">

                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <?php

                        $sql = "SELECT titulo, imagem, descricao
                            FROM carrosel
                            WHERE activo = 1
                            ORDER BY ordem DESC, id_carrossel ASC
                            ";

                        $listaRegistos = mysqli_query($dbc, $sql);

                        $i = 0;
                        while ($value = mysqli_fetch_assoc($listaRegistos)) {

                        ?>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>"
                            <?= ($i == 0) ? "class='active'" : '' ?>></button>

                        <?php
                            $i++;
                        }
                        ?>
                    </div>

                    <div class="carousel-inner">

                        <?php
                        $i = 0;
                        mysqli_data_seek($listaRegistos, 0); 
                        while ($value = mysqli_fetch_assoc($listaRegistos)) {
                        ?>

                        <div class="carousel-item <?= ($i == 0) ? "active" : '' ?>">
                            <img src="img/<?= $value['imagem'] ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?= $value['titulo'] ?></h5>
                                <p><?= $value['descricao'] ?></p>
                            </div>
                        </div>

                        <?php
                            $i++;
                        }
                        ?>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section id="destaques" class="container">
        <div class="row">

            <?php

            $sql = "SELECT titulo, ficheiro
                    FROM destaques
                    WHERE activo = 1
                    ORDER BY ordem DESC, id_destaques ASC
                    ";

            $listaRegistos = mysqli_query($dbc, $sql);

            while ($value = mysqli_fetch_assoc($listaRegistos)) {

            ?>

            <div class="col">
                <div class="item">
                    <i class="<?= $value['ficheiro'] ?>"></i>
                    <h5><?= $value['titulo'] ?></h5>
                </div>
            </div>

            <?php
            }
            ?>


        </div>
    </section>
    

    <script>
        const myCarouselElement = document.querySelector('#carouselExampleCaptions')

        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 5000,
            touch: false
        })

    </script>

</body>
<?php include "footer.php"; ?>