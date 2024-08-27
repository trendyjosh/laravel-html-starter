# Starter

A blank Laravel application for the purpose of learning basic HTML and CSS in a Laravel environment.

## Preparing Application

1. Requires [WSL](https://learn.microsoft.com/en-us/windows/wsl/install), [Git](https://git-scm.com/), [Docker](https://www.docker.com/get-started/) and [composer](https://getcomposer.org/download/)
2. Clone this repository by opening a new Ubuntu terminal and entering `git clone https://github.com/trendyjosh/laravel-html-starter.git your-app-name`, replacing `your-app-name` with the new name for your app
3. Open the app in VSCode with `cd your-app-name` then `code .`
4. Download [application dependencies](https://laravel.com/docs/10.x/sail#installing-composer-dependencies-for-existing-projects):

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

5. Create a new '.env' file from '.env.example'
6. Run the following commands:
    - `sail up` to start docker container
    - `sail artisan key:generate` to generate the app key
    - `sail npm install` and `sail composer install` to download dependencies
    - `sail npm run build` to compile the css/js assets
    - `sail artisan migrate` to migrate the database and seed with dummy logins/data
7. You can now access the site at http://localhost

## Adding Pages

1. Create a new file in the resources/views directory in the format `[filename].blade.php` e.g. `about.blade.php`
2. Add a new route in the routes/web.php file as directed;

```
Route::get('url-signature', function () {
    return view('file-name');
});
```

## Editing CSS

The CSS file is stored in the resources/css directory and can be modified directly. To see the changes the file needs to be built before refreshing the web page. This can be done with either of the following:

-   Manually with `sail npm run build` after each save
-   Automatically with `sail npm run dev` to watch for any changes

## Development services

The following services are already included in the sail config so will be automatically started when running `sail up`.

| Service    | Description                         | Url                                      |
| ---------- | ----------------------------------- | ---------------------------------------- |
| phpMyAdmin | Database administration             | [localhost:8080](http://localhost:8080/) |
| mailpit    | Local smtp server for email testing | [localhost:8025](http://localhost:8025/) |
