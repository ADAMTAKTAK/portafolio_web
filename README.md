# 👾 Portafolio Web - Adam Taktak

> *">_ Desarrollando soluciones, una línea de código a la vez."*

## 📄 Descripción
Este proyecto es un portafolio web personal con arquitectura Full-Stack. Con una identidad visual oscura inspirada en interfaces de terminal (Gamer/Coder) y detalles de neón, la página web funciona como una carta de presentación interactiva para mostrar mi perfil, habilidades técnicas y proyectos destacados.

El portafolio evolucionó de un diseño estático a una aplicación web dinámica, integrando un backend en PHP y una base de datos MySQL para gestionar un sistema de comentarios interactivo, manteniendo un diseño fluido con desplazamiento suave (smooth scrolling) y una lectura limpia y profesional.

## 🚀 Cómo usar la Web
La navegación en el portafolio es intuitiva y se divide en secciones principales:

1.  **Inicio (>_Adam):**
    * Presentación principal con un saludo al estilo consola de comandos.
    * Botón de acción ("RUN ./ver_proyectos.sh") que redirige directamente a mi perfil de GitHub.
2.  **Proyectos:**
    * Galería visual mostrando mis aplicaciones y trabajos (App Portafolio en Flutter, Contador PS Theme, Catálogo de Juegos).
    * Tarjetas (cards) con efectos hover dinámicos que reaccionan al pasar el cursor.
3.  **Sobre Mí:**
    * Información en formato de tarjetas sobre mis gustos (Gamer, Soulslike, BO2), experiencia técnica (C#, SQL, Flutter, Git) y ubicación.
4.  **Terminal de Notas (>_ Registro de Notas):**
    * **Sistema CRUD Completo:** Una terminal interactiva donde los visitantes pueden dejar mensajes.
    * Permite **Crear** nuevas notas, **Leer** el registro histórico con marcas de tiempo exactas, **Actualizar** comentarios existentes y **Eliminar** registros de la base de datos de forma segura.
5.  **Contacto (System/Footer):**
    * Enlace directo estilizado para abrir automáticamente la ventana de redacción de Gmail hacia mi correo personal.

## 🛠 Tecnologías Empleadas
Este proyecto demuestra buenas prácticas de desarrollo, separando la lógica del diseño utilizando las siguientes herramientas:

* **Frontend:** HTML5 semántico (`<header>`, `<section>`, `<nav>`) y CSS3 (variables globales `:root`, Flexbox, Grid y transiciones).
* **Backend:** PHP para el procesamiento de datos, enrutamiento de formularios y conexión al servidor (estructurado bajo un modelo básico MVC).
* **Base de Datos:** MySQL para el almacenamiento persistente de las notas y usuarios.
* **Tipografía:** Google Fonts integrando `Onest` para la lectura general y `JetBrains Mono` para la estética de terminal.
* **Control de Versiones:** Git y GitHub para el versionado del código.

## 💻 Instalación y Ejecución
Al ser un proyecto dinámico con base de datos, requiere un entorno de servidor local (como Laragon, XAMPP o WAMP) para funcionar correctamente:

1.  **Clonar el repositorio:**
    Abre tu terminal en la carpeta raíz de tu servidor web (ej. `www` en Laragon o `htdocs` en XAMPP) y ejecuta:
    ```bash
    git clone [https://github.com/ADAMTAKTAK/portafolio_web.git](https://github.com/ADAMTAKTAK/portafolio_web.git)
    cd portafolio_web
    ```

2.  **Configurar la Base de Datos:**
    * Abre tu gestor de bases de datos (ej. `http://localhost/phpmyadmin`).
    * Crea una nueva base de datos llamada exactamente `portafolio_web`.
    * Importa el archivo `.sql` que se encuentra en la carpeta principal del proyecto para generar la tabla y estructura necesarias.

3.  **Ejecutar:**
    * Abre tu navegador web y dirígete a `http://localhost/portafolio_web/index.php`.
   
## 📂 Estructura del Proyecto
El código sigue una organización modular separando las vistas, los controladores y los modelos:

```text
portafolio_web/
├── assets/                          # Directorio de recursos multimedia (imágenes y favicon)
├── controller/                      # Lógica de negocio
│   ├── Notes_controller.php         # Scripts para crear y actualizar notas
│   └── delete_note_controller.php   # Script para la eliminación segura de registros
├── model/                           # Lógica de datos
│   └── conn.php                     # Credenciales y conexión a la base de datos MySQL
├── index.php                        # Estructura principal, vistas front-end y formularios
├── styles.css                       # Hojas de estilo, variables de color, neón y animaciones
├── *.sql                            # Archivo de exportación de la base de datos
└── README.md                        # Documentación del proyecto
