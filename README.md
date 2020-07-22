# Laravue

Boilerplate de Laravel como API REST + VueJS para manejar el front.

## Instalación

Clonar este repositorio

```bash
git clone https://lcuelloalfa@bitbucket.org/lcuelloalfa/laravue.git
```

Entrar en la carpeta del repositorio
```bash
cd laravue
```

Crear un .env desde .env.example
```bash
cp .env.example .env
```

Crear los contenedores con Docker y Docker-compose

```bash
docker-compose up -d --build
```

Instalar Composer

```bash
docker-compose exec api composer install
```

Migrar las bases de datos

```bash
docker-compose exec api php artisan migrate --seed
```

Esto creará un usuario con las credenciales admin@example.com y contraseña secret

Generar una key
```bash
docker-compose exec api php artisan key:generate
```

Instalar passport
```bash
docker-compose exec api php artisan passport:install --force
```

Asignar la ip local de la maquina de desarrollo y copiar la clave de generada del comando anterior en el archivo .env
```bash
PASSPORT_LOGIN_ENDPOINT=http://192.168.x.x:8080/oauth/token
PASSPORT_CLIENT_ID=2
PASSPORT_CLIENT_SECRET=XXXXXXXXXXXXXXXXXX
```

En el navegador acceder a http://localhost:3000 y probar con las credenciales de inicio

Para ver los logs de todos los contenedores
```bash
docker-compose logs -f
```

Para ver los logs de un contenedor en específico
```bash
docker-compose logs -f api|ui|nginx|postgres
```

Documentación asociada (incompleta): https://drive.google.com/drive/folders/1SE8WiaJ39bpMiql5v9vhn2wHMwvTzy6Y?usp=sharing
