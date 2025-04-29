<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Elogios Aleatórios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
            background-color: #f0f8ff;
        }
        input, button {
            padding: 10px;
            font-size: 16px;
        }
        .elogio {
            margin-top: 20px;
            font-size: 24px;
            color: #4caf50;
        }
    </style>
</head>
<body>

    <h1>Mande seu nome, receba um elogio 😎</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Seu nome aqui" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = htmlspecialchars($_POST['nome']);

            $elogios = [
                'você é incrível!',
                'tem um sorriso que ilumina o dia!',
                'manda bem demais!',
                'é uma pessoa fora de série!',
                'tá sempre brilhando!',
                'tem um coração gigante!',
                'é puro carisma!',
            ];

            $aleatorio = $elogios[array_rand($elogios)];

            echo "<div class='elogio'>$nome, $aleatorio</div>";
        }
    ?>

    by: Israel

</body>
</html>
