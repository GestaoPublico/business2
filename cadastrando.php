<?php

$link = mysqli_connect("localhost", "root", "", "tcc");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

<html>
<head>
    <title></title>
    <meta charset="utf-8">

</head>
<body>
<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = ($peso/($altura*$altura));
$qntd_exe = $_POST['qntd_exe'];


$sql = "INSERT INTO usuario VALUES ";
$sql .= "($nome', '$idade', '$email', '$senha', '$peso', '$altura', '$imc', '$qntd_exe', '$sexo')"; 
mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);
echo "Cliente cadastrado com sucesso!";

?>
</body>
</html>