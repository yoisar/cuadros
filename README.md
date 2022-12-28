# Cuadros
API RESTful for paint management


## Instalación

1. - Abrir terminal de su pc 
2. - Escribir el siguiente comando  docker compose up -d —build 
3. - Acceder al contendor del api docker exec -ti cuadros_api bash
4. - Una vez dentro del contenedor escribir  migrations php artisan migrate:fresh  —seed
5. - Crear usuario con endpoint :  http://localhost:7702/api/register
 

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
- Actualmente se ecuentra disponible en http://yoisar.com:7702/api/


## Fix errores instalacion composer  en el contender cuadros_api
1. - abrir terminal
2. - ir a la carpeta princiapl del proyecto.
3. - acceder a la subcarpeta del contenedor api  via "cd ./api/v1/ 
4. - escribir comando "composer install" y responder yes en la pregunta
5. - regresar a la carpeta princiapl del proyecto escribiendo cd .. dos veces 
6. - repetir los pasos de intaslacion de sde el paso 2
