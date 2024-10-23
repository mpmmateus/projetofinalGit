
<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    include('connection.php');

    
    $fname = mysqli_real_escape_string($dbc, $_POST['fname']);
    $lname = mysqli_real_escape_string($dbc, $_POST['lname']);
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $gender = mysqli_real_escape_string($dbc, $_POST['gender']);
    $age = mysqli_real_escape_string($dbc, $_POST['age']);
    $morada = mysqli_real_escape_string($dbc, $_POST['morada']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash da senha

    
    $query = "INSERT INTO users (first_name, last_name, email, gender, age, morada, password, registration_date)
              VALUES ('$fname', '$lname', '$email', '$gender', '$age', '$morada', '$password', NOW())";

    // Executa a query
    $result = mysqli_query($dbc, $query);

    // Verifica se a inserção foi bem-sucedida
    if ($result) {
        echo "<h3>Registro bem-sucedido! Faça o login <a href='login.php'>AQUI</a></h3>";
    } else {
        echo "<p style='color:red;'>Erro ao registrar usuário. Por favor, tente novamente.</p>";
        // detalhes do erro
        echo "Erro: " . mysqli_error($dbc);
    }

    // encerra base de dados
    mysqli_close($dbc);
}
?>

<?php
include "header.php";
?>
<section id="registo" class="container">
    <div class="row">
        <div class="col">
            <h2>Fazer o seu registo aqui</h2>
        </div>
    </div>
    <div class="container mt-5" style="max-width: 400px;">
        <form action="registo.php" method="post">
            <div class="form-group">
                <label for="fname">Nome:</label>
                <input type="text" class="form-control" id="fname" name="fname" maxlength="50">
            </div>
            <div class="form-group">
                <label for="lname">Apelido:</label>
                <input type="text" class="form-control" id="lname" name="lname" maxlength="50">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" maxlength="50">
            </div>
            <div class="form-group">
                <label>Género:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="M">
                    <label class="form-check-label" for="male">Masculino</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="F">
                    <label class="form-check-label" for="female">Feminino</label>
                </div>
            </div>
            <div class="form-group">
                <label for="age">Idade:</label>
                <select class="form-control" id="age" name="age">
                    <option value="0-29">Menos de 30</option>
                    <option value="30-60">Entre 30 e 60</option>
                    <option value="60+">Mais 60</option>
                </select>
            </div>
            <div class="form-group">
                <label for="morada">Morada:</label>
                <textarea class="form-control" id="morada" name="morada" rows="3" maxlength="200"></textarea>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <br>
            <button type="submit" class="btn btn-secondary">Enviar</button>
        </form>
    </div>
</section>

<?php include "footer.php"; ?>

