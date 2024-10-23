<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Se não estiver autenticado, redireciona para a página de login
    header('Location: login.php');
    exit();
}
// Obtem informações do utilizador
$user_id = $_SESSION['user_id'];

include 'connection.php';
$query = mysqli_query($dbc, "SELECT * FROM users WHERE id = $user_id");
$user_data = mysqli_fetch_assoc($query);

include "header.php";
?>

<section id="areaCliente" class="container">
    <div class="row">
        <div class="col">
            <h2>Bem-vindo à Área do Cliente, <?php echo $user_data['first_name']; ?>!</h2>
            <h3>Informações do utilizador:</h3>
            <p>Nome: <?php echo $user_data['first_name'] . ' ' . $user_data['last_name']; ?></p>
            <p>Email: <?php echo $user_data['email']; ?></p>
            <p>Morada: <?php echo $user_data['morada']; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alterar Morada</h5>
                    <p class="card-text">Atualize a sua Morada.</p>
                    <a href="altera_morada.php" class="btn btn-secondary">Ir para Alterar Morada</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ver Encomendas</h5>
                    <p class="card-text">Visualize o histórico de suas encomendas.</p>
                    <a href="#" class="btn btn-secondary">Ir para Ver Encomendas</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cartão Cliente</h5>
                    <p class="card-text">Consulte as informações do seu cartão cliente.</p>
                    <a href="#" class="btn btn-secondary">Ir para Cartão Cliente</a>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>


<?php include "footer.php"; ?>