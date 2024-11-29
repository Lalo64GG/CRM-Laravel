[![Laravel Logo](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)](https://laravel.com)

[![Build Status](https://github.com/laravel/framework/workflows/tests/badge.svg)](https://github.com/laravel/framework/actions) [![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/framework) [![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/framework) [![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/framework)

# CRM Laravel Practice - Interview Project

**Este proyecto es una práctica de desarrollo de un CRM utilizando el framework Laravel. Se desarrolló como parte de la preparación para una entrevista de trabajo.**

## Descripción

Este proyecto tiene como objetivo construir un sistema básico de CRM (Customer Relationship Management) con Laravel. En el sistema, se gestionan clientes con funcionalidades básicas como la creación, lectura, actualización y eliminación (CRUD).

## Funcionalidades Principales

*   **Gestión de Clientes**: Añadir, visualizar, actualizar y eliminar clientes.
*   **Vistas Interactivas**: Implementación de vistas utilizando el motor de plantillas Blade.
*   **Estructura MVC**: Utilización del patrón de diseño Modelo-Vista-Controlador para la organización del código.

## Requisitos del Sistema

*   PHP 8.0 o superior.
*   Composer.
*   Laravel 9.x o superior.
*   Base de datos MySQL o SQLite.

## Instalación

1.  **Clonar el repositorio**
    
    ```
    [git clone https://github.com/Lalo64GG/CRM-Laravel.git
    cd crm-laravel
    ```
    
2.  **Instalar las dependencias de Composer**
    
    ```
    composer install
    ```
    
3.  **Configurar el archivo .env**
    
    Copia el archivo `.env.example` a `.env`
    
    ```
    cp .env.example .env
    ```
    
    Asegúrate de configurar los parámetros de la base de datos en el archivo `.env`:
    
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=crm_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    
4.  **Generar la clave de la aplicación**
    
    ```
    php artisan key:generate
    ```
    
5.  **Ejecutar migraciones**
    
    ```
    php artisan migrate
    ```
    
6.  **Servir la aplicación**
    
    ```
    php artisan serve
    ```
    
    Ahora puedes acceder a la aplicación en [http://localhost:8000](http://localhost:8000).
    

## Rutas Principales

*   **Lista de Clientes**: `GET /clients`
*   **Crear Cliente**: `GET /clients/create`
*   **Ver Cliente**: `GET /clients/{id}`
*   **Editar Cliente**: `GET /clients/{id}/edit`
*   **Eliminar Cliente**: `DELETE /clients/{id}`

## Aprendizaje

Este proyecto fue desarrollado con el objetivo de practicar y aplicar los conceptos de Laravel, incluyendo:

*   **Rutas y Controladores**: Para manejar la lógica de la aplicación.
*   **Modelos Eloquent**: Para interactuar con la base de datos de manera sencilla y eficiente.
*   **Vistas Blade**: Para la creación de vistas dinámicas y reutilizables.
*   **Migraciones**: Para la gestión de la base de datos.

## Contribuciones

Si deseas contribuir al proyecto, por favor sigue estos pasos:

1.  Haz un fork del proyecto.
2.  Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3.  Realiza tus cambios y confirma los cambios (`git commit -am 'Añadida nueva funcionalidad'`).
4.  Haz push a la rama (`git push origin feature/nueva-funcionalidad`).
5.  Crea un Pull Request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Para más detalles, revisa el archivo [LICENSE](LICENSE).

## Agradecimientos

Gracias a Laravel por proporcionar una excelente herramienta para el desarrollo web y hacer que este proyecto fuera posible.
