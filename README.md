[Laravel-Tailwind](https://gitlab.com/mathiasappelmans/laravel-tailwind)

# This is a Laravel-Tailwind e-shop demo

```
git clone git@gitlab.com:mathiasappelmans/laravel-tailwind.git
```

## Laravel topics included in this project :

- Gitlab CI/CD pipeline (.gitlab-ci.yml)
- Dockerfile and compose.yaml for local development
- Tests phpunit and features tests, Pest browser tests
- Routes, Blade Template, Controllers, API Routes, Middleware, dedicated Request classes for validation
- Eloquent Relationships (one to many, many to many, has many through, polymorphic relations)
- Migrations and seeders
- models (factories, relationships, scopes)
- database sqlite or mysql

## About Laravel new install
Laravel 12 is out of the box with Tailwind, Vite Bundler and HMR (Hot Module Replacement) for hot refresh frontend development.
```
composer create-project laravel/laravel example-app
cd example-app
npm i
npm run dev
// open another terminal
php artisan serve
```


## Install and serve on localhost

* Copy .env.example and rename .env (or .env.local)
```
cp .env.example .env
```
* Configure your .env file database connection
    * for SQLite, your system need php SQLite installation
    [https://doc.dotdev.be/sql/sqlite](https://doc.dotdev.be/sql/sqlite)
    ```
    Activate extension=pdo_sqlite in php.ini
    ```
    Create your DB file in /database folder or copy paste an existing sqlite file from anywhere
    ```
    # create new file
    touch database/database.sqlite
    ```
    * Install VSCode extension SQLite3 editor from yy0931 to view and manage your DB
* Generate your APP_KEY
```
php artisan key:generate  --env=testing
```
- run `composer install` // vendor dependencies (composer.json)
- run `npm i && npm run dev` // node_modules default frontend dependencies (package.json)
- run `php artisan migrate` to create tables and populate 'product' table
- or run `php artisan migrate:fresh` if you have allready a populated db
- The `fresh` command drops all tables and then re-runs all migrations from scratch. Unlike `refresh`, it doesn't roll back the migrations – it simply drops the tables and runs the `up()` methods again.
- update the database structure with `php artisan make:migration <some_name>` --table=<product>
- If you want to update manually an existing migration file, first run `php artisan migrate:rollback`, then update the migration file, and finally run `php artisan migrate`
- run `php artisan serve` 

---

# Testing : How to write and run TESTS (Feature Tests, Unit Tests, Pest browser tests)

source : https://laravel.com/docs/12.x/testing

### How to use this repository
You do not need to (but you can) `php artisan serve` this App to run the Tests, but you need a database to test persistent datas.

For this tests you can use MySQL or SQLite.

But if you use your existing populated database, be carefull that the tests will empty your database and run all migrations again before running each test, because of using `use RefreshDatabase` in the test class.

So it is better to use a separate SQLite database for testing.

Therefore, you need to create an .env.testing, a separate connection in `config/database.php` and connect it in `phpunit.xml`.

The .env.testing will be used automatically when you run `php artisan test` or `vendor/bin/phpunit`.

The .env or .env.local will be used when you serve the app with `php artisan serve`.

## Step by step to create a testing environment with SQLite in memory database
1. Copy and rename `.env.example` to `.env.testing`
2. configure APP_ENV=Testing in it
3. remove all DB_ entries from it
4. Generate app key : `php artisan key:generate --env=testing`
5. Add a connection in `config/database.php`
```
'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
```
And connect it in `phpunit.xml`
```
<env name="DB_CONNECTION" value="sqlite"/>
<env name="DB_DATABASE" value=":memory:"/>
```

To Run a single Test : `php artisan test --filter test_task_with_no_user` or `vendor/bin/phpunit --filter test_task_with_no_user`

To Run all Tests at once : `php artisan test` or `vendor/bin/phpunit`

Remember, BE CAREFULL !! the `use RefreshDatabase` instruction in `tests/Feature/MyTest.php` will empty the DB and run all migrations again before running each test.

Finally, run 
	php artisan optimize:clear
 to clear the caches if needed.

### ! Tips: MySQL error key too long

Solution 1:

In file appServiceProvider.php in function boot() ->   Schema::defaultStringLength(191);

Solution 2:

Inside config/database.php, replace this line for mysql

```'engine' => null'```

with

```engine' => 'InnoDB ROW_FORMAT=DYNAMIC'```

Then retry    php artisan migrate:fresh

### Deploy on VPS
* You can use the provided Dockerfile and docker-compose.yml to deploy the application on a VPS.
or
git pull
npm run build
php artisan migrate --force

for login test in prod : email:john@doe.be password:pwd




### Laravel Debugbar is hidden in app.css
.phpdebugbar{
    visibility: hidden;
}