<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário - biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de usuário</h1>
        <p class="substituto">Crie sua conta para acessar o sistema da biblioteca</p>
    
    <?php 
    if(isset($_GET['erro']) && $_GET['erro'] === 'email') {
        echo '<div class="mensagem-erro">Este email já está cadastrado.</div>';
    }
    ?>
    </div>
</body>

</html>