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


# Part 1 - Development: Install and serve on localhost

* Copy .env.example and rename .env (or .env.local)
```
cp .env.example .env
```
* Change env to local, testing or production
```
APP_ENV=local
```
* Configure your .env file for SQLite database connection
    * Your system need php SQLite installation
    [https://doc.dotdev.be/sql/sqlite](https://doc.dotdev.be/sql/sqlite)
    and activation of extension=pdo_sqlite in php.ini
    
    * Create your DB file
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

# Part2 - Testing : How to write and run TESTS (Feature Tests, Unit Tests, Pest browser tests)

source : https://laravel.com/docs/12.x/testing

### Important notes about Testing with Laravel
The App is served (`php artisan serve`) on SQLite file database.sqlite in dev, bUt with MYSQL on Production VPS.

In testing environment you can use SQLite not persistent in-memory database or the separate persistent SQLite file testing.sqlite

If you need to keep your existing datas, populated in your database.sqlite, be carefull that if you run the tests on it

it will empty your database.sqlite and run all migrations again before running each test, because of using `use RefreshDatabase` in the test class.

Note that the migrations populate the product and category tables with 12 default products and 4 categories.

So it is better to use a separate testing.sqlite for testing.

You can easily empty and populate again your testing database with `php artisan  --env=testing migrate` (with :fresh or :refresh) and `php artisan  --env=testing migrate:rollback` 

Therefore, you need to create an .env.testing, a separate connection in `config/database.php` and connect it in `phpunit.xml`.

The .env.testing will be used automatically when you run `php artisan test` or `vendor/bin/phpunit`.

The .env or .env.local will be used when you serve the app with `php artisan serve`.

## Create a testing environment with SQLite
1. PHPUnit needs Vite manifest, so run `npm run build` once before running tests.
2. Copy and rename `.env.example` -> `.env.testing`
3. Change APP_ENV=Testing
4. Remove lines DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD
5. Generate app key : `php artisan key:generate --env=testing`
6. If you want an in-memory temporary testing DB  `phpunit.xml` :
```
<env name="DB_CONNECTION" value="sqlite"/>
<env name="DB_DATABASE" value=":memory:">
```
7. If you want a persistent testing SQLite DB, create a file database/testing.sqlite and add a new connection to `config/database.php`

```
'testing-sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('testing.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
```
And connect it in `phpunit.xml`
```
<env name="DB_CONNECTION" value="testing-sqlite"/>
<!-- comment this line if you use a real-on-file sqlite DB  -->
<!-- env name="DB_DATABASE" value=":memory:"/ -->
```

You can migrate a specific environment with `artisan --env=testing migrate`

Or rollback with `artisan --env=testing migrate:rollback`

But you need to configure .env.testing before running these commands
```
DB_CONNECTION=testing-sqlite
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