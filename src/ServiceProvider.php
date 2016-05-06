<?php namespace Glue\Database;

use Glue\App;
use Glue\Interfaces\ServiceProviderInterface;
use Database\Connection;
use Database\Connectors\ConnectionFactory;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(App $glue)
    {
        $glue->singleton('Database\Connection', function($glue) {

            $logger = $glue->bound('Psr\Log\LoggerInterface')
                ? $glue->make('Psr\Log\LoggerInterface')
                : null;

            $factory = new ConnectionFactory(null, $logger);
            return $factory->make(
                $glue->config->get('database')
            );

        });

        $glue->alias('Database\Connection', 'db');
    }
}