# proyecto-docker

### Iniciar los servicios Nginx, PHP, MySQL, Composer y Artisan

```
docker compose -f docker-compose-ok.yaml up -d
```

### Instalar dependencias de Laravel

```
docker compose -f docker-compose-ok.yaml run --rm composer-service install
docker compose -f docker-compose-ok.yaml run --rm composer-service update
```

### Migrar y poblar las tablas en la BD

```
docker compose -f docker-compose-ok.yaml run --rm artisan-service migrate:refresh --seed
```