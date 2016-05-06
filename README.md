# Database for Glue

Use [mrjgreen/database](https://github.com/mrjgreen/database) with [gluephp/glue](https://github.com/gluephp/glue)

## Installation

Use [Composer](http://getcomposer.org):

```bash
$ composer require gluephp/glue-database
```

## Configuration

```php
$app = new Glue\App;

$app->config->override([
    'database' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'username'  => 'root',
        'password'  => 'password',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
    ]
]);
```
More configuration options can be found at [https://github.com/mrjgreen/database](https://github.com/mrjgreen/database)

## Register

```php
$app->register(
    new Glue\Database\ServiceProvider()
);
```

## Get the Database Connection instance

Once the service provider is registered, you can fetch the Whoops instance with:

```php
$db = $app->make('Database\Connection');
```
or use the alias:
```php
$db = $app->db;
```
