<?php
    include "model/conn.php";
    include "controller/Notes_controller.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/hoguera.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Onest:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Portafolio | Adam Taktak</title>
</head>
<body>
    <header>
        <h2><a class="logo" href="#">>_Adam</a></h2>
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#proyectos">Proyectos</a>
            <a href="#sobre-mi">Sobre Mí</a>
            <a href="#comentarios" style="color: var(--accent-purple);">Notas</a>
        </nav>
    </header>

    <section id="inicio" class="banner">
        <h1>Hola, soy Adam Taktak 👾</h1>
        <p>Estudiante y desarrollador de software. Entusiasta del código, la lógica y los videojuegos.</p>
        <a href="https://github.com/ADAMTAKTAK" target="_blank" rel="noopener noreferrer" class="btn-terminal">RUN ./ver_proyectos.sh</a>
    </section>

    <section id="proyectos" class="gallery">
        <div class="card">
            <img src="assets/app_portafolio.jpg" alt="App Portafolio en Flutter">
            <h3>App Portafolio</h3>
            <p>Portafolio personal interactivo desarrollado como aplicación móvil utilizando Flutter y Dart.</p>
        </div>
        <div class="card">
            <img src="assets/contador.jpg" alt="App Flutter">
            <h3>Contador PS Theme</h3>
            <p>Aplicación móvil creada con Flutter y Dart, diseñada con una estética inspirada en PlayStation.</p>
        </div>
        <div class="card">
            <img src="assets/thegrid.jpg" alt="Catálogo">
            <h3>Catálogo de Juegos</h3>
            <p>Desarrollo de aplicación móvil estructurada para funcionar como una biblioteca de videojuegos.</p>
        </div>
    </section>

    <section id="sobre-mi" class="info">
        <h2>Un poco sobre mí</h2>
        <div class="tarjetas-info">
            <div class="tarjetas">
                <h4>🎮</h4>
                <p>Gamer apasionado. Fan de los shooters, el género Soulslike y clásicos como BO2.</p>
            </div>
            <div class="tarjetas">
                <h4>💻</h4>
                <p>Experiencia trabajando con C#, SQL, Flutter, Git y diseño de compuertas lógicas.</p>
            </div>
            <div class="tarjetas">
                <h4>📍</h4>
                <p>Desde Venezuela, siempre buscando crear nuevas soluciones y aprender algo nuevo.</p>
            </div>
        </div>
    </section>

    <section id="comentarios" class="comentarios-section">
        <h2>>_ Registro de Notas y Comentarios</h2>
        
        <div class="formulario-container">
            <form action="index.php#comentarios" method="POST" class="neon-form">
                <div class="input-group">
                    <input type="text" name="nombreyapellido" placeholder="Nombre y Apellido" required>
                    <input type="text" name="usuario" placeholder="Usuario (Opcional)">
                </div>
                <input type="email" name="email" placeholder="Correo Electrónico" required>
                <textarea name="nota" placeholder="Deja tu nota en la terminal..." rows="4" required></textarea>
                
                <div class="form-actions">
                    <input type="submit" name="btn_enviar_nota" class="btn-terminal" value="Enviar Nota">
                </div>
            </form>
        </div>

        <div class="notas-grid">
            <?php
            $sql_notas = $conn->query("SELECT * FROM notas ORDER BY id DESC");

            if ($sql_notas->num_rows > 0) {
                while($fila = $sql_notas->fetch_assoc()) {
                    $usr = !empty($fila['usuario']) ? "@" . htmlspecialchars($fila['usuario']) : "";
                    echo "<div class='card nota-card'>";
                    echo "<h3>" . htmlspecialchars($fila['nombreyapellido']) . " <span class='user-tag'>$usr</span></h3>";
                    echo "<p class='fecha-nota'>>_ Log: " . $fila['fechanota'] . "</p>";
                    echo "<p class='contenido-nota'>" . htmlspecialchars($fila['nota']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p style='text-align:center; color:#888; width:100%;'>>_ Sistema vacío. Escribe la primera nota.</p>";
            }
            ?>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="social-links">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ataktak.6013@unimar.edu.ve" target="_blank" rel="noopener noreferrer">>_ Contactar por Email</a>
            </div>
            <p>&copy; 2026 Adam Taktak. Todos los derechos reservados.</p>
            <p class="footer-note">>_ Desarrollado con PHP, MySQL, HTML y CSS</p>
        </div>
    </footer>
</body>
</html>