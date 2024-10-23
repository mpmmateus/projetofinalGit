<?php  include "connection.php"; ?>
<footer class="fixed-bottom"style="background-color: #e3f2fd;">
        <div class="row">
            <div class="col-3">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">
                        <i class="fa-solid fa-copyright d-lg-none"></i>
                        <span class="d-none d-lg-inline">COPYRIGHT</span>
                        <span>2023</span>
                    </li>
                </ul>
            </div>

            <div class="col d-flex justify-content-end">
                <ul class="list-group list-group-horizontal">

                    <?php

                    $sql = "SELECT titulo, ficheiro, link
                    FROM redes
                    WHERE activo = 1
                    ORDER BY ordem DESC, id_redes ASC
                    ";

                    $listaRegistos = mysqli_query($dbc, $sql);

                    while ($value = mysqli_fetch_assoc($listaRegistos)) {

                    ?>

                    <li class="list-group-item">
                        <a href="<?= $value['link'] ?>" target="_blank">
                            <i class="fa-brands <?= $value['ficheiro'] ?>"></i>
                            <span class="d-none d-lg-inline"><?= $value['titulo'] ?></span>
                        </a>
                    </li>

                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
    </footer>
    </body>
    </html>