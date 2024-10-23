<?php
    include "header.php";
    include "connection.php";
?>
    

    <section id="contactos" class="container">
        <div class="row">
            <div class="col">
                <h2>Contactos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <p>
                    <strong> Visite-nos</strong>
                    <br>
                    <br>Lisboa | Sede
                    <br>Vintage
                    <br>Rua Direita
                    <br> 2780-105 Lisboa
                    <br>
                    <br>
                    <br><a href="mailto:info@cinel.pt">info@vintage.pt</a>
                    <br><a href="tel:221456487">221456487</a>
                </p>
            </div>

            <div class="col-3">
                <form action="contactos.php" method="POST" onsubmit="return validarForm();">
                    <div class="mb-3">
                        <label for="formName" required class="form-label">Nome</label>
                        <input type="text" class="form-control" id="formName" name="formName">
                    </div>
                    <div class="mb-3">
                        <label for="formEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formEmail" name="formEmail">
                    </div>
                    <div class="mb-3">
                        <label for="formMensagem" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="formMensagem" name="formMensagem" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formPais" class="form-label">País</label>
                        <select class="form-select" id="formPais" name="formPais">
                            <option value="" selected>Escolha um país...</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Espanha">Espanha</option>
                            <option value="França">França</option>
                            <option value="Inglaterra">Inglaterra</option>
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" checked class="form-check-input" id="formNewsletter" name="formNewsletter">
                        <label class="form-check-label" for="formNewsletter">Subscrever!</label>
                    </div>
                    <button type="submit" class="btn btn-secondary">Enviar Mensagem</button>
                </form>
            </div>

            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1557.035608579092!2d-9.327599500000002!3d38.69320835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ec8d68542ec37%3A0x3b01bc43be14a516!2s2780-105%20Oeiras!5e0!3m2!1spt-PT!2spt!4v1695224897209!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section>

    

<?php include "footer.php"; ?>

