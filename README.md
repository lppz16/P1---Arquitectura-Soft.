# P1 - Arquitectura de Software

Aplicación sencilla desarrollada en **PHP** y **MySQL** para guardar nombres en una base de datos mediante un formulario web.

## Estructura del proyecto

```
tarea1/
├── index.php        # Formulario para ingresar el nombre
├── conexion.php     # Conexión a la base de datos
├── guardar.php      # Guarda el nombre en la base de datos
└── README.md
```

## Requisitos

- XAMPP
- PHP
- MySQL

## Base de datos

Crear una base de datos llamada:

```sql
tarea1_bd
```

Y una tabla llamada `usuarios`:

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);
```

## Cómo ejecutar

1. Copiar el proyecto en la carpeta `htdocs` de XAMPP.
2. Iniciar **Apache** y **MySQL**.
3. Crear la base de datos y la tabla indicadas anteriormente.
4. Abrir el navegador y entrar a:

```
http://localhost/tarea1/
```

5. Ingresar un nombre y verificar que quede almacenado en la base de datos.

## Autor

Yan Frank Ríos López