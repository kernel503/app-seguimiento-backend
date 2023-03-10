## Paquetes instalados
### [larevel-orion](https://tailflow.github.io/laravel-orion-docs/)
_Utilizado para la creación de CRUD de tablas independientes._

### [larevel-sanctum](https://laravel.com/docs/9.x/sanctum)
_Paquete para validar las peticiones de la API._  
### [larevel-permission](https://spatie.be/docs/laravel-permission/v5/introduction)
_Gestiona los permisos y roles del apartado web._

### Iniciar los contenedores
docker compose up -d

### Ejecutar la migración
docker-compose exec api_rest_laravel php artisan migrate:refresh --seed

### Crear politica
docker-compose exec api_rest_laravel php artisan make:policy PostPolicy --model=Post
docker-compose exec api_rest_laravel php artisan make:seeder EstadoSolicitud
docker-compose exec api_rest_laravel php artisan make:migration create_puntos_seguimiento_table
sudo chown -R $USER:$USER api-rest/app/Models/

### Listar las rutas
docker-compose exec api_rest_laravel php artisan route:list

### Correr commando-off en contenedor
docker-compose run api_rest_laravel composer install

php artisan make:model MedioDesplazamiento -sc
php artisan make:model Incidente -sc
php artisan make:model Marcador -sc

docker exec -ti tracking_api_rest_laravel_1 bash 
echo 'extension=pdo_pgsql' >> /opt/bitnami/php/etc/php.ini && echo 'extension=php_pdo_pgsql' >> /opt/bitnami/php/etc/php.ini
echo 'extension=pdo_pgsql.so' >> /opt/bitnami/php/etc/php.ini && echo 'extension=pgsql.so' >> /opt/bitnami/php/etc/php.ini