<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\ConsoleOutput;
use Doctrine\DBAL\Logging\Middleware;
use Symfony\Component\Cache\Adapter\PhpFilesAdapter;

class EntityManagerCreator
{
    public static function createEntityManager(): EntityManager
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__ . "/.."],
            true
        );

        $consoleOutput = new ConsoleOutput(ConsoleOutput::VERBOSITY_DEBUG);
        $consoleLogger = new ConsoleLogger($consoleOutput);
        $logMiddleware = new Middleware($consoleLogger);
        $config->setMiddlewares([$logMiddleware]);

        $cacheDirectory = __DIR__ . '/../../var/cache';

        $config->setMetadataCache(
            new PhpFilesAdapter(
                namespace: 'metadata_cache',
                directory: $cacheDirectory
            )
        );

        $config->setQueryCache(
            new PhpFilesAdapter(
                namespace: 'query_cache',
                directory: $cacheDirectory
            )
        );

        $config->setResultCache(
            new PhpFilesAdapter(
                namespace: 'result_cache',
                directory: $cacheDirectory
            )
        );

        $conn = [
            'driver' => 'pdo_mysql',
            'host' =>'127.0.0.1',
            'port' =>'3306',
            'dbname' =>'students',
            'user' =>'root',
            'password' =>'',
        ];

        return EntityManager::create($conn, $config);
    }
}