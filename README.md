# lista-compra-api
Api developed with Laravel

## Backend Usage

To get started, make sure you have Docker installed on your system.

Then clone the backend repository:

`git clone https://github.com/martapvalls/lista-compra-api.git`

Next, navigate in your terminal to the directory you cloned this, and spin up the containers for the web server by running `docker-compose up -d --build site`.

Exposed ports detailed:

- **nginx** - `:8080`
- **mysql** - `:3306`
- **php** - `:9000`

Then you have to run: 

- `docker-compose run --rm composer update`
And
- `docker-compose run --rm artisan migrate` 

This last one maybe can cause you an error if you are using Windows then you have to migrate manually:
- `docker exec -ti php sh`
- `php artisan migrate`

## Frontend Usage

Frontend developed with Vue. 

To get started clone the frontend repository:

`git clone https://github.com/martapvalls/lista-compra.git`

then run 
```
npm install
```

and

```
npm run serve
```
