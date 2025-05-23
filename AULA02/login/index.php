<!DOCTYPE html>
<html lang="pt-br">
    <?php
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomebanco = "aula02";

        $conexao = new mysqli($servidor, $usuario, $senha, $nomebanco);

        if($conexao){
            echo "A conexao foi realizada com sucesso";
        }
    ?>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for='nome'>Nome</label>
        <input type='text' name='nome'/><br>
        <lapel for='senha'>senha</label>
        <input type='password' name='senha'/><br>
        <input type='submit' name='enviar' value='Enviar'/>
        <input type="submit"
        name="login" value="Entrar"/>
    </form> 
    <?php

      if(isset($_GET['enviar'])){
        $nome = $_GET['nome'];
        $senha = $_GET['senha'];
        if($nome === '' || $senha === ''){
            echo "Um dos valores inseridos está vazio ou ambos.";
        }else{
            $sql = "INSERT INTO usuarios (name, passwd) VALUES ('$nome', '$senha');";

            if($conexao->query($sql) === TRUE){
                echo "Deu certo, meu nobre<br>";
            }
        }

    } 
    if(isset($_GET['login'])){
        $nome =$_GET['nome'];
        $senha = $_GET['senha'];

        $sql = "SELECT name, passwd FROM usuarios
        WHERE name ='$nome';";
        $resultado = $conexao->query($sql);
        if($row = $resultado->fetch_assoc()){ 
            if(($row['name'] == $nome) && ($row ['passwd'] == $senha)){

                echo "Usuario existe<br>";

            }else{
                echo "Usuario não existe<br>";
            } 
        }
    }

        

    

    $sql = "SELECT name, passwd FROM usuarios;";
    $resultado  = $conexao->query($sql);

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            echo "Usuário: ".$row['name']."| senha:".$row['passwd']."<br>";
        }
    }


    ?>
</body>
</html>