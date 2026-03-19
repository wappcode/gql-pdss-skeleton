<?php

namespace AppModule;

use GPDCore\Core\AbstractModule;

class AppModule extends AbstractModule
{

    /**
     * Array con la configuración del módulo
     *
     * @return array
     */
    function getConfig(): array
    {
        return require(__DIR__ . '/../config/module.config.php');
    }
    function getSchema(): string
    {
        return file_get_contents(__DIR__ . '/../config/schema.graphql');
    }
    function getServices(): array
    {
        return [
            'invokables' => [],
            'factories' => [],
            'aliases' => []
        ];
    }
    function getMiddlewares(): array
    {
        return [];
    }
    public function getRoutes(): array
    {
        return [];
    }
    public function getTypes(): array
    {
        return [];
    }
    /**
     * Array con los resolvers del módulo
     *
     * @return array array(string $key => callable $resolver)
     */
    function getResolvers(): array
    {
        return [
            "Query::echo" => fn($root, $args, $context, $info) => $args["message"],
        ];
    }
}
