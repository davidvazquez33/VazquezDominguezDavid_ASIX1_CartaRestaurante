<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de DavMeat</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <header>
        <h1>Carta DavMeat</h1>
    </header>
    <main>
        <?php
        // Cargar el archivo XML
        $xml = simplexml_load_file('xml/menu.xml');
        if (!$xml) {
            echo "<p>Error: No se pudo cargar el archivo XML.</p>";
        } else {
        ?>
        <section id="entrantes">
            <h2>Entrantes</h2>
            <?php
            foreach ($xml->plato as $plato) {
                if ($plato['tipo'] == 'entrante') {
                    echo "<article class='plato'>";
                    echo "<h2>{$plato->nombre}</h2>";
                    echo "<p><strong>Descripción:</strong> {$plato->descripcion}</p>";
                    echo "<p><strong>Precio:</strong> {$plato->precio} €</p>";
                    echo "<p><strong>Calorías:</strong> {$plato->calorias} kcal</p>";
                    echo "<p><strong>Características:</strong>";
                    foreach ($plato->ingredientes->caracteristica as $caracteristica) {
                        echo " {$caracteristica},";
                    }
                    echo "<img src='./img/{$plato->imagen}' alt='Imagen de {$plato->nombre}' />";
                    echo "</p>";
                    echo "</article>";
                }
            }
            ?>
        </section>
        <section id="principales">
            <h2>Platos Principales</h2>
            <?php
            foreach ($xml->plato as $plato) {
                if ($plato['tipo'] == 'principal') {
                    echo "<article class='plato'>";
                    echo "<h2>{$plato->nombre}</h2>";
                    echo "<p><strong>Descripción:</strong> {$plato->descripcion}</p>";
                    echo "<p><strong>Precio:</strong> {$plato->precio} €</p>";
                    echo "<p><strong>Calorías:</strong> {$plato->calorias} kcal</p>";
                    echo "<p><strong>Características:</strong>";
                    foreach ($plato->ingredientes->caracteristica as $caracteristica) {
                        echo " {$caracteristica},";
                    }
                    echo "<img src='./img/{$plato->imagen}' alt='Imagen de {$plato->nombre}' />";
                    echo "</p>";
                    echo "</article>";
                }
            }
            ?>
        </section>
        <section id="postres">
            <h2>Postres</h2>
            <?php
            foreach ($xml->plato as $plato) {
                if ($plato['tipo'] == 'postre') {
                    echo "<article class='plato'>";
                    echo "<h2>{$plato->nombre}</h2>";
                    echo "<p><strong>Descripción:</strong> {$plato->descripcion}</p>";
                    echo "<p><strong>Precio:</strong> {$plato->precio} €</p>";
                    echo "<p><strong>Calorías:</strong> {$plato->calorias} kcal</p>";
                    echo "<p><strong>Características:</strong>";
                    foreach ($plato->ingredientes->caracteristica as $caracteristica) {
                        echo " {$caracteristica},";
                    }
                    echo "<img src='./img/{$plato->imagen}' alt='Imagen de {$plato->nombre}' />";
                    echo "</p>";
                    echo "</article>";
                }
            }
            ?>
        </section>
        <?php
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2025 DavMeat --David Vazquez</p>
    </footer>
</body>
</html>