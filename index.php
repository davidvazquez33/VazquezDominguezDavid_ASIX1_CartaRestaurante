<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta del Restaurante</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Carta del Restaurante</h1>
    </header>
    <main>
        <section id="menu">
            <?php
            // Cargar el archivo XML
            $xml = simplexml_load_file('menu.xml');
            foreach ($xml->plato as $plato) {
                echo "<article class='plato'>";
                echo "<h2>{$plato->nombre}</h2>";
                echo "<p><strong>Descripción:</strong> {$plato->descripcion}</p>";
                echo "<p><strong>Precio:</strong> {$plato->precio} €</p>";
                echo "<p><strong>Calorías:</strong> {$plato->calorias} kcal</p>";
                echo "<p><strong>Características:</strong>";
                foreach ($plato->ingredientes->caracteristica as $caracteristica) {
                    echo " {$caracteristica},";
                }
                echo "</p>";
                echo "</article>";
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Restaurante</p>
    </footer>
</body>
</html>
