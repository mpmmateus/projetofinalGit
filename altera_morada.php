<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Se não tiver login efetuado, vai para a página de login
    header('Location: login.php');
    exit();
}

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $newMorada = mysqli_real_escape_string($dbc, $_POST['new_morada']);

    $user_id = $_SESSION['user_id'];
    $updateQuery = "UPDATE users SET morada = '$newMorada' WHERE id = $user_id";
    mysqli_query($dbc, $updateQuery);

    header('Location: areaCliente.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$query = mysqli_query($dbc, "SELECT morada FROM users WHERE id = $user_id");
$user_data = mysqli_fetch_assoc($query);

include "header.php";
?>

<section id="alteramorada" class="container">
    <div class="row">
        <div class="col">
            <h2>Alterar Morada</h2>
        </div>
    </div>
    <div class="container mt-5" style="max-width: 400px;">
        <form method="post" action="altera_morada.php">
            <label for="new_morada">Nova Morada:</label>
            <textarea class="form-control" id="new_morada" name="new_morada" rows="3" maxlength="200" value="<?php echo $user_data['morada']; ?>" required></textarea>
            <br>
            <button type="submit" class="btn btn-secondary">Atualizar Morada</button>
        </form>
    </div>
</section>
<?php include "footer.php"; ?>