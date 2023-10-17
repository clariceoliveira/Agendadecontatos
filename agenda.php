<?php
$servername = "localhost";
$username = "clariceoliveira";
$password = "Unidavi2022@";
$dbname = "agendacontatos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM contatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Código: " . $row["codigo"]. " - Nome: " . $row["nome"]. " - Telefone: " . $row["telefone"]. " - E-mail: " . $row["email"]. "<br>";
    }
} else {
    echo "Nenhum contato encontrado.";
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "agendacontatos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];

$sql = "INSERT INTO contatos (nome, telefone, email) VALUES ('$nome', '$telefone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Contato adicionado com sucesso!";
} else {
    echo "Erro ao adicionar contato: " . $conn->error;
}

$conn->close();
?>

<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "agendacontatos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];

$sql = "UPDATE contatos SET nome='$nome', telefone='$telefone', email='$email' WHERE codigo=$codigo";

if ($conn->query($sql) === TRUE) {
    echo "Contato atualizado com sucesso!";
} else {
    echo "Erro ao atualizar contato: " . $conn->error;
}

$conn->close();
?>

<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "agendacontatos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$codigo = $_POST["codigo"];

$sql = "DELETE FROM contatos WHERE codigo=$codigo";

if ($conn->query($sql) === TRUE) {
    echo "Contato excluído com sucesso!";
} else {
    echo "Erro ao excluir contato: " . $conn->error;
}

$conn->close();
?>

