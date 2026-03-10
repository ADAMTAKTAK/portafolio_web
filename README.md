# 👾 Portafolio Web - Adam Taktak

> *">_ Desarrollando soluciones, una línea de código a la vez."*

## 📄 Descripción
Este proyecto es un portafolio web personal estático desarrollado con HTML y CSS puro. Con una identidad visual oscura inspirada en interfaces de terminal (Gamer/Coder) y detalles de neón, la página web funciona como una carta de presentación interactiva para mostrar mi perfil, habilidades técnicas y proyectos destacados.

El portafolio no es solo un documento; es un diseño fluido que incluye desplazamiento suave (smooth scrolling) y componentes interactivos diseñados para ofrecer una lectura limpia y profesional.

## 🚀 Cómo usar la Web
La navegación en el portafolio es intuitiva y se divide en tres secciones principales:

1.  Inicio (>_Adam):
    * Presentación principal con un saludo al estilo consola de comandos.
    * Botón de acción ("RUN ./ver_proyectos.sh") que redirige directamente a mi perfil de GitHub.
2.  Proyectos:
    * Galería visual mostrando mis aplicaciones y trabajos (App Portafolio en Flutter, Contador PS Theme, Catálogo de Juegos).
    * Tarjetas (cards) con efectos hover dinámicos que reaccionan al pasar el cursor.
3.  Sobre Mí:
    * Información en formato de tarjetas sobre mis gustos (Gamer, Soulslike, BO2), experiencia técnica (C#, SQL, Flutter, Git) y ubicación.
4.  Contacto (System/Footer):
    * Enlace directo estilizado para abrir automáticamente la ventana de redacción de Gmail hacia mi correo personal.

## 🛠 Tecnologías Empleadas
Este proyecto demuestra buenas prácticas de maquetación y diseño moderno utilizando las siguientes herramientas:

* Lenguaje de Marcado: HTML5 con uso de etiquetas semánticas (`<header>`, `<section>`, `<nav>`, `<footer>`).
* Estilos: CSS3 utilizando variables globales (`:root`), Flexbox para diseño responsivo y transiciones.
* Tipografía: Google Fonts integrando `Onest` para la lectura general y `JetBrains Mono` para la estética de terminal.
* Control de Versiones: Git y GitHub para el versionado del código.

## 💻 Instalación y Ejecución
El proyecto es totalmente estático y no requiere instalación de paquetes o dependencias complejas. Para probarlo en tu entorno local:

1.  Clonar el repositorio:
    ```bash
    git clone [https://github.com/ADAMTAKTAK/portafolio_web.git](https://github.com/ADAMTAKTAK/portafolio_web.git)
    cd portafolio_web
    ```

2.  Ejecutar:
    * Opción Básica: Simplemente haz doble clic en el archivo `index.html` para abrirlo en tu navegador predeterminado.
    * Opción Recomendada: Abre la carpeta en **Visual Studio Code** y utiliza la extensión **Live Server** (puerto `5501`) para ejecutar la página en un servidor local.
   
## 📂 Estructura del Proyecto
El código sigue una organización limpia, clásica de proyectos web frontend:

```text
portafolio_web/
├── assets/      # Directorio de recursos multimedia (imágenes de los proyectos y favicon)
├── index.html   # Estructura principal, contenido semántico y enlaces
├── styles.css   # Hojas de estilo, variables de color, neón y animaciones
└── README.md    # Documentación del proyecto
