<?php
// index.php - Página principal do site de venda de ingresso

session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Ingressos</title>
    <style>
        /* Estilos básicos e identidade visual */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #ff4500;
            color: #fff;
            padding: 1.5em 0;
            text-align: center;
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 0.2em;
        }

        header p {
            font-size: 1.2em;
            font-weight: 300;
        }

        nav {
            background-color: #333;
            display: flex;
            justify-content: center;
        }

        nav a {
            color: #fff;
            padding: 1em 1.5em;
            text-decoration: none;
            font-size: 1.1em;
            font-weight: bold;
            transition: background 0.3s;
        }

        nav a:hover {
            background-color: #ff6347;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 2em 1em;
        }

        .eventos-destaque {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5em;
            justify-content: center;
        }

        .evento-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1.5em;
            width: 280px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .evento-card:hover {
            transform: translateY(-5px);
        }

        .evento-card h3 {
            color: #ff4500;
            font-size: 1.4em;
            margin-bottom: 0.5em;
        }

        .evento-card p {
            font-size: 1em;
            margin: 0.2em 0;
            color: #555;
        }
    </style>
</head>
<body>

<header>
    <h1>Venda de Ingressos</h1>
    <p>Encontre ingressos para shows, eventos e muito mais!</p>
</header>

<nav>
    <a href="index.php">Início</a>
    <a href="eventos.php">Eventos</a>
    <a href="ingressos.php">Ingressos</a>
    <a href="contato.php">Contato</a>
    <a href="sobre.php">Sobre Nós</a>
</nav>

<div class="container">
    <h2>Eventos em Destaque</h2>
    <div class="eventos-destaque">
        <?php
        // Exibindo eventos em destaque usando PHP
        $eventos = [
            ["nome" => "Show de Rock", "data" => "15/11/2023", "local" => "Arena da Cidade"],
            ["nome" => "Festival de Jazz", "data" => "20/12/2023", "local" => "Parque Central"],
            ["nome" => "Stand-Up Comedy", "data" => "05/01/2024", "local" => "Teatro Municipal"]
        ];

        foreach ($eventos as $evento) {
            echo "<div class='evento-card'>";
            echo "<h3>" . $evento["nome"] . "</h3>";
            echo "<p><strong>Data:</strong> " . $evento["data"] . "</p>";
            echo "<p><strong>Local:</strong> " . $evento["local"] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>
