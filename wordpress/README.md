# Install Wordpress + MySQL + phpMyAdmin 

#### Volumes
For volumes custom dir, in **docker-compose.yaml** file:  
Change **mysql**
```javascript
- ./mysql:/var/lib/mysql
```
Change **wordpress**
```javascript
- ./wordpress:/var/www/html
```

#### Define Environment Variables

Rename **.env-sample** file to **.env**, then change the values:  

| Variable             | Value                                         |
|----------------------|-----------------------------------------------|
| MYSQL_HOST           | _*Hostname Service for MySQL*_                |
| MYSQL_VERSION        | _*Version for MySQL (Current using 5.7.26)*_  |
| MYSQL_ROOT_PASSWORD  | _*Password for MySQL server (User is root)*_  |
| MYSQL_DATABASE       | _*Database name for Wordpress*_               |
| MYSQL_USER           | _*Admin user for Database Wordpress*_         |
| MYSQL_PASSWORD       | _*Password for admin user*_                   |


> Check anothers versions for MySQL [here](https://hub.docker.com/_/mysql/tags)

#### Deploy

Run  

```javascript
docker compose -f docker-compose.yaml up -d
```

#### Install Wordpress
Open in browser and follow steps:
```
http://localhost:8080
```
#### Database MySQL
For phpMyAdmin, with credentials user "root" and MYSQL_ROOT_PASSWORD value from .env file, open in browser:
```
http://localhost:8081
```
Another alternartive use a MySQL client with the credentials:  

| Option    | Value          |
|-----------|----------------|
| Host      | localhost      |
| Database  | MYSQL_DATABASE |
| User      | MYSQL_USER     |
| Password  | MYSQL_PASSWORD |
| Port      | 3001           |
