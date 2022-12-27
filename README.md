# Cuadros
API RESTful for paint management


## Instalación

- Abrir terminal de su pc 
- Escribir el siguiente comando  docker compose up -d —build 
- Acceder al contendor del api docker exec -ti cuadros_api bash
- Una vez dentro del contenedor escribir  migrations php artisan migrate:fresh  —seed
- Crear usuario con endpoint :  http://localhost:7702/api/register
 

## Requerimientios
- Docker instalado
- Postman para pruebas de los endpoints
 
## Server 
- MariaDB 10.6.11
- Laravel Framework 9.45.1
- PHP 8.1.12 (cli) (built: Oct 27 2022 13:50:40) (NTS)

## Recursos
- Postman Collections dentro de la carpeta postman. Importela en su postman
- Documentación API: https://documenter.getpostman.com/view/12703949/2s8Z6x2tDS
