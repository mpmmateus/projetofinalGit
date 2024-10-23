<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se o formulário de login foi enviado

    
    include("connection.php");

    $login_email = mysqli_real_escape_string($dbc, $_POST['login_email']);
    $login_password = mysqli_real_escape_string($dbc, $_POST['login_password']);

    // Consulta SQL para verificar as credenciais
    $query = "SELECT * FROM users WHERE email = '$login_email'";
    $result = mysqli_query($dbc, $query);

    if ($result) {
        if ($row = mysqli_fetch_assoc($result)) {
            
            if (password_verify($login_password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                echo '<script>window.location.href = "areaCliente.php";</script>';
               
            } else {
                $error_message = "Senha incorreta. Tente novamente.";
            }
        } else {
            $error_message = "Nenhum usuário encontrado com o email fornecido.";
        }
    } else {
        // erro ao executar a consulta na bd
        $error_message = "Erro ao consultar o banco de dados. Tente novamente.";
    }

    mysqli_close($dbc); 
}
include "header.php";
?>

<section id="login" class="container">
    <div class="row">
        <div class="col">
            <h2>Fazer login aqui</h2>
        </div>
    </div>
    <div class="container mt-5" style="max-width: 400px;">

        <form method="post" action="login.php">
            <div class="form-group">
                <label for="login_email">Email:</label>
                <input type="text" class="form-control" name="login_email" maxlength="50">
            </div>
            <div class="form-group">
                <label for="login_password">Password:</label>
                <input type="password" class="form-control" name="login_password" maxlength="50">
            </div>
            <br>
            <button type="submit" class="btn btn-secondary">Login</button>
        </form>

        <p class="mt-3">
            <a href="registo.php">Registrar aqui</a>
        </p>
    </div>
</section>

<?php include "footer.php"; ?>