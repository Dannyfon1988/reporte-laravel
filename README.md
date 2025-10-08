<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🧾 Reporte de Ventas en PHP con Laravel

### 📌 Descripción
Este proyecto implementa un **reporte de ventas** utilizando **PHP** y el framework **Laravel**.  
El sistema genera diferentes reportes basados en una base de datos de ejemplo con **clientes**, **productos** y **órdenes**.  
Los reportes se presentan en tablas HTML generadas dinámicamente con **Eloquent ORM** y el **Query Builder** de Laravel.

---

## ⚙️ Requisitos previos

Asegúrate de tener instalado:

| Tecnología | Versión recomendada | Comando para verificar |
|-------------|---------------------|--------------------------|
| PHP | 8.1 o superior | `php -v` |
| Composer | 2.x | `composer -V` |
| SQLite3 | Incluido en PHP | `sqlite3 --version` |
| Node.js / npm (opcional) | 18+ | `node -v` / `npm -v` |

---

## 🧱 Instalación del proyecto

### 1️⃣ Clonar el repositorio
```bash
git clone https://github.com/Dannyfon1988/reporte-laravel.git
cd reporte-laravel


2️⃣ Instalar dependencias

composer install


3️⃣ Crear la base de datos SQLite
touch database/database.sqlite

4️⃣ Configurar el archivo .env

Edita el archivo .env y configura la base de datos con tu ruta local:

DB_CONNECTION=sqlite
DB_DATABASE=/home/tu_usuario/Escritorio/reporte-laravel/database/database.sqlite


Reemplaza tu_usuario por tu nombre real de usuario en Ubuntu.
Puedes obtener la ruta exacta ejecutando pwd.

5️⃣ Ejecutar migraciones y seeders

Esto crea las tablas (clients, products, orders) e inserta los datos de ejemplo:

php artisan migrate:fresh --seed

🚀 Ejecución de la aplicación

Levanta el servidor de desarrollo de Laravel:

php artisan serve


Luego abre en tu navegador:
👉 http://127.0.0.1:8000

📊 Reportes disponibles
Reporte	Descripción	URL
🧮 Ventas por producto	Muestra cada producto con su cantidad total y valor total vendido.	/report/ventas-por-producto

📺 Compras de televisores	Lista las compras del producto Televisor.	/report/televisores

💰 Clientes con compras mayores a 10M	Clientes con total de compras > 10,000,000.	/report/clientes-mayores-10m

📦 Total de productos ordenados	Suma total de unidades vendidas.	/report/total-productos
🧩 Estructura del proyecto
reporte-laravel/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ReportController.php
│   └── Models/
│       ├── Client.php
│       ├── Product.php
│       └── Order.php
├── database/
│   ├── database.sqlite
│   ├── migrations/
│   └── seeders/
├── resources/
│   └── views/
│       └── report.blade.php
├── routes/
│   └── web.php
└── .env

✅ Resultado esperado

Ejemplo de salida del reporte “Ventas por producto”:

Producto	Referencia	Cantidad	Total
Televisor	100-342	18	27.000.000
Nevera	100-343	5	15.000.000
Microondas	100-344	5	2.500.000
🧠 Observaciones

Se utilizó SQLite por simplicidad, sin necesidad de servidor MySQL.

Los reportes usan agregaciones SQL (SUM, GROUP BY, HAVING) directamente desde el Query Builder.

El diseño de las vistas se basa en HTML y CSS simple.

Compatible con Laravel 10/11 y PHP 8.1+.

✍️ Autor

Nombre: Daniel Iván Gallo Charry
Usuario GitHub: @Dannyfon1988

Framework: Laravel
Lenguaje: PHP
Base de datos: SQLite
Sistema Operativo: Ubuntu 24.04

🧾 Licencia

Este proyecto es de libre uso con fines educativos o de evaluación técnica.
© 2025 Daniel Iván Gallo Charry

