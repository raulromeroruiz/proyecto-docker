# proyecto-docker

### Iniciar los servicios Nginx, PHP, MySQL, Composer y Artisan

```
docker compose -f docker-compose-azure.yaml up -d
```

### Instalar dependencias de Laravel

```
docker compose -f docker-compose-azure.yaml run --rm composer-service install
docker compose -f docker-compose-azure.yaml run --rm composer-service update
```

### Migrar y poblar las tablas en la BD

```
docker compose -f docker-compose-azure.yaml run --rm artisan-service migrate:refresh --seed
```

### Si Migrate no funciona poblar indivisualmente las tablas

```
docker compose -f docker-compose-azure.yaml run --rm artisan-service db:seed --class=ArtistTableSeeder
docker compose -f docker-compose-azure.yaml run --rm artisan-service db:seed --class=AlbumTableSeeder
docker compose -f docker-compose-azure.yaml run --rm artisan-service db:seed --class=TrackTableSeeder
```