
# 📋 InfoControl — Gestión de Usuarios

Este proyecto es una aplicación web sencilla creada como **Trabajo Práctico** en el instituto. Su propósito es administrar usuarios vinculados a provincias argentinas, permitiendo su registro y consulta mediante una interfaz clara y funcional.

---

## 🛠️ Tecnologías Utilizadas

- **PHP (estructurado)** — Desarrollo del lado del servidor.
- **MySQL / MariaDB** — Base de datos relacional.
- **Bootstrap 4/5** — Para el diseño responsive y estilizado del frontend.
- **HTML5 y CSS3** — Estructura y estilo básico.
- **JavaScript** — Validaciones y comportamiento interactivo.

---

## 🧩 Estructura de la Base de Datos

La base de datos se llama `infocontrol` y cuenta con dos tablas principales:

### Tabla: `provincias`
- `idProvincia` (PK)
- `Nombre`

Contiene las 23 provincias argentinas.

### Tabla: `usuarios`
- `idUsuario` (PK)
- `Nombre`
- `Apellido`
- `Correo`
- `Clave`
- `FechaDeAlta`
- `Numero`
- `idProvincia` (FK)

Incluye usuarios con sus datos personales y la provincia a la que pertenecen.

---

## ⚙️ Instalación y Uso

1. **Cloná el repositorio o descargá los archivos del proyecto.**

2. **Importá la base de datos:**
   - Abrí phpMyAdmin.
   - Creá una base de datos llamada `infocontrol`.
   - Importá el archivo SQL provisto (`infocontrol.sql`).

3. **Configurá la conexión en PHP:**
   Usá un archivo de configuración, por ejemplo `config.php`:

   ```php
   <?php
   define('HOST','localhost');
   define('USER','root');
   define('PASSWORD','');
   define('DATABASE','infocontrol');
   ?>

4. **Abrí el proyecto en tu servidor local (XAMPP, WAMP, etc.):**
   - Ubicá la carpeta del proyecto en `htdocs`.
   - Accedé desde el navegador: `http://localhost/infocontrol/`.

---

## ✨ Funcionalidades

- 📄 Registro de nuevos usuarios con selección de provincia.
- 📑 Listado de usuarios existentes.
- 🔐 Contraseña.
- 🔍 Filtros básicos por provincia (opcional según implementación).

---

## 🧪 Notas Técnicas
- El diseño es responsive gracias a Bootstrap.
- Es ideal para aprender relaciones entre tablas y manejo básico de formularios.

---

## 📸 Video

[Ver demostración del sistema](https://drive.google.com/file/d/1Q4E-Cm8Picq1-r3v7JeWo5INt0ef7cLf/view?usp=sharing)

---

## 👨‍💻 Autor

Desarrollado por **Maximiliano Soriano**
📧 maxi.soriano.70.23@gmail.com
